<?php
return [
'Sosa-Stradonitz (Ahnentafel)'
  => 'Sosa-Stradonitz (Ahnentafel)',
'A sidebar showing Sosa-Stradonitz number of individuals.'
  => 'A sidebar showing Sosa-Stradonitz number of individuals.',
'First, define a valid default individual for the current gedcom.'
  => 'First, define a valid default individual for the current gedcom.',
'Sosa number %s'
  => 'Sosa number %s',
'No Sosa number'
  => 'No Sosa number',
'(not a direct ancestor)'
  => '(not a direct ancestor)',
'Click for more informations…'
  => 'Click for more informations…',
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
  => 'Go to welcome page',
'Family tree root'
  => 'Family tree root',
'In the numbering of Sosa-Stradonitz, number one is assigned to the root of the family tree ⇨ link to a help page…'
  => 'In the numbering of Sosa-Stradonitz, number one is assigned to the root of the family tree ⇨ link to a help page…',
'using %s as root'
  => 'using %s as root',
'Back to the previous page'
  => 'Back to the previous page',
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

// sidebar.phtml 2025-05
'The default individual of the current gedcom will be used as the root for updating the Sosa numbers.'
  => 'The default individual of the current gedcom will be used as the root for updating the Sosa numbers.',
'Update Sosa numbers'
  => 'Update Sosa numbers',
'%1$s is Sosa %2$s (%3$s&nbsp;generation) of'
  => '%1$s is Sosa %2$s (%3$s&nbsp;generation) of',
'⁂ The great-grandparent %1$s is missing. The Sosa table must be rebuilt.'
  => '⁂ The great-grandparent %1$s is missing. The Sosa table must be rebuilt.',

// sidebar.phtml 2025-10
'(%1$s generation)'
  => '(%1$s generation)',
'Logged-in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…'
  => 'Logged-in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…',
'The wt_sosa table does not exist, so we will create it.'
  => 'The wt_sosa table does not exist, so we will create it.',
'The structure of the wt_sosa table will need to be modified.'
  => 'The structure of the wt_sosa table will need to be modified.',
'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.'
  => 'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.',
'Update your Sosa numbers'
  => 'Update your Sosa numbers',
'Update the Sosa numbers in the tree'
  => 'Update the Sosa numbers in the tree',
'Numbers are calculated from the default individual.'
  => 'Numbers are calculated from the default individual.',
'The numbers are calculated relative on you.'
  => 'The numbers are calculated relative on you.',
'%1$s is not an ancestor of'
  => '%1$s is not an ancestor of',
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
  => 'Help for Sosa²⁰',
'More informations on gustine.eu.'
  => 'More informations on gustine.eu.',
'The default individual is number&nbsp;1'
  => 'The default individual is number&nbsp;1',
'⇨ link to Wikipedia…'
  => '⇨ link to Wikipedia…',
'Sosa numbers are calculated in relation to the “default individual” of the tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor status must therefore update them from time to time.'
  => 'Sosa numbers are calculated in relation to the “default individual” of the tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor status must therefore update them from time to time.',
'You can update the default individual numbers, which are visible to everyone.'
  => 'You can update the default individual numbers, which are visible to everyone.',
'You’re not allowed to do that.'
  => 'You’re not allowed to do that.',
'A great-grandparent is number&nbsp;1'
  => 'A great-grandparent is number&nbsp;1',
'A grandparent is number&nbsp;1'
  => 'A grandparent is number&nbsp;1',
'A parent is number&nbsp;1'
  => 'A parent is number&nbsp;1',
'It is assumed that the individuals of the first generations are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.'
  => 'It is assumed that the individuals of the first generations are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.',
'It is assumed that the individuals of the first generations are hidden from visitors but that the four grandparents of the third generation are visible.'
  => 'It is assumed that the individuals of the first generations are hidden from visitors but that the four grandparents of the third generation are visible.',
'It is assumed that the individuals of the first generations are hidden from visitors but that both parents are visible.'
  => 'It is assumed that the individuals of the first generations are hidden from visitors but that both parents are visible.',
'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the great-grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the great-grandparent and calculate the sosa number corresponding to this secondary root.',
'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the grandparent and calculate the sosa number corresponding to this secondary root.',
'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the parent and calculate the sosa number corresponding to this secondary root.'
  => 'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the parent and calculate the sosa number corresponding to this secondary root.',
'You are number&nbsp;1'
  => 'You are number&nbsp;1',
'Members who are connected and linked to an individual in the tree display their own numbers, calculated based on that individual. They can update these numbers. If they are editors, they can also update the numbers of the default individual, visible to everyone.'
  => 'Members who are connected and linked to an individual in the tree display their own numbers, calculated based on that individual. They can update these numbers. If they are editors, they can also update the numbers of the default individual, visible to everyone.',
'You are connected as %1$s'
  => 'You are connected as %1$s',
'You can only update your own numbers.'
  => 'You can only update your own numbers.',
'You can update both your own numbers and those of the default individual.'
  => 'You can update both your own numbers and those of the default individual.',
'You are only a visitor to this tree.'
  => 'You are only a visitor to this tree.',
'Users who are logged in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not logged in.'
  => 'Users who are logged in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not logged in.',
'You are not logged-in.'
  => 'You are not logged-in.',

];
