<?php
// Gracias, bernatbanyuls.
return [
'Sosa-Stradonitz (Ahnentafel)'
  => 'Sosa-Stradonitz',
'A sidebar showing Sosa-Stradonitz number of individuals.'
  => 'Una barra lateral muestra el número Sosa de los individuos.',
'First, define a valid default individual for the current family tree.'
  => '¡Primero defina el individuo por defecto para el árbol genealógico actual!',
'Sosa number %s'
  => 'Sosa número %s',
'No Sosa number'
  => 'Ningún número de Sosa',
'(not a direct ancestor)'
  => '(no hay ascendientes directos)',
'Click for more informations…'
  => 'Haga clic para obtener más información…',
'The Sosa table is empty or the current default individual has been changed.'
  => 'La tabla Sosa está vacía o se ha cambiado el individuo predeterminado.',
'You must have editor rights, or higher, to do this.'
  => 'Debes tener derechos de editor, o superiores, para hacer esto.',
'Sosa table exists.'
  => 'La tabla Sosa existe',
'The Sosa table is empty.'
  => 'La tabla Sosa está vacía.',
'OK'
  => 'OK',
'Error!'
  => '¡Error!',
'Family tree root'
  => 'Inicio del árbol',
'The Sosa-Stradonitz numbering system assigns number one to the root of the family tree ⇨ link to a help page…'
  => 'En la numeración Sosa-Stradonitz, el número&nbsp;1 se asigna a la raíz del árbol genealógico ⇨ enlace a una página de ayuda…',
'using %s as Sosa 1'
  => 'utilizando %s como Sosa 1',
'Return to the previous page'
  => 'Volver a la página anterior',
'The default individual is no longer part of this tree.'
  => 'El individuo predeterminado ya no forma parte de este árbol.',
'You are not linked to an individual in this family tree.'
  => 'No está vinculado a ningún individuo en este árbol genealógico.',
'//en.wikipedia.org/wiki/Ahnentafel'
  => '//es.wikipedia.org/wiki/Ahnentafel',
'An ascending branch of a great-grandparent of the root ⇨ link to a help page…'
  => 'Una rama ascendente de un bisabuelo de la raíz ⇨ enlace a una página de ayuda…',
'//gustine.eu/mode_emploi/sosa-en.php'
  => '//gustine.eu/mode_emploi/sosa-es.php',

// module.php 2025-11
'The settings for the family tree “%s” have been updated.'
  => 'Los parámetros para el árbol «%s» se han actualizado.',

// sidebar.phtml 2025-05
'Family tree #'
  => 'Árbol genealógico n.º ',
'The default individual of the current family tree will be used as the root for updating the Sosa numbers.'
  => 'El individuo por defecto del árbol genealógico actual será la raíz utilizada para actualizar los números Sosa.',
'Update Sosa numbers'
  => 'Actualizar los números de Sosa',
'%1$s is Sosa %2$s (%3$s&nbsp;generation) of'
  => '%1$s es Sosa %2$s (%3$s&nbsp;generación) de',
'⁂ The great-grandparent %1$s is missing. The Sosa table needs rebuilding.'
  => '⁂ Falta el bisabuelo %1$s. La tabla Sosa debe ser reconstruida.',

// sidebar.phtml 2025-10
'(%1$s generation)'
  => '(%1$s generación)',
'Signed in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…'
  => 'Los miembros registrados que estén relacionados con una persona del árbol genealógico pueden ver los números Sosa de sus propios antepasados ⇨ enlace a una página de ayuda…',
'The wt_sosa table does not exist, we need to create it.'
  => 'La tabla wt_sosa no existe, por lo que la crearemos.',
'The structure of the wt_sosa table needs to be modified.'
  => 'Será necesario modificar la estructura de la tabla wt_sosa.',
'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.'
  => 'Aparecerá el mensaje de error <span style="background-color: #f8d7da">“There is no active transaction…”</span>. Ignórelo y vuelva a cargar la página.',
'Update your Sosa numbers'
  => 'Actualizar tus números de Sosa',
'Update the Sosa numbers in the tree'
  => 'Actualizar los números Sosa del árbol',
'%1$s is not an ancestor of'
  => '%1$s no es un ancestro de',
'You need to calculate your own Sosa numbers first.'
  => 'En primer lugar, debes calcular tus propios números de Sosa.',

// update.phtml 2025-05
'Updating Sosa numbers'
  => 'Actualizando los números de Sosa',
'The Sosa table is complete to generation %s.'
  => 'La tabla Sosa está llena hasta la generación %s.',
'But all parents may not have been found!'
  => '¡Pero puede que no se hayan encontrado a todos los padres!',
'We checked and there is no parent at generation %s'
  => 'Comprobamos que no había ningún ancestro directo en la generación %s',
'(pedigree collapse)'
  => '(colapso del pedigrí)',
' %s&#37 used'
  => ' usado al %s&#37',
'Maximum number of generations for which Sosa numbers will be searched. Defined in resources/views/update.phtml of the sosa20 module. If too low, Sosa numbers may be missing.'
  => 'Número máximo de generaciones en las que se buscarán números de Sosa. Definido en recursos/vistas/update.phtml del módulo sosa20. Si son demasiado pequeños, es posible que falten los números de Sosa.',
'The maxgen parameter should be increased to ensure that all the Sosa numbers have been calculated.'
  => 'Habría que aumentar el parámetro maxgen para comprobar que se han calculado todos los números Sosa.',
'Maximum memory allocated to php. Set in php.d/01_ressourcelimits on the server (apache).'
  => 'Memoria máxima asignada a php. Establecido en php.d/01_ressourcelimits en el servidor (apache).',
'The calculation was stopped to prevent a possible php ’memory overflow’ error.'
  => 'El proceso se interrumpió para evitar un desbordamiento de memoria.',
'Calculation stopped at generation %s'
  => 'Cálculo detenido en la generación %s',
' (there was no parent found therefore no Sosa numbers to calculate).'
  => ' (no se encontraron padres, por lo que no hay número de Sosa para calcular).',
'Highest Sosa number found. In the case of a pedigree collapse, common ancestors have several numbers, only the the lowest is displayed in the sidebar.'
  => 'Se encontró el mayor número de Sosa. En el caso de un colapso de pedigrí, los ancestros comunes tienen varios números, pero solo el más pequeño se muestra en la barra lateral.',
'Elapsed time'
  => 'Tiempo transcurrido',

// migration.phtml 2025-10
'Operation successfully completed.'
  => 'Operación completada con éxito.',
'The Sosa numbers calculated previously are assigned to the default user. They are visible to unregistered users and only an editor can update them.'
  => 'Los números calculados previamente se asignan al usuario predeterminado. Son visibles para los usuarios no registrados y solo un editor puede actualizarlos.',
'Each registered user present in the tree will be able to generate Sosa numbers relating to them (for their direct ancestors).'
  => 'Cada usuario registrado presente en el árbol podrá generar los números que le correspondan (los de sus ancestros directos).',

// help.phtml 2025-10
'Help for Sosa²⁰'
  => 'Ayuda para Sosa²⁰',
'See more information at gustine.eu.'
  => 'Más información en gustine.eu.',
'The default individual is number&nbsp;1'
  => 'El individuo predeterminado es el número&nbsp;1',
'⇨ link to Wikipedia…'
  => '⇨ enlace a Wikipedia…',
'Sosa numbers are calculated in relation to the “default individual” of the family tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor rights, or higher, should update them from time to time.'
  => 'Los números de Sosa se calculan en relación con el «individuo predeterminado» del árbol considerado como raíz (proband). Dado que esto puede llevar mucho tiempo, todos los números se calculan previamente y se almacenan. Por lo tanto, un usuario con estatus de editor debe actualizarlos de vez en cuando.',
'You can update the default individual Sosa numbers, which are visible to everyone.'
  => 'Puede actualizar los números predeterminados de la persona, visibles para todos.',
'You’re not allowed to do that.'
  => 'No está autorizado a hacer eso.',
'A great-grandparent is number&nbsp;1'
  => 'Un bisabuelo és el número&nbsp;1',
'A grandparent is number&nbsp;1'
  => 'Un abuelo és el número&nbsp;1',
'A parent is number&nbsp;1'
  => 'Un padre és el número&nbsp;1',
'It is assumed that the first generation individuals are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.'
  => 'Se supone que los individuos de las primeras generaciones están ocultos para los visitantes, pero que los ocho bisabuelos de la cuarta generación son visibles.',
'It is assumed that the first generation individuals are hidden from visitors but that the four grandparents of the third generation are visible.'
  => 'Se supone que los individuos de las primeras generaciones están ocultos para los visitantes, pero que los cuatro abuelos de la tercera generación son visibles.',
'It is assumed that the first generation individuals are hidden from visitors but that both parents are visible.'
  => 'Se supone que los individuos de las primeras generaciones están ocultos para los visitantes, pero que los dos padres son visibles.',
'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the great-grandparent and calculate the Sosa number corresponding to this secondary root.'
  => 'A continuación, determinamos de qué bisabuelo procede el individuo y mostramos un pequeño símbolo que representa su posición en un diagrama de abanico. Finalmente, mostramos el bisabuelo y calculamos el número de Sosa correspondiente a esta raíz secundaria.',
'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the grandparent and calculate the Sosa number corresponding to this secondary root.'
  => 'A continuación, determinamos de qué abuelo procede el individuo y mostramos un pequeño símbolo que representa su posición en un diagrama de abanico. Finalmente, mostramos el abuelo y calculamos el número de Sosa correspondiente a esta raíz secundaria.',
'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the parent and calculate the Sosa number corresponding to this secondary root.'
  => 'A continuación, determinamos de qué padre procede el individuo y mostramos un pequeño símbolo que representa su posición en un diagrama de abanico. Finalmente, mostramos el padre y calculamos el número de Sosa correspondiente a esta raíz secundaria.',
'You are number&nbsp;1'
  => 'Eres el número&nbsp;1',
'Members who are signed in and linked to an individual in the tree display their own Sosa numbers, calculated based on that individual. They can update these numbers. If they have editor rights, or higher, they can also update the numbers of the default individual, visible to everyone.'
  => 'Los miembros conectados y vinculados a una persona en el árbol muestran sus propios números, calculados en función de esa persona. Pueden actualizar estos números. Si son editores, también pueden actualizar los números de la persona predeterminada, visibles para todos.',
'You are signed in as %1$s'
  => 'Estás conectado como %1$s',
'You can only update your own numbers.'
  => 'Solo puedes actualizar tus propios números.',
'You can update both your own Sosa numbers and those of the default individual.'
  => 'Puedes actualizar tanto tus propios números Sosa como los de la persona predeterminada.',
'You are only a visitor to this family tree.'
  => 'Solo eres un visitante de este árbol.',
'Users who are signed in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not signed in.'
  => 'Los usuarios que han iniciado sesión, pero no están vinculados a ninguna persona en el árbol, no tienen números personales para mostrar. Tampoco los tienen los usuarios que no han iniciado sesión.',
'You are not signed in.'
  => 'No ha iniciado sesión.',

// settings.phtml 2025-11
'Profile image for the default individual (free height and width)'
  => 'Imagen de perfil para el individuo por defecto (altura y anchura libres)',
'Display the Sosa number corresponding to an ancestor'
  => 'Mostrar el número Sosa correspondiente a un antepasado',
'parents'
  => 'padres',
'grandparents'
  => 'abuelos',
'great-grandparents'
  => 'bisabuelos',
'Display the Sosa number corresponding to a signed in member'
  => 'Mostrar el número Sosa correspondiente a un miembro conectado',
'Sprite image for symbols (height: 35px, width: 72 or 144 or 288 px)'
  => 'Sprite para los símbolos (altura: 35 px, anchura: 72 o 144 o 288 px)',

];
