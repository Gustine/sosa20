<?php
// Gràcies bernatbanyuls.
return [
'Sosa-Stradonitz (Ahnentafel)'
  => 'Sosa-Stradonitz',
'A sidebar showing Sosa-Stradonitz number of individuals.'
  => 'Una barra lateral  mostra el nombre Sosa dels individus.',
'First, define a valid default individual for the current gedcom.'
  => "Primer definisca l'individu per defecte per al GEDCOM actual!",
'Sosa number %s'
  => 'Sosa número %s',
'No Sosa number'
  => 'Cap número de Sosa',
'(not a direct ancestor)'
  => "(no hi ha ascendents directes)",
'Click for more informations…'
  => 'Cliqueu per obtenir més informació…',
'Sosa table is empty or the tree root has been changed.'
  => "La taula Sosa està buida o s'ha canviat l'arrel de l’arbre.",
'You must be an editor to do this.'
  => "Cal ser administrador o editor per finalitzar l'operació.",
'Sosa table exists.'
  => 'La taula Sosa existeix',
'Sosa table is empty.'
  => 'La taula Sosa està buida.',
'OK'
  => "D'acord",
'Error!'
  => 'Error!',
'Go to welcome page'
  => "Anar a la plana d'inici",
'Family tree root'
  => "Inici de l'arbre",
'In the numbering of Sosa-Stradonitz, number one is assigned to the root of the family tree ⇨ link to a help page…'
  => "En la numeració Sosa-Stradonitz, el número&nbsp;1 s'assigna a l'arrel de l'arbre genealògic ⇨ enllaç a una pàgina d’ajuda…",
'using %s as root'
  => "Utilitzant %s como l'arrel",
'Back to the previous page'
  => "Tornar a la pàgina d'abans",
'Relationship with root…'
  => "Relació amb l'arrel…",
'Update done.'
  => 'Actualització acabada.',
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

// sidebar.phtml 2025-05
'The default individual of the current gedcom will be used as the root for updating the Sosa numbers.'
  => "El individu per defecte del gedcom actual serà l'arrel utilitzada per a actualitzar els nombres Sosa.",
'Update Sosa numbers'
  => 'Actualitza els números de Sosa',
'%1$s is Sosa %2$s (%3$s&nbsp;generation) of'
  => '%1$s és Sosa %2$s (%3$s&nbsp;generació) de',
'⁂ The great-grandparent %1$s is missing. The Sosa table must be rebuilt.'
  => '⁂ Falta el besavi %1$s. Cal reconstruir la taula Sosa.',

// sidebar.phtml 2025-10
'(%1$s generation)'
  => '(%1$s generació)',
'Logged-in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…'
  => 'Els membres que han iniciat sessió i que estan relacionats amb un individu de l’arbre genealògic poden veure els números Sosa dels seus propis avantpassats ⇨ enllaçar a una pàgina d’ajuda…',
'The wt_sosa table does not exist, so we will create it.'
  => 'La taula wt_sosa no existeix, així que la crearem.',
'The structure of the wt_sosa table will need to be modified.'
  => 'Caldrà modificar l’estructura de la taula wt_sosa.',
'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.'
  => 'Apareixerà un missatge d’error <span style="background-color: #f8d7da">“There is no active transaction…”</span>. No hi ha cap transacció activa…”</span>. Ignoreu-lo i torneu a carregar la pàgina.',
'Update your Sosa numbers'
  => 'Actualitza els teus números de Sosa',
'Update the Sosa numbers in the tree'
  => 'Actualitza els números de Sosa a l’arbre',
'Numbers are calculated from the default individual.'
  => 'Els números es calculen a partir de l’individu per defecte.',
'The numbers are calculated relative on you.'
  => 'Els números es calculen en funció de tu.',
'%1$s is not an ancestor of'
  => '%1$s no és un avantpassat de',
'First, you need to calculate your own Sosa numbers.'
  => 'Primer, has de calcular els teus propis números de Sosa.',

// update.phtml 2025-05
'Updating Sosa numbers'
  => 'Actualitzant els números de Sosa',
'Sosa table is filled up to generation %s.'
  => 'La taula Sosa s’ha omplert fins a la generació %s.',
'But all parents may not have been found!'
  => 'Però potser no s’han trobat tots els pares!',
'We checked that there were no parent in generation %s'
  => 'Hem comprovat que no hi havia cap avantpassat directe a la generació %s',
'(pedigree collapse)'
  => '(colapse genealògic)',
' %s&#37 used'
  => ' utilitzat al %s&#37',
'Maximum number of generations for which Sosa numbers will be searched. Defined in resources/views/update.phtml of module sosa20. If too small, Sosa numbers may be missing.'
  => 'Nombre màxim de generacions per a les quals es cercaran els números Sosa. Definit a resources/views/update.phtml del mòdul sosa20. Si és massa petit, és possible que faltin els nombres de Sosa.',
'maxgen should be increased to check that all the Sosa numbers have been calculated.'
  => 'S’hauria d’augmentar maxgen per comprovar que s’han calculat tots els nombres de Sosa.',
'Maximum memory allocated to php. Set in php.d/01_ressourcelimits on the server (apache).'
  => 'Memòria màxima assignada a php. Estableix-ho a php.d/01_ressourcelimits al servidor (apache).',
'The process was interrupted to avoid memory overflow.'
  => 'El procés s’ha interromput per evitar el desbordament de memòria.',
'Calculation stopped at generation %s'
  => 'El càlcul s’ha aturat a la generació %s',
' (no parent found so no Sosa number to calculate).'
  => ' (no s’ha trobat cap pare, per tant, no hi ha número Sosa per calcular).',
'Largest Sosa number found. In the case of a pedigree collapse, common ancestors have several numbers, but only the the smallest is displayed in the sidebar.'
  => 'S’ha trobat el nombre de Sosa més gran. En el cas d’un col·lapse genealògic, els avantpassats comuns tenen diversos números, però només es mostra el més petit a la barra lateral.',
'Elapsed time'
  => 'Temps transcorregut',

// migration.phtml 2025-10
'Operation successfully completed.'
  => 'Operació completada correctament.',
'The numbers calculated previously are assigned to the default user. They are visible to unregistered users and only an editor can update them.'
  => 'Els números calculats prèviament s’assignen a l’usuari per defecte. Són visibles per als usuaris no registrats i només un editor els pot actualitzar.',
'Each registered user present in the tree will be able to generate numbers relating to them (those of their direct ancestors).'
  => 'Cada usuari registrat present a l’arbre podrà generar números relacionats amb ell (els dels seus avantpassats directes).',

// help.phtml 2025-10
'Help for Sosa²⁰'
  => 'Ajuda per a Sosa²⁰',
'More informations on gustine.eu.'
  => 'Més informació a gustine.eu.',
'The default individual is number&nbsp;1'
  => 'L’individu per defecte és el número&nbsp;1',
'⇨ link to Wikipedia…'
  => '⇨ enllaç a de la Viquipèdia…',
'Sosa numbers are calculated in relation to the “default individual” of the tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor status must therefore update them from time to time.'
  => 'Els nombres Sosa es calculen en relació amb l’individu per defecte de l’arbre considerat com a arrel (proband). Com que això pot trigar molt de temps, tots els nombres es calculen i s’emmagatzemen prèviament. Per tant, un usuari amb estatus d’editor els ha d’actualitzar de tant en tant.',
'You can update the default individual numbers, which are visible to everyone.'
  => 'Podeu actualitzar els números individuals per defecte, que són visibles per a tothom.',
'You’re not allowed to do that.'
  => 'No teniu permís per fer això.',
'A great-grandparent is number&nbsp;1'
  => 'Un besavi és el número&nbsp;1',
'A grandparent is number&nbsp;1'
  => 'Un avi és el número&nbsp;1',
'A parent is number&nbsp;1'
  => 'Un pare és el número&nbsp;1',
'It is assumed that the individuals of the first generations are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.'
  => 'Se suposa que els individus de les primeres generacions estan ocults als visitants, però que els vuit besavis de la quarta generació són visibles.',
'It is assumed that the individuals of the first generations are hidden from visitors but that the four grandparents of the third generation are visible.'
  => 'Se suposa que els individus de les primeres generacions estan ocults als visitants, però que els quatre avis de la tercera generació són visibles.',
'It is assumed that the individuals of the first generations are hidden from visitors but that both parents are visible.'
  => 'Se suposa que els individus de les primeres generacions estan ocults als visitants, però que tots dos pares són visibles.',
'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the great-grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'A continuació, determinem de quin besavi és l’individu i mostrem un petit símbol que representa el seu lloc en un diagrama de ventall. Finalment, mostrem el besavi i calculem el nombre de Sosa corresponent a aquesta arrel secundària.',
'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'A continuació, determinem de quin avi és l’individu i mostrem un petit símbol que representa el seu lloc en un diagrama de ventall. Finalment, mostrem l’avi i calculem el nombre de Sosa corresponent a aquesta arrel secundària.',
'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the parent and calculate the sosa number corresponding to this secondary root.'
  => 'A continuació, determinem de quin pares és l’individu i mostrem un petit símbol que representa el seu lloc en un diagrama de ventall. Finalment, mostrem el pare i calculem el nombre de Sosa corresponent a aquesta arrel secundària.',
'You are number&nbsp;1'
  => 'Ets el número&nbsp;1',
'Members who are connected and linked to an individual in the tree display their own numbers, calculated based on that individual. They can update these numbers. If they are editors, they can also update the numbers of the default individual, visible to everyone.'
  => 'Els membres que estan connectats i vinculats a un individu a l’arbre mostren els seus propis números, calculats en funció d’aquest individu. Poden actualitzar aquests números. Si són editors, també poden actualitzar els números de l’individu per defecte, visible per a tothom.',
'You are connected as %1$s'
  => 'Estàs connectat com a %1$s',
'You can only update your own numbers.'
  => 'Només pots actualitzar els teus propis números.',
'You can update both your own numbers and those of the default individual.'
  => 'Pots actualitzar tant els teus propis números com els de l’individu per defecte.',
'You are only a visitor to this tree.'
  => 'Només ets un visitant d’aquest arbre.',
'Users who are logged in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not logged in.'
  => 'Els usuaris que han iniciat la sessió però no estan vinculats a un individu de l’arbre no tenen números personals per mostrar. Tampoc els usuaris que no han iniciat la sessió.',
'You are not logged-in.'
  => 'No has iniciat la sessió.',

];
