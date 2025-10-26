<?php
return [
'Sosa-Stradonitz (Ahnentafel)'
  => 'Ahnentafel',
'A sidebar showing Sosa-Stradonitz number of individuals.'
  => 'Eine Navigationsleisten mit der Kekule Nummer der Individuen.',
'First, define a valid default individual for the current gedcom.'
  => 'First, define a valid default individual for the current gedcom.',
'Sosa number %s'
  => 'Sosa Nummer %s',
'No Sosa number'
  => 'Keine Sosa-Nummer',
'(not a direct ancestor)'
  => '(nicht direkter Vorfahre)',
'Click for more informations…'
  => 'Klicken Sie hier für mehr Informationen…',
'Sosa table is empty or the tree root has been changed.'
  => 'Sosa table is empty or the tree root has been changed.',
'You must be an editor to do this.'
  => 'You must be an editor to do this.',
'Sosa table exists.'
  => 'Sosa table exists.',
'Sosa table is empty.'
  => 'Sosa table is empty.',
'OK'
  => 'OK',
'Error!'
  => 'Error!',
'Go to welcome page'
  => 'Zur Willkommensseite gehen',
'Family tree root'
  => 'Proband',
'In the numbering of Sosa-Stradonitz, number one is assigned to the root of the family tree ⇨ link to a help page…'
  => 'Bei der Nummerierung von Kekule (Sosa-Stradonitz) wird dem Stammbaum die Nummer eins zugewiesen ⇨ Link zu einer Hilfeseite…',
'using %s as root'
  => 'using %s as root',
'Back to the previous page'
  => 'Zurück zur vorherigen Seite',
'Relationship with root…'
  => 'Beziehung zu den Proband…',
'Update done.'
  => 'Update done.',
'The default individual is no longer part of this tree.'
  => 'The default individual is no longer part of this tree.',
'You are not linked to an individual in this family tree.'
  => 'You are not linked to an individual in this family tree.',
'//en.wikipedia.org/wiki/Ahnentafel'
  => '//de.wikipedia.org/wiki/Ahnentafel',
'An ascending branch of a great-grandparent of the root ⇨ link to a help page…'
  => 'Aufsteigender Zweig eines Urgroßelternteils des Proband ⇨ Link zu einer Hilfeseite…',
'//gustine.eu/mode_emploi/sosa-en.php'
  => '//gustine.eu/mode_emploi/sosa-en.php',

// sidebar.phtml 2025-05
'The default individual of the current gedcom will be used as the root for updating the Sosa numbers.'
  => 'The default individual of the current gedcom will be used as the root for updating the Sosa numbers.',
'Update Sosa numbers'
  => 'Update Sosa numbers',
'%1$s is Sosa %2$s (%3$s&nbsp;generation) of'
  => '%1$s ist Sosa %2$s (%3$s&nbsp;Generation) von',
'⁂ The great-grandparent %1$s is missing. The Sosa table must be rebuilt.'
  => '⁂ Das Urgroßelternteil %1$s fehlt. Die Tabelle Sosa muss neu erstellt werden.',

// sidebar.phtml 2025-10
'(%1$s generation)'
  => '(%1$s Generation)',
'Logged-in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…'
  => 'Angemeldete Mitglieder, die mit einer Person im Stammbaum verwandt sind, können die Sosa-Nummern ihrer eigenen Vorfahren einsehen ⇨ Link zur Hilfeseite…',
'The wt_sosa table does not exist, so we will create it.'
  => 'The wt_sosa table does not exist, so we will create it.',
'The structure of the wt_sosa table will need to be modified.'
  => 'The structure of the wt_sosa table will need to be modified.',
'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.'
  => 'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.',
'Update your Sosa numbers'
  => 'Aktualisieren Sie Ihre Sosa-Nummern',
'Update the Sosa numbers in the tree'
  => 'Die Sosa-Nummern des Stammbaums aktualisieren',
'Numbers are calculated from the default individual.'
  => 'Numbers are calculated from the default individual.',
'The numbers are calculated relative on you.'
  => 'The numbers are calculated relative on you.',
'%1$s is not an ancestor of'
  => '%1$s ist kein Vorfahre von',
'First, you need to calculate your own Sosa numbers.'
  => 'First, you need to calculate your own Sosa numbers.',

// update.phtml 2025-05
'Updating Sosa numbers'
  => 'Updating Sosa numbers',
'Sosa table is filled up to generation %s.'
  => 'Sosa table is filled up to generation %s.',
'But all parents may not have been found!'
  => 'But all parents may not have been found!',
'We checked that there were no parent in generation %s'
  => 'We checked that there were no parent in generation %s',
'(pedigree collapse)'
  => '(pedigree collapse)',
' %s&#37 used'
  => ' %s&#37 used',
'Maximum number of generations for which Sosa numbers will be searched. Defined in resources/views/update.phtml of module sosa20. If too small, Sosa numbers may be missing.'
  => 'Maximum number of generations for which Sosa numbers will be searched. Defined in resources/views/update.phtml of module sosa20. If too small, Sosa numbers may be missing.',
'maxgen should be increased to check that all the Sosa numbers have been calculated.'
  => 'maxgen should be increased to check that all the Sosa numbers have been calculated.',
'Maximum memory allocated to php. Set in php.d/01_ressourcelimits on the server (apache).'
  => 'Maximum memory allocated to php. Set in php.d/01_ressourcelimits on the server (apache).',
'The process was interrupted to avoid memory overflow.'
  => 'The process was interrupted to avoid memory overflow.',
'Calculation stopped at generation %s'
  => 'Calculation stopped at generation %s',
' (no parent found so no Sosa number to calculate).'
  => ' (no parent found so no Sosa number to calculate).',
'Largest Sosa number found. In the case of a pedigree collapse, common ancestors have several numbers, but only the the smallest is displayed in the sidebar.'
  => 'Largest Sosa number found. In the case of a pedigree collapse, common ancestors have several numbers, but only the the smallest is displayed in the sidebar.',
'Elapsed time'
  => 'Elapsed time',

// migration.phtml 2025-10
'Operation successfully completed.'
  => 'Operation successfully completed.',
'The numbers calculated previously are assigned to the default user. They are visible to unregistered users and only an editor can update them.'
  => 'The numbers calculated previously are assigned to the default user. They are visible to unregistered users and only an editor can update them.',
'Each registered user present in the tree will be able to generate numbers relating to them (those of their direct ancestors).'
  => 'Each registered user present in the tree will be able to generate numbers relating to them (those of their direct ancestors).',

// help.phtml 2025-10
'Help for Sosa²⁰'
  => 'Hilfe für Sosa²⁰',
'More informations on gustine.eu.'
  => 'Weitere Informationen finden Sie unter gustine.eu.',
'The default individual is number&nbsp;1'
  => 'Die Standardperson ist Nummer&nbsp;1',
'⇨ link to Wikipedia…'
  => '⇨ Link zu Wikipedia…',
'Sosa numbers are calculated in relation to the “default individual” of the tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor status must therefore update them from time to time.'
  => 'Die Sosa-Nummern werden in Bezug auf das Standardindividuum des Stammbaums (Proband) berechnet. Da dies sehr lange dauern kann, werden alle Nummern vorberechnet und gespeichert. Ein Benutzer mit Editor-Status muss sie daher von Zeit zu Zeit aktualisieren.',
'You can update the default individual numbers, which are visible to everyone.'
  => 'Sie können die Standardindividuennummern aktualisieren, die für alle sichtbar sind.',
'You’re not allowed to do that.'
  => 'Das ist Ihnen nicht gestattet.',
'A great-grandparent is number&nbsp;1'
  => 'Ein Urgroßelternteil ist die Nummer&nbsp;1',
'A grandparent is number&nbsp;1'
  => 'Ein Großelternteil ist die Nummer&nbsp;1',
'A parent is number&nbsp;1'
  => 'Ein Elternteil ist die Nummer&nbsp;1',
'It is assumed that the individuals of the first generations are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.'
  => 'Es wird angenommen, dass die Personen der ersten Generationen für Besucher verborgen sind, die acht Urgroßeltern der vierten Generation jedoch sichtbar sind.',
'It is assumed that the individuals of the first generations are hidden from visitors but that the four grandparents of the third generation are visible.'
  => 'Es wird angenommen, dass die Personen der ersten Generationen für Besucher verborgen sind, die vier Großelternteil der dritten Generation jedoch sichtbar sind.',
'It is assumed that the individuals of the first generations are hidden from visitors but that both parents are visible.'
  => 'Es wird angenommen, dass die Personen der ersten Generationen für Besucher verborgen sind, die beiden Elternteil jedoch sichtbar sind.',
'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the great-grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'Wir ermitteln dann, welcher Urgroßelternteil der Vorfahre ist, und zeigen dessen Position in einem Fächerdiagramm durch ein kleines Symbol an. Abschließend zeigen wir den Urgroßelternteil an und berechnen die Sosa-Nummer, die dieser sekundären Wurzel entspricht.',
'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'Wir ermitteln dann, welcher Großelternteil der Vorfahre ist, und zeigen dessen Position in einem Fächerdiagramm durch ein kleines Symbol an. Abschließend zeigen wir den Großelternteil an und berechnen die Sosa-Nummer, die dieser sekundären Wurzel entspricht.',
'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the parent and calculate the sosa number corresponding to this secondary root.'
  => 'Wir ermitteln dann, welcher Elternteil der Vorfahre ist, und zeigen dessen Position in einem Fächerdiagramm durch ein kleines Symbol an. Abschließend zeigen wir den Elternteil an und berechnen die Sosa-Nummer, die dieser sekundären Wurzel entspricht.',
'You are number&nbsp;1'
  => 'Sie sind Nummer&nbsp;1.',
'Members who are connected and linked to an individual in the tree display their own numbers, calculated based on that individual. They can update these numbers. If they are editors, they can also update the numbers of the default individual, visible to everyone.'
  => 'Mitglieder, die mit einer Person im Stammbaum verbunden und verknüpft sind, zeigen ihre eigenen Nummern an, die auf der Grundlage dieser Person berechnet werden. Sie können diese Nummern aktualisieren. Wenn sie Redakteure sind, können sie auch die Nummern der Standardperson aktualisieren, die für alle sichtbar sind.',
'You are connected as %1$s'
  => 'Sie sind als %1$s verbunden',
'You can only update your own numbers.'
  => 'Sie können nur Ihre eigenen Nummern aktualisieren.',
'You can update both your own numbers and those of the default individual.'
  => 'Sie können sowohl Ihre eigenen Nummern als auch die der Standardperson aktualisieren.',
'You are only a visitor to this tree.'
  => 'Sie sind nur ein Besucher dieses Stammbaums.',
'Users who are logged in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not logged in.'
  => 'Benutzer, die angemeldet sind, aber nicht mit einer Person im Stammbaum verknüpft sind, haben keine persönlichen ',
'You are not logged-in.'
  => 'Sie sind nicht angemeldet.',

];
