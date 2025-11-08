<?php
// Gràcies bernatbanyuls.
return [
'Sosa-Stradonitz (Ahnentafel)'
  => 'Sosa-Stradonitz',
'A sidebar showing Sosa-Stradonitz number of individuals.'
  => 'Una barra lateral  mostra el nombre Sosa dels individus.',
'First, define a valid default individual for the current family tree.'
  => "Primer definisca l'individu per defecte per a l'arbre genealògic actual",
'Sosa number %s'
  => 'Sosa número %s',
'No Sosa number'
  => 'Cap número de Sosa',
'(not a direct ancestor)'
  => "(no hi ha ascendents directes)",
'Click for more informations…'
  => 'Cliqueu per obtenir més informació…',
'The Sosa table is empty or the default individual has been changed.'
  => "La taula Sosa està buida o s'ha canviat la persona per defecte.",
'You must have editor rights, or higher, to do this.'
  => "Heu de tenir drets d'editor o superiors per fer això.",
'Sosa table exists.'
  => 'La taula Sosa existeix',
'The Sosa table is empty.'
  => 'La taula Sosa està buida.',
'OK'
  => "D'acord",
'Error!'
  => 'Error!',
'Family tree root'
  => "Inici de l'arbre",
'The Sosa-Stradonitz numbering system assigns number one to the root of the family tree ⇨ link to a help page…'
  => "En la numeració Sosa-Stradonitz, el número&nbsp;1 s'assigna a l'arrel de l'arbre genealògic ⇨ enllaç a una pàgina d’ajuda…",
'using %s as Sosa 1'
  => "utilitzant %s como Sosa 1",
'Return to the previous page'
  => "Tornar a la pàgina d'abans",
'The default individual is no longer part of this tree.'
  => "L'individu predeterminat ja no forma part d'aquest arbre.",
'You are not linked to an individual in this family tree.'
  => 'No està vinculat a cap individu en aquest arbre genealògic',
'//en.wikipedia.org/wiki/Ahnentafel'
  => '//ca.wikipedia.org/wiki/Ahnentafel',
'An ascending branch of a great-grandparent of the root ⇨ link to a help page…'
  => 'Una branca ascendent d’un besavi de l’arrel ⇨ enllaç a una pàgina d’ajuda…',
'//gustine.eu/mode_emploi/sosa-en.php'
  => '//gustine.eu/mode_emploi/sosa-es.php',

// module.php 2025-11
'The settings for the family tree “%s” have been updated.'
  => 'Els paràmetres de l’arbre genealògic "%s" s’han actualitzat.',

// sidebar.phtml 2025-05
'Family tree #'
  => 'Arbre genealògic núm.',
'The default individual of the current family tree will be used as the root for updating the Sosa numbers.'
  => "El individu per defecte de l'arbre genealògic actual serà l'arrel utilitzada per a actualitzar els nombres Sosa.",
'Update Sosa numbers'
  => 'Actualitza els números de Sosa',
'%1$s is Sosa %2$s (%3$s&nbsp;generation) of'
  => '%1$s és Sosa %2$s (%3$s&nbsp;generació) de',
'⁂ The great-grandparent %1$s is missing. The Sosa table needs rebuilding.'
  => '⁂ Falta el besavi %1$s. Cal reconstruir la taula Sosa.',

// sidebar.phtml 2025-10
'(%1$s generation)'
  => '(%1$s generació)',
'Signed in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…'
  => 'Els membres que han iniciat sessió i que estan relacionats amb un individu de l’arbre genealògic poden veure els números Sosa dels seus propis avantpassats ⇨ enllaçar a una pàgina d’ajuda…',
'The wt_sosa table does not exist, we need to create it.'
  => 'La taula wt_sosa no existeix, així que la crearem.',
'The structure of the wt_sosa table needs to be modified.'
  => 'Caldrà modificar l’estructura de la taula wt_sosa.',
'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.'
  => 'Apareixerà un missatge d’error <span style="background-color: #f8d7da">“There is no active transaction…”</span>. No hi ha cap transacció activa…”</span>. Ignoreu-lo i torneu a carregar la pàgina.',
'Update your Sosa numbers'
  => 'Actualitza els teus números de Sosa',
'Update the Sosa numbers in the tree'
  => 'Actualitza els números de Sosa a l’arbre',
'%1$s is not an ancestor of'
  => '%1$s no és un avantpassat de',
'You need to calculate your own Sosa numbers first.'
  => 'Primer, has de calcular els teus propis números de Sosa.',

// update.phtml 2025-05
'Updating Sosa numbers'
  => 'Actualitzant els números de Sosa',
'The Sosa table is complete to generation %s.'
  => 'La taula Sosa s’ha omplert fins a la generació %s.',
'But all parents may not have been found!'
  => 'Però potser no s’han trobat tots els pares!',
'We checked and there is no parent at generation %s'
  => 'Hem comprovat que no hi havia cap avantpassat directe a la generació %s',
'(pedigree collapse)'
  => '(colapse genealògic)',
' %s&#37 used'
  => ' utilitzat al %s&#37',
'Maximum number of generations for which Sosa numbers will be searched. Defined in resources/views/update.phtml of the sosa20 module. If too low, Sosa numbers may be missing.'
  => 'Nombre màxim de generacions per a les quals es cercaran els números Sosa. Definit a resources/views/update.phtml del mòdul sosa20. Si és massa petit, és possible que faltin els nombres de Sosa.',
'The maxgen parameter should be increased to ensure that all the Sosa numbers have been calculated.'
  => 'S’hauria d’augmentar maxgen per comprovar que s’han calculat tots els nombres de Sosa.',
'Maximum memory allocated to php. Set in php.d/01_ressourcelimits on the server (apache).'
  => 'Memòria màxima assignada a php. Estableix-ho a php.d/01_ressourcelimits al servidor (apache).',
'The calculation was stopped to prevent a possible php ’memory overflow’ error.'
  => 'El procés s’ha interromput per evitar el desbordament de memòria.',
'Calculation stopped at generation %s'
  => 'El càlcul s’ha aturat a la generació %s',
' (there was no parent found therefore no Sosa numbers to calculate).'
  => ' (no s’ha trobat cap pare, per tant, no hi ha número Sosa per calcular).',
'Highest Sosa number found. In the case of a pedigree collapse, common ancestors have several numbers, only the the lowest is displayed in the sidebar.'
  => 'S’ha trobat el nombre de Sosa més gran. En el cas d’un col·lapse genealògic, els avantpassats comuns tenen diversos números, però només es mostra el més petit a la barra lateral.',
'Elapsed time'
  => 'Temps transcorregut',

// migration.phtml 2025-10
'Operation successfully completed.'
  => 'Operació completada correctament.',
'The Sosa numbers calculated previously are assigned to the default user. They are visible to unregistered users and only an editor can update them.'
  => 'Els números calculats prèviament s’assignen a l’usuari per defecte. Són visibles per als usuaris no registrats i només un editor els pot actualitzar.',
'Each registered user present in the tree will be able to generate Sosa numbers relating to them (for their direct ancestors).'
  => 'Cada usuari registrat present a l’arbre podrà generar números relacionats amb ell (els dels seus avantpassats directes).',

// help.phtml 2025-10
'Help for Sosa²⁰'
  => 'Ajuda per a Sosa²⁰',
'See more information at gustine.eu.'
  => 'Més informació a gustine.eu.',
'The default individual is number&nbsp;1'
  => 'L’individu per defecte és el número&nbsp;1',
'⇨ link to Wikipedia…'
  => '⇨ enllaç a de la Viquipèdia…',
'Sosa numbers are calculated in relation to the “default individual” of the family tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor rights, or higher, should update them from time to time.'
  => 'Els nombres Sosa es calculen en relació amb l’individu per defecte de l’arbre considerat com a arrel (proband). Com que això pot trigar molt de temps, tots els nombres es calculen i s’emmagatzemen prèviament. Per tant, un usuari amb estatus d’editor els ha d’actualitzar de tant en tant.',
'You can update the default individual Sosa numbers, which are visible to everyone.'
  => 'Podeu actualitzar els números individuals per defecte, que són visibles per a tothom.',
'You’re not allowed to do that.'
  => 'No teniu permís per fer això.',
'A great-grandparent is number&nbsp;1'
  => 'Un besavi és el número&nbsp;1',
'A grandparent is number&nbsp;1'
  => 'Un avi és el número&nbsp;1',
'A parent is number&nbsp;1'
  => 'Un pare és el número&nbsp;1',
'It is assumed that the first generation individuals are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.'
  => 'Se suposa que els individus de les primeres generacions estan ocults als visitants, però que els vuit besavis de la quarta generació són visibles.',
'It is assumed that the first generation individuals are hidden from visitors but that the four grandparents of the third generation are visible.'
  => 'Se suposa que els individus de les primeres generacions estan ocults als visitants, però que els quatre avis de la tercera generació són visibles.',
'It is assumed that the first generation individuals are hidden from visitors but that both parents are visible.'
  => 'Se suposa que els individus de les primeres generacions estan ocults als visitants, però que tots dos pares són visibles.',
'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the great-grandparent and calculate the Sosa number corresponding to this secondary root.'
  => 'A continuació, determinem de quin besavi és l’individu i mostrem un petit símbol que representa el seu lloc en un diagrama de ventall. Finalment, mostrem el besavi i calculem el nombre de Sosa corresponent a aquesta arrel secundària.',
'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the grandparent and calculate the Sosa number corresponding to this secondary root.'
  => 'A continuació, determinem de quin avi és l’individu i mostrem un petit símbol que representa el seu lloc en un diagrama de ventall. Finalment, mostrem l’avi i calculem el nombre de Sosa corresponent a aquesta arrel secundària.',
'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the parent and calculate the Sosa number corresponding to this secondary root.'
  => 'A continuació, determinem de quin pares és l’individu i mostrem un petit símbol que representa el seu lloc en un diagrama de ventall. Finalment, mostrem el pare i calculem el nombre de Sosa corresponent a aquesta arrel secundària.',
'You are number&nbsp;1'
  => 'Ets el número&nbsp;1',
'Members who are signed in and linked to an individual in the tree display their own Sosa numbers, calculated based on that individual. They can update these numbers. If they have editor rights, or higher, they can also update the numbers of the default individual, visible to everyone.'
  => 'Els membres que estan connectats i vinculats a un individu a l’arbre mostren els seus propis números, calculats en funció d’aquest individu. Poden actualitzar aquests números. Si són editors, també poden actualitzar els números de l’individu per defecte, visible per a tothom.',
'You are signed in as %1$s'
  => 'Estàs connectat com a %1$s',
'You can only update your own numbers.'
  => 'Només pots actualitzar els teus propis números.',
'You can update both your own Sosa numbers and those of the default individual.'
  => 'Pots actualitzar tant els teus propis números de Sosa com els de l’individu per defecte.',
'You are only a visitor to this family tree.'
  => 'Només ets un visitant d’aquest arbre.',
'Users who are signed in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not signed in.'
  => 'Els usuaris que han iniciat la sessió però no estan vinculats a un individu de l’arbre no tenen números personals per mostrar. Tampoc els usuaris que no han iniciat la sessió.',
'You are not signed in.'
  => 'No has iniciat la sessió.',

// settings.phtml 2025-11
'Profile image for the default individual (free height and width)'
  => 'Imatge de perfil per a la persona predeterminada (alçada i amplada lliures)',
'Display the Sosa number corresponding to an ancestor'
  => 'Mostra el número de Sosa corresponent a un avantpassat',
'parents'
  => 'pares',
'grandparents'
  => 'avis',
'great-grandparents'
  => 'besavis',
'Display the Sosa number corresponding to a signed in member'
  => 'Mostra el número de Sosa corresponent a un membre que ha iniciat la sessió',
'Sprite image for symbols (height: 35px, width: 72 or 144 or 288 px)'
  => 'Sprite per a símbols (alçada: 35px, amplada: 72 o 144 o 288px)',

];
