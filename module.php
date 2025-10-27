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
 */

declare(strict_types=1);

use Fig\Http\Message\StatusCodeInterface;
use Fisharebest\Localization\Translation;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Individual;
use Fisharebest\Webtrees\Module\AbstractModule;
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
class SosaModule extends AbstractModule implements ModuleCustomInterface, ModuleSidebarInterface
{
	use ModuleCustomTrait;
	use ModuleSidebarTrait;
// ┌─ Custom module version ──────────────────────┐
	public const CUSTOM_VERSION = '2025.10.27';
// └──────────────────────────────────────────────┘
	// Github repository
	public const GITHUB_REPO = 'Gustine/sosa20';

	// Github API URL to get the information about the latest releases
	public const GITHUB_API_LATEST_VERSION = 'https://api.github.com/repos/'. self::GITHUB_REPO . '/releases/latest';
	public const GITHUB_API_TAG_NAME_PREFIX = '"tag_name":"';

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
	 * The default position for this sidebar. It can be changed in the control panel.
	 * @return int
	 */
	public function defaultSidebarOrder(): int
	{
		return -1;
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
	 * A URL that will provide the latest stable version of this module.
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

	/**
	 * Where does this module store its resources
	 * @return string
	 */
	public function resourcesFolder(): string
	{
		return __DIR__ . '/resources/';
	}

	/**
	 * @param Individual $individual
	 * @return bool
	 */
	public function hasSidebarContent(Individual $individual): bool
	{
		return true;
	}

	/* ┌──────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┐
	   │ Example of multi-tree configuration based on gedcom name                                                                         │
	   │ $ssbranch_gen: depth of secondary root calculation           ⇨ 4: 8 great-grandparents  ⇨ 3: 4 grandparents ⇨ 2: 2 parents       │
	   │ $urlsymbols: height:35px; width:36px * 2^($ssbranch_gen -1)  ⇨ 4: 35 x 288px            ⇨ 3: 35 x 144px     ⇨ 2: 35 x 72px       │
	   │                                                                                                                                  │
	   │ Exemple de configuration multi arbres en fonction du nom du gedcom                                                               │
	   │ $ssbranch_gen  profondeur du calcul de la racine secondaire  ⇨ 4: 8 arrière-grands-parents  ⇨ 3: 4 grands-parents ⇨ 2: 2 parents │
	   │ $urlsymbols: height:35px; width:36px * 2^($ssbranch_gen -1)  ⇨ 4: 35 x 288px                ⇨ 3: 35 x 144px       ⇨ 2: 35 x 72px │
	   └──────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────┘
	 */
	public function MultiTreeParam(Tree $tree): array
	{
		$param = array();

		// default values
		$ssbranch_gen = 4;
		if ( file_exists(__DIR__ . '/resources/img/symbols.png') ) $urlsymbols = $this->assetUrl('img/symbols.png');
		elseif ( file_exists(__DIR__ . '/resources/img/symbols.webp') ) $urlsymbols = $this->assetUrl('img/symbols.webp');
		elseif ( file_exists(__DIR__ . '/resources/img/symbols.jpg') ) $urlsymbols = $this->assetUrl('img/symbols.jpg');
		else $urlsymbols = '';

		if ( file_exists(__DIR__ . '/resources/img/image.webp') ) $urlimage = $this->assetUrl('img/image.webp');
		elseif ( file_exists(__DIR__ . '/resources/img/image.jpg') ) $urlimage = $this->assetUrl('img/image.jpg');
		elseif ( file_exists(__DIR__ . '/resources/img/image.png') ) $urlimage = $this->assetUrl('img/image.png');
		else $urlimage = '';

		// customisation
		switch ( $tree->Name() ) {
			case 'test_symbols' :
				$ssbranch_gen = 3;
				if ( file_exists(__DIR__ . '/resources/img/symbols4.png') ) $urlsymbols = $this->assetUrl('img/symbols4.png');
				break;
			case 'test_image' :
				if ( file_exists(__DIR__ . '/resources/img/image-1pixel.png') ) $urlimage = $this->assetUrl('img/image-1pixel.png');
				break;
		}

		if ($ssbranch_gen > 4) $ssbranch_gen = 4; // otherwise, sidebar.phtml must be extended ($symbol[>7] not defined)
		if ($ssbranch_gen < 2) $ssbranch_gen = 2;
		$param[0] = $ssbranch_gen; $param[1] = $urlsymbols; $param[2] = $urlimage;
		return $param;
	}

	/**
	 * Load this sidebar synchronously.
	 * @param Individual $individual
	 * @return string
	 */
	public function getSidebarContent(Individual $individual): string
	{
		// Detect vesta_extended_relationships module
		$vesta_extended = file_exists(__DIR__ . '/../vesta_extended_relationships/module.php') ? 1 : 0;

		$tree = $individual->tree();

		// Get the logged-in user
		$user_service = new UserService();
		$user = $user_service->find(Auth::id());

		return view($this->name() . '::sidebar', [
			'individual' => $individual,
			'vesta_extended' => $vesta_extended,
			'user' => $user,
			'param' => $this->MultiTreeParam($tree),
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
		// Get the logged-in user
		$user_service = new UserService();
		$user = $user_service->find(Auth::id());

		// Back to previous page
		$bk_gid = $request->getQueryParams()['bk_gid'];
		$bk_xref = $request->getQueryParams()['bk_xref'];

		if (version_compare(Webtrees::VERSION, '2.2.0', '>=')) {
			$tree = Registry::container()->get(TreeService::class)->find(intval($bk_gid, 10));
		} else {
			$tree = app(TreeService::class)->find(intval($bk_gid, 10));
		}

		// Check for help.png or .jpg or .webp
		if ( file_exists(__DIR__ . '/resources/img/help.png') ) $urlhelp = $this->assetUrl('img/help.png');
		elseif ( file_exists(__DIR__ . '/resources/img/help.jpg') ) $urlhelp = $this->assetUrl('img/help.jpg');
		elseif ( file_exists(__DIR__ . '/resources/img/help.webp') ) $urlhelp = $this->assetUrl('img/help.webp');
		else $urlhelp = '';

		return $this->viewResponse($this->name() . '::help', [
			'title' => I18N::translate("Help"),
			'tree' => $tree,
			'param' => $this->MultiTreeParam($tree),
			'urlhelp' => $urlhelp,
			'user' => $user,
			'bk_xref' => $bk_xref,
		]);
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
