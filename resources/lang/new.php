<?php
return [
'Sosa-Stradonitz (Ahnentafel)'
  => 'Sosa-Stradonitz (Ahnentafel)',
'A sidebar showing Sosa-Stradonitz number of individuals.'
  => 'A sidebar showing Sosa-Stradonitz number of individuals.',
'First, define a valid default individual for the current family tree.'
  => 'First, define a valid default individual for the current family tree.',
'Sosa number %s'
  => 'Sosa number %s',
'No Sosa number'
  => 'No Sosa number',
'(not a direct ancestor)'
  => '(not a direct ancestor)',
'Click for more informations…'
  => 'Click for more informations…',
'The Sosa table is empty or the default individual has been changed.'
  => 'The Sosa table is empty or the default individual has been changed.',
'You must have editor rights, or higher, to do this.'
  => 'You must have editor rights, or higher, to do this.',
'Sosa table exists.'
  => 'Sosa table exists.',
'The Sosa table is empty.'
  => 'The Sosa table is empty.',
'OK'
  => 'OK',
'Error!'
  => 'Error!',
'Family tree root'
  => 'Family tree root',
'The Sosa-Stradonitz numbering system assigns number one to the root of the family tree ⇨ link to a help page…'
  => 'The Sosa-Stradonitz numbering system assigns number one to the root of the family tree ⇨ link to a help page…',
'using %s as Sosa 1'
  => 'using %s as Sosa 1',
'Return to the previous page'
  => 'Return to the previous page',
'Relationship with root…'
  => 'Relationship with root…',
'Update done.'
  => 'Update done.',
'The default individual is no longer part of this tree.'
  => 'The default individual is no longer part of this tree.',
'You are not linked to an individual in this family tree.'
  => 'You are not linked to an individual in this family tree.',
'//en.wikipedia.org/wiki/Ahnentafel'
  => '//en.wikipedia.org/wiki/Ahnentafel',
'An ascending branch of a great-grandparent of the root ⇨ link to a help page…'
  => 'An ascending branch of a great-grandparent of the root ⇨ link to a help page…',
'//gustine.eu/mode_emploi/sosa-en.php'
  => '//gustine.eu/mode_emploi/sosa-en.php',

// module.php 2025-11
'The settings for the family tree “%s” have been updated.'
  => 'The settings for the family tree “%s” have been updated.',

// sidebar.phtml 2025-05
'Family tree #'
  => 'Family tree #',
'The default individual of the current family tree will be used as the root for updating the Sosa numbers.'
  => 'The default individual of the current family tree will be used as the root for updating the Sosa numbers.',
'Update Sosa numbers'
  => 'Update Sosa numbers',
'%1$s is Sosa %2$s (%3$s&nbsp;generation) of'
  => '%1$s is Sosa %2$s (%3$s&nbsp;generation) of',
'⁂ The great-grandparent %1$s is missing. The Sosa table needs rebuilding.'
  => '⁂ The great-grandparent %1$s is missing. The Sosa table needs rebuilding.',

// sidebar.phtml 2025-10
'(%1$s generation)'
  => '(%1$s generation)',
'Signed in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…'
  => 'Signed in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…',
'The wt_sosa table does not exist, we need to create it.'
  => 'The wt_sosa table does not exist, we need to create it.',
'The structure of the wt_sosa table needs to be modified.'
  => 'The structure of the wt_sosa table needs to be modified.',
'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.'
  => 'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.',
'Update your Sosa numbers'
  => 'Update your Sosa numbers',
'Update the Sosa numbers in the tree'
  => 'Update the Sosa numbers in the tree',
'%1$s is not an ancestor of'
  => '%1$s is not an ancestor of',
'You need to calculate your own Sosa numbers first.'
  => 'You need to calculate your own Sosa numbers first.',

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
  => 'Help for Sosa²⁰',
'See more information at gustine.eu.'
  => 'See more information at gustine.eu.',
'The default individual is number&nbsp;1'
  => 'The default individual is number&nbsp;1',
'⇨ link to Wikipedia…'
  => '⇨ link to Wikipedia…',
'Sosa numbers are calculated in relation to the “default individual” of the family tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor rights, or higher, should update them from time to time.'
  => 'Sosa numbers are calculated in relation to the “default individual” of the family tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor rights, or higher, should update them from time to time.',
'You can update the default individual Sosa numbers, which are visible to everyone.'
  => 'You can update the default individual Sosa numbers, which are visible to everyone.',
'You’re not allowed to do that.'
  => 'You’re not allowed to do that.',
'A great-grandparent is number&nbsp;1'
  => 'A great-grandparent is number&nbsp;1',
'A grandparent is number&nbsp;1'
  => 'A grandparent is number&nbsp;1',
'A parent is number&nbsp;1'
  => 'A parent is number&nbsp;1',
'It is assumed that the first generation individuals are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.'
  => 'It is assumed that the first generation individuals are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.',
'It is assumed that the first generation individuals are hidden from visitors but that the four grandparents of the third generation are visible.'
  => 'It is assumed that the first generation individuals are hidden from visitors but that the four grandparents of the third generation are visible.',
'It is assumed that the first generation individuals are hidden from visitors but that both parents are visible.'
  => 'It is assumed that the first generation individuals are hidden from visitors but that both parents are visible.',
'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the great-grandparent and calculate the Sosa number corresponding to this secondary root.'
  => 'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the great-grandparent and calculate the Sosa number corresponding to this secondary root.',
'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the grandparent and calculate the Sosa number corresponding to this secondary root.'
  => 'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the grandparent and calculate the Sosa number corresponding to this secondary root.',
'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the parent and calculate the Sosa number corresponding to this secondary root.'
  => 'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the parent and calculate the Sosa number corresponding to this secondary root.',
'You are number&nbsp;1'
  => 'You are number&nbsp;1',
'Members who are signed in and linked to an individual in the tree display their own Sosa numbers, calculated based on that individual. They can update these numbers. If they have editor rights, or higher, they can also update the numbers of the default individual, visible to everyone.'
  => 'Members who are signed in and linked to an individual in the tree display their own Sosa numbers, calculated based on that individual. They can update these numbers. If they have editor rights, or higher, they can also update the numbers of the default individual, visible to everyone.',
'You are signed in as %1$s'
  => 'You are signed in as %1$s',
'You can only update your own numbers.'
  => 'You can only update your own numbers.',
'You can update both your own numbers and those of the default individual.'
  => 'You can update both your own numbers and those of the default individual.',
'You are only a visitor to this family tree.'
  => 'You are only a visitor to this family tree.',
'Users who are logged in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not logged in.'
  => 'Users who are logged in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not logged in.',
'You are not signed in.'
  => 'You are not signed in.',

// settings.phtml 2025-11
'Profile image for the default individual (free height and width)'
  => 'Profile image for the default individual (free height and width)',
'Display the Sosa number corresponding to an ancestor'
  => 'Display the Sosa number corresponding to an ancestor',
'parents'
  => 'parents',
'grandparents'
  => 'grandparents',
'great-grandparents'
  => 'great-grandparents',
'Display the Sosa number corresponding to a signed in member'
  => 'Display the Sosa number corresponding to a signed in member',
'Sprite image for symbols (height: 35px, width: 72 or 144 or 288 px)'
  => 'Sprite image for symbols (height: 35px, width: 72 or 144 or 288 px)',

];
