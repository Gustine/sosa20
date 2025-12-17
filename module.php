<?php
/**
 * webtrees: online genealogy
 * Copyright (C) 2025 webtrees development team
 * GPLv3 https://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Module Display Sosa - Copyright (C) 2012 André DUMAS http://www.adumas.1s.fr/wt/
 * AD 2014-03-17 sosa-2-5-2 for WT 1-5-2
 */

/**
 * http://gustine.eu/mode_emploi/sosa.php
 * MR 2014-10 update for webtrees 1.6.0 and addition of local language translation.
 * MR 2015-03 update for webtrees 1.7.0 (namespace usage). All functions are combined in a single file.
 * MR 2022-01 update for webtrees 2.0 and 2.1 (doesn’t work with webtrees 1.7).
 * MR 2023-03 use vesta_extended_relationships if exists.
 * MR 2023-07 add close relationship to me (registered user only).
 * bernatbanyuls 2024-09 translations into Spanish and Catalan.
 ┌──────────────────────────────────────────────┐
 │ MR 2024-11 webtrees 2.2 compatibility update │
 └──────────────────────────────────────────────┘
 * MR 2024-11 compact mode : hide the title of the Sosa block.
 * MR 2025-02 if img/symbols.png is present, add small fan-shaped diagrams and display the relevant great-grandparent.
 * MR 2025-05 the memory used by the update is limited to avoid overflows and the calculation is stopped when all the Sosa numbers have been found.
 * MR 2025-06 new algorithm slower but better suited to large numbers of generations.
 * MR 2025-06 bug in update.phtml : ($gen+1).
 * RickM 2025-09 management of feminine ordinal number suffixes (generation).
 * MR 2025-10 if img/image.png is present, display the user's Sosa numbers (requires adding a column to the wt_sosa table).
 * MR 2025-10 built-in help page instead of a link to gustine.eu.
 * MR 2025-11 a settings page makes it easy to manage multiple trees (profile image, symbols, number of generations).
 * MR 2025-11 when neither vesta-extended-relationship nor relationship-chart are enabled.
 * MR 2025-12 when memory_limit == -1 (no limit).
 */

declare(strict_types=1);

use Fig\Http\Message\StatusCodeInterface;
use Fisharebest\Localization\Translation;
use Fisharebest\Webtrees\FlashMessages;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Individual;
use Fisharebest\Webtrees\Module\AbstractModule;

use Fisharebest\Webtrees\Module\ModuleConfigInterface;
use Fisharebest\Webtrees\Module\ModuleConfigTrait;

use Fisharebest\Webtrees\Module\ModuleCustomInterface;
use Fisharebest\Webtrees\Module\ModuleCustomTrait;
use Fisharebest\Webtrees\Module\ModuleSidebarInterface;
use Fisharebest\Webtrees\Module\ModuleSidebarTrait;
use Fisharebest\Webtrees\Registry;
use Fisharebest\Webtrees\Services\TreeService;
use Fisharebest\Webtrees\Services\UserService;
use Fisharebest\Webtrees\View;
use Fisharebest\Webtrees\Tree;
use Fisharebest\Webtrees\Webtrees;
use Fisharebest\Webtrees\Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Illuminate\Database\Capsule\Manager as DB;

/**
 * A sidebar to show Sosa-Stradonitz informations of an individual
 */
class SosaModule extends AbstractModule implements ModuleConfigInterface, ModuleCustomInterface, ModuleSidebarInterface
{
	use ModuleConfigTrait;
	use ModuleCustomTrait;
	use ModuleSidebarTrait;
// ┌─ webtrees 2.0 to 2.2 ────────────────────────
	public const CUSTOM_VERSION = '2025.12.17';
	public const GITHUB_REPO = 'Gustine/sosa20';
// └──────────────────────────────────────────────

	// Github API URL to get the information about the latest releases
	public const GITHUB_API_LATEST_VERSION = 'https://api.github.com/repos/'. self::GITHUB_REPO . '/releases/latest';
	public const GITHUB_API_TAG_NAME_PREFIX = '"tag_name":"';

	/** @var TreeService */
	private $tree_service;

	/**
	 * How should this module be identified in the control panel, etc.?
	 * @return string
	 */
	public function title(): string
	{
		return I18N::translate('Sosa-Stradonitz (Ahnentafel)');
	}

	/**
	 * A sentence describing what this module does.
	 * @return string
	 */
	public function description(): string
	{
		return I18N::translate('A sidebar showing Sosa-Stradonitz number of individuals.');
	}

	/**
	 * The person or organisation who created this module.
	 * @return string
	 */
	public function customModuleAuthorName(): string
	{
		return 'gustine@ovh.fr';
	}

