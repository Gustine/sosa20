<?php
return [
'Sosa-Stradonitz (Ahnentafel)'
  => 'Sosa-Stradonitz',
'A sidebar showing Sosa-Stradonitz number of individuals.'
  => 'Une barre latérale montrant le numéro Sosa-Stradonitz des individus.',
'First, define a valid default individual for the current gedcom.'
  => 'D’abord, définir un individu par défaut valide pour le gedcom courant.',
'Sosa number %s'
  => 'Sosa numéro %s',
'No Sosa number'
  => 'Pas de numéro Sosa',
'(not a direct ancestor)'
  => '(pas un ascendant direct)',
'Click for more informations…'
  => 'Cliquez pour plus d’informations…',
'Sosa table is empty or the tree root has been changed.'
  => 'La table Sosa est vide ou bien la souche de l’arbre a été modifiée.',
'You must be an editor to do this.'
  => 'Vous devez être éditeur pour procéder à cette opération.',
'Sosa table exists.'
  => 'La table Sosa existe.',
'Sosa table is empty.'
  => 'La table Sosa est vide.',
'OK'
  => 'OK',
'Error!'
  => 'Erreur&nbsp;!',
'Go to welcome page'
  => 'Retour à la page d’accueil',
'Family tree root'
  => 'Souche de l’arbre',
'In the numbering of Sosa-Stradonitz, number one is assigned to the root of the family tree ⇨ link to a help page…'
  => 'Dans la numérotation de Sosa-Stradonitz, le numéro un est attribué à la souche de l’arbre généalogique ⇨ lien vers vers une page d’aide…',
'using %s as root'
  => 'en utilisant %s comme souche',
'Back to the previous page'
  => 'Retour à la page précédente',
'Relationship with root…'
  => 'Parenté avec la souche…',
'Update done.'
  => 'Mise à jour faite.',
'The default individual is no longer part of this tree.'
  => 'L’individu par défaut ne fait plus partie de cet arbre.',
'You are not linked to an individual in this family tree.'
  => 'Vous n’êtes pas lié à un individu de cet arbre.',
'//en.wikipedia.org/wiki/Ahnentafel'
  => '//fr.wikipedia.org/wiki/Numérotation_de_Sosa-Stradonitz',
'An ascending branch of a great-grandparent of the root ⇨ link to a help page…'
  => 'Branche ascendante d’un arrière-grand-parent de la souche ⇨ lien vers une page d’aide…',
'//gustine.eu/mode_emploi/sosa-en.php'
  => '//gustine.eu/mode_emploi/sosa.php',

// sidebar.phtml 2025-05
'The default individual of the current gedcom will be used as the root for updating the Sosa numbers.'
  => 'L’individu par défaut du gedcom courant sera utilisé comme la souche pour la mise à jour des numéros Sosa.',
'Update Sosa numbers'
  => 'Mettre à jour les numéros Sosa',
'%1$s is Sosa %2$s (%3$s&nbsp;generation) of'
  => '%1$s est Sosa %2$s (%3$s&nbsp;génération) de',
'⁂ The great-grandparent %1$s is missing. The Sosa table must be rebuilt.'
  => '⁂ L’arrière-grand-parent %1$s manque. Il faut reconstruire la table Sosa.',

// sidebar.phtml 2025-10
'(%1$s generation)'
  => '(%1$s génération)',
'Logged-in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…'
  => 'Les membres connectés qui sont liés à un individu de l’arbre peuvent afficher les numéros Sosa de leurs propres ancêtres ⇨ lien vers une page d’aide…',
'The wt_sosa table does not exist, so we will create it.'
  => 'La table wt_sosa n’existe pas, on va la créer.',
'The structure of the wt_sosa table will need to be modified.'
  => 'La structure de la table wt_sosa va devoir être modifiée.',
'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.'
  => 'Un message d’erreur <span style="background-color: #f8d7da">« There is no active transaction… »</span> va apparaître. Il faudra l’ignorer et recharger la page.',
'Update your Sosa numbers'
  => 'Mettre à jour vos numéros Sosa',
'Update the Sosa numbers in the tree'
  => 'Mettre à jour les numéros Sosa de l’arbre',
'Numbers are calculated from the default individual.'
  => 'Les numéros sont calculés à partir de l’individu par défaut.',
'The numbers are calculated relative on you.'
  => 'Les numéros sont calculés à partir de vous.',
'%1$s is not an ancestor of'
  => '%1$s n’est pas un ancêtre de',
'First, you need to calculate your own Sosa numbers.'
  => 'Il faut d’abord que vous calculiez vos propres numéros Sosa.',

// update.phtml 2025-05
'Updating Sosa numbers'
  => 'Mise à jour des numéros Sosa',
'Sosa table is filled up to generation %s.'
  => 'La table Sosa est remplie jusqu’à la génération %s.',
'But all parents may not have been found!'
  => 'Mais tous les parents n’ont peut-être pas été trouvés&nbsp;!',
'We checked that there were no parent in generation %s'
  => 'On a vérifié l’absence de parent à la génération %s',
'(pedigree collapse)'
  => '(implexes)',
' %s&#37 used'
  => ' utilisée à %s&#37',
'Maximum number of generations for which Sosa numbers will be searched. Defined in resources/views/update.phtml of module sosa20. If too small, Sosa numbers may be missing.'
  => 'Maximum de générations pour lesquelles les numéros Sosa seront recherchés. Défini dans resources/views/update.phtml du module sosa20. Si trop petit, il pourrait manquer des numéros Sosa.',
'maxgen should be increased to check that all the Sosa numbers have been calculated.'
  => 'Il faudrait augmenter maxgen pour vérifier que tous les numéros Sosa ont été calculés.',
'Maximum memory allocated to php. Set in php.d/01_ressourcelimits on the server (apache).'
  => 'Maximum de mémoire attribuée à php. Défini dans php.d/01_ressourcelimits sur le serveur (apache).',
'The process was interrupted to avoid memory overflow.'
  => 'Le calcul a été interrompu pour éviter un dépassement de mémoire.',
'Calculation stopped at generation %s'
  => 'Calcul interrompu génération %s',
' (no parent found so no Sosa number to calculate).'
  => ' (aucun parent trouvé donc aucun numéro Sosa à calculer).',
'Largest Sosa number found. In the case of a pedigree collapse, common ancestors have several numbers, but only the the smallest is displayed in the sidebar.'
  => 'Plus grand numéro Sosa trouvé. En cas d’implexe, les ancêtres communs ont plusieurs numéros mais seul le plus petit est affiché dans la barre latérale.',
'Elapsed time'
  => 'Temps écoulé',

// migration.phtml 2025-10
'Operation successfully completed.'
  => 'Opération terminée avec succès.',
'The numbers calculated previously are assigned to the default user. They are visible to unregistered users and only an editor can update them.'
  => 'Les numéros calculés précédemment sont affectés à l’utilisateur par défaut. Ils sont visibles par les utilisateurs non enregistrés et seul un éditeur peut les mettre à jour.',
'Each registered user present in the tree will be able to generate numbers relating to them (those of their direct ancestors).'
  => 'Chaque utilisateur enregistré et présent dans l’arbre va pouvoir générer les numéros le concernant (ceux de ses ancêtres directs).',

// help.phtml 2025-10
'Help for Sosa²⁰'
  => 'Aide pour Sosa²⁰',
'More informations on gustine.eu.'
  => 'Plus d’informations sur gustine.eu.',
'The default individual is number&nbsp;1'
  => 'L’individu par défaut est numéro&nbsp;1',
'⇨ link to Wikipedia…'
  => '⇨ lien vers Wikipédia…',
'Sosa numbers are calculated in relation to the “default individual” of the tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor status must therefore update them from time to time.'
  => 'Les numéros Sosa sont calculés par rapport à l’« individu par défaut » de l’arbre considéré comme racine (de cujus). Comme cela peut être long, on précalcule tous les numéros et on les stocke. Un utilisateur possédant le statut d’éditeur doit donc les mettre à jour de temps à autre.',
'You can update the default individual numbers, which are visible to everyone.'
  => 'Vous pouvez mettre à jour les numéros de l’individu par défaut, visibles par tous.',
'You’re not allowed to do that.'
  => 'Vous n’êtes pas autorisé à faire cela.',
'A great-grandparent is number&nbsp;1'
  => 'Un arrière-grand-parent est numéro&nbsp;1',
'A grandparent is number&nbsp;1'
  => 'Un grand-parent est numéro&nbsp;1',
'A parent is number&nbsp;1'
  => 'Un parent est numéro&nbsp;1',
'It is assumed that the individuals of the first generations are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.'
  => 'On suppose que les individus des premières générations sont cachés aux visiteurs mais que les huit arrière-grands-parents de la quatrième génération sont visibles.',
'It is assumed that the individuals of the first generations are hidden from visitors but that the four grandparents of the third generation are visible.'
  => 'On suppose que les individus des premières générations sont cachés aux visiteurs mais que les quatre grands-parents de la troisième génération sont visibles.',
'It is assumed that the individuals of the first generations are hidden from visitors but that the two parents are visible.'
  => 'On suppose que les individus des premières générations sont cachés aux visiteurs mais que les deux parents sont visibles.',
'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the great-grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'On détermine ensuite de quel arrière-grand-parent l’individu est l’ancêtre et on affiche un petit symbole représentant sa place sur un diagramme en éventail. Enfin, on affiche l’arrière-grand-parent et on calcule le numéro Sosa correspondant à cette racine secondaire.',
'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'On détermine ensuite de quel grand-parent l’individu est l’ancêtre et on affiche un petit symbole représentant sa place sur un diagramme en éventail. Enfin, on affiche le grand-parent et on calcule le numéro Sosa correspondant à cette racine secondaire.',
'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the parent and calculate the sosa number corresponding to this secondary root.'
  => 'On détermine ensuite de quel parent l’individu est l’ancêtre et on affiche un petit symbole représentant sa place sur un diagramme en éventail. Enfin, on affiche le parent et on calcule le numéro Sosa correspondant à cette racine secondaire.',
'You are number&nbsp;1'
  => 'Vous êtes numéro&nbsp;1',
'Members who are connected and linked to an individual in the tree display their own numbers, calculated based on that individual. They can update these numbers. If they are editors, they can also update the numbers of the default individual, visible to everyone.'
  => 'Les membres connectés et liés à un individu de l’arbre affichent leurs propres numéros, calculés à partir de cet individu. Ils peuvent les mettre à jour. S’ils sont éditeurs, ils peuvent en plus mettre à jour les numéros de l’individu par défaut, visibles par tous.',
'You are connected as %1$s'
  => 'Vous êtes connecté en tant que %1$s',
'You can only update your own numbers.'
  => 'Vous pouvez seulement mettre à jour vos propres numéros.',
'You can update both your own numbers and those of the default individual.'
  => 'Vous pouvez à la fois mettre à jour vos propres numéros et ceux de l’individu par défaut.',
'You are only a visitor to this tree.'
  => 'Vous êtes seulement visiteur de cet arbre.',
'Users who are logged in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not logged in.'
  => 'Les utilisateurs connectés mais qui ne sont pas liés à un individu de l’arbre n’ont pas de numéros personnels à afficher. Les utilisateurs non connectés non plus.',
'You are not logged-in.'
  => 'Vous n’êtes pas connecté.',

];
