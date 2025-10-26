<?php
return [
'Sosa-Stradonitz (Ahnentafel)'
  => 'Sosa-Stradonitz (Ahnentafel)',
'A sidebar showing Sosa-Stradonitz number of individuals.'
  => 'Een zijpaneel met het aantal individuen van Sosa-Stradonitz.',
'First, define a valid default individual for the current gedcom.'
  => 'First, define a valid default individual for the current gedcom.',
'Sosa number %s'
  => 'Sosa nummer %s',
'No Sosa number'
  => 'Geen Sosa-nummer',
'(not a direct ancestor)'
  => '(geen directe voorouder)',
'Click for more informations…'
  => 'Klik voor meer informatie…',
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
  => 'Ga naar de welkomstpagina',
'Family tree root'
  => 'Proband',
'In the numbering of Sosa-Stradonitz, number one is assigned to the root of the family tree ⇨ link to a help page…'
  => 'In de nummering van Sosa-Stradonitz wordt nummer één toegewezen aan de proband van de stamboom ⇨ link naar een helppagina…',
'using %s as root'
  => 'using %s as root',
'Back to the previous page'
  => 'Terug naar de vorige pagina',
'Relationship with root…'
  => 'Verwantschap met proband…',
'Update done.'
  => 'Update done.',
'The default individual is no longer part of this tree.'
  => 'The default individual is no longer part of this tree.',
'You are not linked to an individual in this family tree.'
  => 'You are not linked to an individual in this family tree.',
'//en.wikipedia.org/wiki/Ahnentafel'
  => '//nl.wikipedia.org/wiki/Kwartierstaat',
'An ascending branch of a great-grandparent of the root ⇨ link to a help page…'
  => 'Een opgaande tak van een overgrootouder van de proband ⇨ link naar een helppagina…',
'//gustine.eu/mode_emploi/sosa-en.php'
  => '//gustine.eu/mode_emploi/sosa-en.php',

// sidebar.phtml 2025-05
'The default individual of the current gedcom will be used as the root for updating the Sosa numbers.'
  => 'The default individual of the current gedcom will be used as the root for updating the Sosa numbers.',
'Update Sosa numbers'
  => 'Update Sosa numbers',
'%1$s is Sosa %2$s (%3$s&nbsp;generation) of'
  => '%1$s is Sosa %2$s (%3$s&nbsp;generatie) van',
'⁂ The great-grandparent %1$s is missing. The Sosa table must be rebuilt.'
  => '⁂ De overgrootouder %1$s ontbreekt. De Sosa-tabel moet opnieuw worden opgebouwd.',

// sidebar.phtml 2025-10
'(%1$s generation)'
  => '(%1$s generatie)',
'Logged-in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…'
  => 'Ingelogde leden die verwant zijn aan een persoon in de stamboom kunnen de Sosa-nummers van hun eigen voorouders bekijken ⇨ link naar een helppagina…',
'The wt_sosa table does not exist, so we will create it.'
  => 'The wt_sosa table does not exist, so we will create it.',
'The structure of the wt_sosa table will need to be modified.'
  => 'The structure of the wt_sosa table will need to be modified.',
'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.'
  => 'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.',
'Update your Sosa numbers'
  => 'Uw Sosa-nummers bijwerken',
'Update the Sosa numbers in the tree'
  => 'De Sosa-nummers van de stamboom bijwerken',
'Numbers are calculated from the default individual.'
  => 'Numbers are calculated from the default individual.',
'The numbers are calculated relative on you.'
  => 'The numbers are calculated relative on you.',
'%1$s is not an ancestor of'
  => '%1$s is geen voorouder van',
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
  => 'Hulp voor Sosa²⁰',
'More informations on gustine.eu.'
  => 'Meer informatie op gustine.eu.',
'The default individual is number&nbsp;1'
  => 'De standaardpersoon is nummer&nbsp;1',
'⇨ link to Wikipedia…'
  => '⇨ link naar Wikipedia…',
'Sosa numbers are calculated in relation to the “default individual” of the tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor status must therefore update them from time to time.'
  => 'Sosa-nummers worden berekend ten opzichte van het "standaard individu" van de boom die als wortel (proband) wordt beschouwd. Omdat dit lang kan duren, worden alle nummers vooraf berekend en opgeslagen. Een gebruiker met de status “editor” moet ze daarom van tijd tot tijd bijwerken.',
'You can update the default individual numbers, which are visible to everyone.'
  => 'U kunt de standaard individuele nummers bijwerken, die voor iedereen zichtbaar zijn.',
'You’re not allowed to do that.'
  => 'Dat mag u niet doen.',
'A great-grandparent is number&nbsp;1'
  => 'Een overgrootouder is nummer&nbsp;1',
'A grandparent is number&nbsp;1'
  => 'Een grootouder is nummer&nbsp;1',
'A parent is number&nbsp;1'
  => 'Een ouder is nummer&nbsp;1',
'It is assumed that the individuals of the first generations are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.'
  => 'Er wordt van uitgegaan dat de individuen van de eerste generaties verborgen zijn voor bezoekers, maar dat de acht overgrootouders van de vierde generatie zichtbaar zijn.',
'It is assumed that the individuals of the first generations are hidden from visitors but that the four grandparents of the third generation are visible.'
  => 'Er wordt van uitgegaan dat de individuen van de eerste generaties verborgen zijn voor bezoekers, maar dat de vier grootouders van de derde generatie zichtbaar zijn.',
'It is assumed that the individuals of the first generations are hidden from visitors but that both parents are visible.'
  => 'Er wordt van uitgegaan dat de individuen van de eerste generaties verborgen zijn voor bezoekers, maar dat de twee ouders van de vierde generatie zichtbaar zijn.',
'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the great-grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'Vervolgens bepalen we welke overgrootouder de voorouder van het individu is en geven we een klein symbool weer dat zijn plaats in een waaierdiagram weergeeft. Ten slotte geven we de overgrootouder weer en berekenen we het Sosa-getal dat bij deze secundaire wortel hoort.',
'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'Vervolgens bepalen we welke grootouder de voorouder van het individu is en geven we een klein symbool weer dat zijn plaats in een waaierdiagram weergeeft. Ten slotte geven we de grootouder weer en berekenen we het Sosa-getal dat bij deze secundaire wortel hoort.',
'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the parent and calculate the sosa number corresponding to this secondary root.'
  => 'Vervolgens bepalen we welke ouder de voorouder van het individu is en geven we een klein symbool weer dat zijn plaats in een waaierdiagram weergeeft. Ten slotte geven we de ouder weer en berekenen we het Sosa-getal dat bij deze secundaire wortel hoort.',
'You are number&nbsp;1'
  => 'U bent nummer&nbsp;1',
'Members who are connected and linked to an individual in the tree display their own numbers, calculated based on that individual. They can update these numbers. If they are editors, they can also update the numbers of the default individual, visible to everyone.'
  => 'Leden die verbonden zijn met en gekoppeld zijn aan een persoon in de stamboom, geven hun eigen nummers weer, berekend op basis van die persoon. Ze kunnen deze nummers bijwerken. Als ze redacteuren zijn, kunnen ze ook de nummers van de standaardpersoon bijwerken, die voor iedereen zichtbaar zijn.',
'You are connected as %1$s'
  => 'Je bent verbonden als %1$s',
'You can only update your own numbers.'
  => 'Je kunt alleen je eigen nummers bijwerken.',
'You can update both your own numbers and those of the default individual.'
  => 'Je kunt zowel je eigen nummers als die van de standaardpersoon bijwerken.',
'You are only a visitor to this tree.'
  => 'Je bent slechts een bezoeker van deze stamboom.',
'Users who are logged in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not logged in.'
  => 'Gebruikers die zijn ingelogd maar niet zijn gekoppeld aan een persoon in de stamboom, hebben geen persoonlijke nummers om weer te geven. Gebruikers die niet zijn ingelogd, hebben dat ook niet.',
'You are not logged-in.'
  => 'Je bent niet ingelogd.',

];