	/**
	 * The version of this module (format : 123.123.123)
	 * @return string
	 */
	public function customModuleVersion(): string
	{
		return self::CUSTOM_VERSION;
	}

	/**
	 * Fetch the latest version of this module.
	 * @return string
	 */
	public function customModuleLatestVersion(): string
	{
		// No update URL provided.
		if (self::GITHUB_API_LATEST_VERSION === '') {
			return $this->customModuleVersion();
		}
		return Registry::cache()->file()->remember(
			$this->name() . '-latest-version',
			function (): string {
				try {
					$client = new Client(
						[
						'timeout' => 3,
						]
					);

					$response = $client->get(self::GITHUB_API_LATEST_VERSION);

					if ($response->getStatusCode() === StatusCodeInterface::STATUS_OK) {
						$content = $response->getBody()->getContents();
						preg_match_all('/' . self::GITHUB_API_TAG_NAME_PREFIX . '\d+\.\d+\.\d+/', $content, $matches, PREG_OFFSET_CAPTURE);

						if(!empty($matches[0]))
						{
							$version = $matches[0][0][0];
							$version = substr($version, strlen(self::GITHUB_API_TAG_NAME_PREFIX));	
						}
						else
						{
							$version = $this->customModuleVersion();
						}

						return $version;
					}
				} catch (GuzzleException $ex) {
					// Can't connect to the server?
				}

				return $this->customModuleVersion();
			},
			86400
		);
	}

	/**
	 * Where to get support for this module.
	 * @return string
	 */
	public function customModuleSupportUrl(): string
	{
		return 'https://github.com/' . self::GITHUB_REPO;
	}

	/**
	 * Bootstrap the module
	 */
	public function boot(): void
	{
		// Register a namespace for our views.
		View::registerNamespace($this->name(), $this->resourcesFolder() . 'views/');
	}

	public function __construct(TreeService $tree_service)
	{
		$this->tree_service = $tree_service;
	}

	/**
	 * Where does this module store its resources
	 * @return string
	 */
	public function resourcesFolder(): string
	{
		return __DIR__ . '/resources/';
	}

	/**
	 * The default position for this sidebar. It can be changed in the control panel.
	 * @return int
	 */
	public function defaultSidebarOrder(): int
	{
		return -1;
	}

	/**
	 * @param Individual $individual
	 * @return bool
	 */
	public function hasSidebarContent(Individual $individual): bool
	{
		return true;
	}

	/**
	 * Load this sidebar synchronously.
	 *
	 * @param Individual $individual
	 * @return string
	 */
	public function getSidebarContent(Individual $individual): string
	{
		// Detects if the module vesta_extended_relationships is installed AND enabled
		$status = DB::table('module')
			->where('module_name', '=', '_vesta_extended_relationships_')
			->value('status') ;
		if ( ($status === 'enabled') && file_exists(__DIR__ . '/../vesta_extended_relationships/module.php') ) $vesta_extended = 1; 
		else {
			$status = DB::table('module')
				->where('module_name', '=', 'relationships_chart')
				->value('status') ;
			if ($status === 'enabled') $vesta_extended = 0; else $vesta_extended = -1;
		}
		$tree = $individual->tree();
		$tree_id = $tree->id();
		$ssbranch_gen = (int) $this->getPreference($tree_id . '-ssbranch_level', '3') +1;

		$symbols_file = $this->getPreference($tree_id . '-symbols_file', 'symbols8.png');
		if ( ($symbols_file !== '') && file_exists(__DIR__ . '/resources/img/' . $symbols_file) ) $urlsymbols = $this->assetUrl('img/' . $symbols_file);
		else $urlsymbols = '';

		$own_numbers = $this->getPreference($tree_id . '-own_numbers', '1');

		$profile_file = $this->getPreference($tree_id . '-profile_file', 'image.webp');
		if ( ($profile_file !== '') && file_exists(__DIR__ . '/resources/img/' . $profile_file) ) $urlimage = $this->assetUrl('img/' . $profile_file);
		else $urlimage = '';

		// Get the signed in user
		$user_service = new UserService();
		$user = $user_service->find(Auth::id());

		return view($this->name() . '::sidebar', [
			'individual' => $individual,
			'vesta_extended' => $vesta_extended,
			'ssbranch_gen' => $ssbranch_gen,
			'urlsymbols' => $urlsymbols,
			'own_numbers' => (int) $own_numbers,
			'urlimage' => $urlimage,
			'user' => $user,
		]);
	}

