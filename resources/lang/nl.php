<?php
return [
'Sosa-Stradonitz (Ahnentafel)'
  => 'Sosa-Stradonitz (Ahnentafel)',
'A sidebar showing Sosa-Stradonitz number of individuals.'
  => 'Een zijpaneel met het aantal individuen van Sosa-Stradonitz.',
'First, define a valid default individual for the current family tree.'
  => 'First, define a valid default individual for the current family tree.',
'Sosa number %s'
  => 'Sosa nummer %s',
'No Sosa number'
  => 'Geen Sosa-nummer',
'(not a direct ancestor)'
  => '(geen directe voorouder)',
'Click for more informations…'
  => 'Klik voor meer informatie…',
'The Sosa table is empty or the default individual has been changed.'
  => 'The Sosa table is empty or the default individual has been changed.',
'You must have editor rights, or higher, to do this.'
  => 'You must have editor rights, or higher, to do this.',
'Sosa table exists.'
  => 'Sosa table exists.',
'The Sosa table is empty.'
  => 'Sosa table is empty.',
'OK'
  => 'OK',
'Error!'
  => 'Error!',
'Family tree root'
  => 'Proband',
'The Sosa-Stradonitz numbering system assigns number one to the root of the family tree ⇨ link to a help page…'
  => 'In de nummering van Sosa-Stradonitz wordt nummer één toegewezen aan de proband van de stamboom ⇨ link naar een helppagina…',
'using %s as Sosa 1'
  => 'met %s als Sosa 1',
'Return to the previous page'
  => 'Terug naar de vorige pagina',
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

// module.php 2025-11
'The settings for the family tree “%s” have been updated.'
  => 'De instellingen voor de stamboom “%s” zijn bijgewerkt.',

// sidebar.phtml 2025-05
'Family tree #'
  => 'Stamboom nr. ',
'The default individual of the current family tree will be used as the root for updating the Sosa numbers.'
  => 'The default individual of the current family tree will be used as the root for updating the Sosa numbers.',
'Update Sosa numbers'
  => 'Update Sosa numbers',
'%1$s is Sosa %2$s (%3$s&nbsp;generation) of'
  => '%1$s is Sosa %2$s (%3$s&nbsp;generatie) van',
'⁂ The great-grandparent %1$s is missing. The Sosa table needs rebuilding.'
  => '⁂ De overgrootouder %1$s ontbreekt. De Sosa-tabel moet opnieuw worden opgebouwd.',

// sidebar.phtml 2025-10
'(%1$s generation)'
  => '(%1$s generatie)',
'Signed in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…'
  => 'Ingelogde leden die verwant zijn aan een persoon in de stamboom kunnen de Sosa-nummers van hun eigen voorouders bekijken ⇨ link naar een helppagina…',
'The wt_sosa table does not exist, we need to create it.'
  => 'The wt_sosa table does not exist, we need to create it.',
'The structure of the wt_sosa table needs to be modified.'
  => 'The structure of the wt_sosa table needs to be modified.',
'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.'
  => 'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.',
'Update your Sosa numbers'
  => 'Uw Sosa-nummers bijwerken',
'Update the Sosa numbers in the tree'
  => 'De Sosa-nummers van de stamboom bijwerken',
'%1$s is not an ancestor of'
  => '%1$s is geen voorouder van',
'You need to calculate your own Sosa numbers first.'
  => 'First, you need to calculate your own Sosa numbers.',

// update.phtml 2025-05
'Updating Sosa numbers'
  => 'Updating Sosa numbers',
'The Sosa table is complete to generation %s.'
  => 'The Sosa table is complete to generation %s.',
'But all parents may not have been found!'
  => 'But all parents may not have been found!',
'We checked and there is no parent at generation %s'
  => 'We checked and there is no parent at generation %s',
'(pedigree collapse)'
  => '(pedigree collapse)',
' %s&#37 used'
  => ' %s&#37 used',
'Maximum number of generations for which Sosa numbers will be searched. Defined in resources/views/update.phtml of the sosa20 module. If too low, Sosa numbers may be missing.'
  => 'Maximum number of generations for which Sosa numbers will be searched. Defined in resources/views/update.phtml of the sosa20 module. If too low, Sosa numbers may be missing.',
'The maxgen parameter should be increased to ensure that all the Sosa numbers have been calculated.'
  => 'The maxgen parameter should be increased to ensure that all the Sosa numbers have been calculated.',
'Maximum memory allocated to php. Set in php.d/01_ressourcelimits on the server (apache).'
  => 'Maximum memory allocated to php. Set in php.d/01_ressourcelimits on the server (apache).',
'The calculation was stopped to prevent a possible php ’memory overflow’ error.'
  => 'The calculation was stopped to prevent a possible php ’memory overflow’ error.',
'Calculation stopped at generation %s'
  => 'Calculation stopped at generation %s',
' (there was no parent found therefore no Sosa numbers to calculate).'
  => ' (there was no parent found therefore no Sosa numbers to calculate).',
'Highest Sosa number found. In the case of a pedigree collapse, common ancestors have several numbers, only the the lowest is displayed in the sidebar.'
  => 'Highest Sosa number found. In the case of a pedigree collapse, common ancestors have several numbers, only the the lowest is displayed in the sidebar.',
'Elapsed time'
  => 'Elapsed time',

// migration.phtml 2025-10
'Operation successfully completed.'
  => 'Operation successfully completed.',
'The Sosa numbers calculated previously are assigned to the default user. They are visible to unregistered users and only an editor can update them.'
  => 'The Sosa numbers calculated previously are assigned to the default user. They are visible to unregistered users and only an editor can update them.',
'Each registered user present in the tree will be able to generate Sosa numbers relating to them (for their direct ancestors).'
  => 'Each registered user present in the tree will be able to generate Sosa numbers relating to them (for their direct ancestors).',

// help.phtml 2025-10
'Help for Sosa²⁰'
  => 'Hulp voor Sosa²⁰',
'See more information at gustine.eu.'
  => 'Meer informatie op gustine.eu.',
'The default individual is number&nbsp;1'
  => 'De standaardpersoon is nummer&nbsp;1',
'⇨ link to Wikipedia…'
  => '⇨ link naar Wikipedia…',
'Sosa numbers are calculated in relation to the “default individual” of the family tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor rights, or higher, should update them from time to time.'
  => 'Sosa-nummers worden berekend ten opzichte van het "standaard individu" van de boom die als wortel (proband) wordt beschouwd. Omdat dit lang kan duren, worden alle nummers vooraf berekend en opgeslagen. Een gebruiker met de status “editor” moet ze daarom van tijd tot tijd bijwerken.',
'You can update the default individual Sosa numbers, which are visible to everyone.'
  => 'U kunt de standaard individuele nummers bijwerken, die voor iedereen zichtbaar zijn.',
'You’re not allowed to do that.'
  => 'Dat mag u niet doen.',
'A great-grandparent is number&nbsp;1'
  => 'Een overgrootouder is nummer&nbsp;1',
'A grandparent is number&nbsp;1'
  => 'Een grootouder is nummer&nbsp;1',
'A parent is number&nbsp;1'
  => 'Een ouder is nummer&nbsp;1',
'It is assumed that the first generation individuals are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.'
  => 'Er wordt van uitgegaan dat de individuen van de eerste generaties verborgen zijn voor bezoekers, maar dat de acht overgrootouders van de vierde generatie zichtbaar zijn.',
'It is assumed that the first generation individuals are hidden from visitors but that the four grandparents of the third generation are visible.'
  => 'Er wordt van uitgegaan dat de individuen van de eerste generaties verborgen zijn voor bezoekers, maar dat de vier grootouders van de derde generatie zichtbaar zijn.',
'It is assumed that the first generation individuals are hidden from visitors but that both parents are visible.'
  => 'Er wordt van uitgegaan dat de individuen van de eerste generaties verborgen zijn voor bezoekers, maar dat de twee ouders van de vierde generatie zichtbaar zijn.',
'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the great-grandparent and calculate the Sosa number corresponding to this secondary root.'
  => 'Vervolgens bepalen we welke overgrootouder de voorouder van het individu is en geven we een klein symbool weer dat zijn plaats in een waaierdiagram weergeeft. Ten slotte geven we de overgrootouder weer en berekenen we het Sosa-getal dat bij deze secundaire wortel hoort.',
'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the grandparent and calculate the Sosa number corresponding to this secondary root.'
  => 'Vervolgens bepalen we welke grootouder de voorouder van het individu is en geven we een klein symbool weer dat zijn plaats in een waaierdiagram weergeeft. Ten slotte geven we de grootouder weer en berekenen we het Sosa-getal dat bij deze secundaire wortel hoort.',
'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the parent and calculate the Sosa number corresponding to this secondary root.'
  => 'Vervolgens bepalen we welke ouder de voorouder van het individu is en geven we een klein symbool weer dat zijn plaats in een waaierdiagram weergeeft. Ten slotte geven we de ouder weer en berekenen we het Sosa-getal dat bij deze secundaire wortel hoort.',
'You are number&nbsp;1'
  => 'U bent nummer&nbsp;1',
'Members who are signed in and linked to an individual in the tree display their own Sosa numbers, calculated based on that individual. They can update these numbers. If they have editor rights, or higher, they can also update the numbers of the default individual, visible to everyone.'
  => 'Leden die verbonden zijn met en gekoppeld zijn aan een persoon in de stamboom, geven hun eigen nummers weer, berekend op basis van die persoon. Ze kunnen deze nummers bijwerken. Als ze redacteuren zijn, kunnen ze ook de nummers van de standaardpersoon bijwerken, die voor iedereen zichtbaar zijn.',
'You are signed in as %1$s'
  => 'Je bent verbonden als %1$s',
'You can only update your own numbers.'
  => 'Je kunt alleen je eigen nummers bijwerken.',
'You can update both your own Sosa numbers and those of the default individual.'
  => 'Je kunt zowel je eigen Sosa-nummers als die van de standaardpersoon bijwerken.',
'You are only a visitor to this family tree.'
  => 'Je bent slechts een bezoeker van deze stamboom.',
'Users who are signed in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not signed in.'
  => 'Gebruikers die zijn ingelogd maar niet zijn gekoppeld aan een persoon in de stamboom, hebben geen persoonlijke nummers om weer te geven. Gebruikers die niet zijn ingelogd, hebben dat ook niet.',
'You are not signed in.'
  => 'Je bent niet ingelogd.',

// settings.phtml 2025-11
'Profile image for the default individual (free height and width)'
  => 'Profielafbeelding voor de standaardpersoon (vrije hoogte en breedte)',
'Display the Sosa number corresponding to an ancestor'
  => 'Geef het Sosa-nummer weer dat overeenkomt met een voorouder',
'parents'
  => 'ouders',
'grandparents'
  => 'grootouders',
'great-grandparents'
  => 'overgrootouders',
'Display the Sosa number corresponding to a signed in member'
  => 'Het Sosa-nummer weergeven dat overeenkomt met een aangemeld lid',
'Sprite image for symbols (height: 35px, width: 72 or 144 or 288 px)'
  => 'Sprite voor symbolen (hoogte: 35 px, breedte: 72 of 144 of 288 px)',

];