	/**
	 * The getUpdateAction function replies to "action=Update".
	 *
	 * title : (required!) the title of the called view
	 * bk_gid : identifier of the current gedcom
	 * bk_xref : xref of the current individual (we want to go back to his page after processing)
	 * up_gid : identifier of the gedcom to update
	 * up_xref : root xref of the gedcom to update
	 * user_id : identifier of the user to update
	 * @return ResponseInterface
	 */
	public function getUpdateAction(ServerRequestInterface $request): ResponseInterface
	{
		$bk_gid = $request->getQueryParams()['bk_gid'];
		$bk_xref = $request->getQueryParams()['bk_xref'];
		$up_gid = $request->getQueryParams()['up_gid'];
		$up_xref = $request->getQueryParams()['up_xref'];
		$user_id = $request->getQueryParams()['user_id'];

		if (version_compare(Webtrees::VERSION, '2.2.0', '>=')) {
			$tree = Registry::container()->get(TreeService::class)->find(intval($bk_gid, 10));
		}
		else {
			$tree = app(TreeService::class)->find(intval($bk_gid, 10));
		}

		return $this->viewResponse($this->name() . '::update', [
			'title' => I18N::translate("Updating Sosa numbers"),
			'tree' => $tree,
			'bk_xref' => $bk_xref,
			'up_gid' => $up_gid,
			'up_xref' => $up_xref,
			'user_id' => $user_id,
		]);
	}

	/**
	 * The getCreateAction function replies to "action=Create".
	 *
	 * title : (required!) the title of the called view
	 * bk_gid : identifier of the current gedcom
	 * bk_xref : xref of the current individual (we want to go back to his page after processing)
	 * @return ResponseInterface
	 */
	public function getCreateAction(ServerRequestInterface $request): ResponseInterface
	{
		$bk_gid = $request->getQueryParams()['bk_gid'];
		$bk_xref = $request->getQueryParams()['bk_xref'];

		if (version_compare(Webtrees::VERSION, '2.2.0', '>=')) {
			$tree = Registry::container()->get(TreeService::class)->find(intval($bk_gid, 10));
		} else {
			$tree = app(TreeService::class)->find(intval($bk_gid, 10));
		}

		return $this->viewResponse($this->name() . '::migration', [
			'title' => I18N::translate("Creation"),
			'tree' => $tree,
			'bk_xref' => $bk_xref,
		]);
	}

	/**
	 * The getMigrateAction function replies to "action=Migrate".
	 *
	 * title : (required!) the title of the called view
	 * bk_gid : identifier of the current gedcom
	 * bk_xref : xref of the current individual (we want to go back to his page after processing)
	 * @return ResponseInterface
	 */
	public function getMigrateAction(ServerRequestInterface $request): ResponseInterface
	{
		$bk_gid = $request->getQueryParams()['bk_gid'];
		$bk_xref = $request->getQueryParams()['bk_xref'];

		if (version_compare(Webtrees::VERSION, '2.2.0', '>=')) {
			$tree = Registry::container()->get(TreeService::class)->find(intval($bk_gid, 10));
		} else {
			$tree = app(TreeService::class)->find(intval($bk_gid, 10));
		}

		return $this->viewResponse($this->name() . '::migration', [
			'title' => I18N::translate("Migration"),
			'tree' => $tree,
			'bk_xref' => $bk_xref,
		]);
	}

	/**
	 * The getHelpAction function replies to "action=Help".
	 *
	 * title : (required!) the title of the called view
	 * urlsymbols : if absent, grandparents are not displayed
	 * urlimage : if absent, numbers related to the user are not displayed
	 * bk_gid : identifier of the current gedcom
	 * bk_xref : xref of the current individual (we want to go back to his page after processing)
	 * @return ResponseInterface
	 */
	public function getHelpAction(ServerRequestInterface $request): ResponseInterface
	{
		// Back to previous page
		$bk_gid = $request->getQueryParams()['bk_gid'];
		$bk_xref = $request->getQueryParams()['bk_xref'];

		if (version_compare(Webtrees::VERSION, '2.2.0', '>=')) {
			$tree = Registry::container()->get(TreeService::class)->find(intval($bk_gid, 10));
		} else {
			$tree = app(TreeService::class)->find(intval($bk_gid, 10));
		}
		$ssbranch_gen = (int) $this->getPreference($bk_gid . '-ssbranch_level', '3') +1;

		$symbols_file = $this->getPreference($bk_gid . '-symbols_file', 'symbols8.png');
		if ( ($symbols_file !== '') && file_exists(__DIR__ . '/resources/img/' . $symbols_file) ) $urlsymbols = $this->assetUrl('img/' . $symbols_file);
		else $urlsymbols = '';

		$own_numbers = $this->getPreference($bk_gid . '-own_numbers', '1');

		$profile_file = $this->getPreference($bk_gid . '-profile_file', 'image.webp');
		if ( ($profile_file !== '') && file_exists(__DIR__ . '/resources/img/' . $profile_file) ) $urlimage = $this->assetUrl('img/' . $profile_file);
		else $urlimage = '';

		// Get the signed in user
		$user_service = new UserService();
		$user = $user_service->find(Auth::id());

		// Check for help.png
		if ( file_exists(__DIR__ . '/resources/img/help.png') ) $urlhelp = $this->assetUrl('img/help.png');
		else $urlhelp = '';

		return $this->viewResponse($this->name() . '::help', [
			'title' => I18N::translate("Help"),
			'tree' => $tree,
			'ssbranch_gen' => $ssbranch_gen,
			'urlsymbols' => $urlsymbols,
			'own_numbers' => (int) $own_numbers,
			'urlimage' => $urlimage,
			'urlhelp' => $urlhelp,
			'user' => $user,
			'bk_xref' => $bk_xref,
		]);
	}

	/**
	 * This administration page can be accessed from Control panel / All modules
	 *
	 * @param ServerRequestInterface $request
	 * @return ResponseInterface
	 */
	public function getAdminAction(ServerRequestInterface $request): ResponseInterface
	{
		$this->layout = 'layouts/administration';

		$tree_id = $this->getPreference('last-tree-id', '');

		try {
			$tree = $this->tree_service->find((int)$tree_id);
		} catch (Exception $ex) {
			// the last tree saved doesn't exist anymore. Use the first tree instead.
			$tree = $this->tree_service->all()->first();
			$tree_id = $tree->id();

			// remove settings from non existing tree from the database
			DB::table('module_setting')
				->where('module_name', '=', $this->name())
				->where('setting_name', 'LIKE', '' . $this->getPreference('last-tree-id') . '-%' )
				->delete();

			// reset the last tree id
			$this->setPreference('last-tree-id', '');
		}
		$reset_param = $this->getPreference($tree_id . '-reset_param', '0');

		if ($reset_param === '1') {
			return $this->viewResponse($this->name() . '::settings', [
				'all_trees'      => $this->tree_service->all(),
				'title'          => $this->title(),
				'tree_id'        => $tree_id,
				'ssbranch_level' => '3',
				'symbols_file'   => 'symbols8.png',
				'own_numbers'    => '1',
				'profile_file'   => 'image.webp',
				'reset_param'    => $reset_param,
			]);
		}
		else {
			$ssbranch_level = $this->getPreference($tree_id . '-ssbranch_level', '3');
			$symbols_file = $this->getPreference($tree_id . '-symbols_file', 'symbols8.png');
			$own_numbers = $this->getPreference($tree_id . '-own_numbers', '1');
			$profile_file = $this->getPreference($tree_id . '-profile_file', 'image.webp');

			return $this->viewResponse($this->name() . '::settings', [
				'all_trees'      => $this->tree_service->all(),
				'title'          => $this->title(),
				'tree_id'        => $tree_id,
				'ssbranch_level' => $ssbranch_level,
				'symbols_file'   => $symbols_file,
				'own_numbers'    => $own_numbers,
				'profile_file'   => $profile_file,
				'reset_param'    => $reset_param,
			]);
		}
	}

	/**
	 * Save the user preference.
	 *
	 * @param ServerRequestInterface $request
	 * @return ResponseInterface
	 */
	public function postAdminAction(ServerRequestInterface $request): ResponseInterface
	{
		$params = (array) $request->getParsedBody();

		// store the preferences in the database when editing the form
		$tree_id = $params['tree-id'];
		$this->setPreference('last-tree-id', $tree_id);

        if ($params['refresh'] === '1') {
            $this->setPreference($tree_id . '-reset_param', $params['reset_param'] ?? '0');
         }
	if ($params['save'] === '1') {
		$this->setPreference($tree_id . '-reset_param', '0');
		$this->setPreference($tree_id . '-ssbranch_level', $params['ssbranch_level']);
		$this->setPreference($tree_id . '-symbols_file', $params['symbols_file']);
		$this->setPreference($tree_id . '-own_numbers', $params['own_numbers']);
		$this->setPreference($tree_id . '-profile_file', $params['profile_file']);

		$message = I18N::translate('The settings for the family tree “%s” have been updated.', $this->title());
		FlashMessages::addMessage($message, 'success');
		}

		return redirect($this->getConfigLink());
	}


	/**
	 * Additional/updated translations.
	 * @param string $language
	 * @return array
	 */
	public function customTranslations(string $language): array
	{
		$file = $this->resourcesFolder() . 'lang/' . $language . '.php';

		return file_exists($file) ? (new Translation($file))->asArray() : [];
	}

}; // end class

if (version_compare(Webtrees::VERSION, '2.2.0', '>=')) {
	return Registry::container()->get(SosaModule::class);
}
else {
	return app(SosaModule::class);
}
