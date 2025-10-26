<?php
// Gracias, bernatbanyuls.
return [
'Sosa-Stradonitz (Ahnentafel)'
  => 'Sosa-Stradonitz',
'A sidebar showing Sosa-Stradonitz number of individuals.'
  => 'Una barra lateral muestra el número Sosa de los individuos.',
'First, define a valid default individual for the current gedcom.'
  => '¡Primero defina el individuo por defecto para el GEDCOM actual!',
'Sosa number %s'
  => 'Sosa número %s',
'No Sosa number'
  => 'Ningún número de Sosa',
'(not a direct ancestor)'
  => '(no hay ascendientes directos)',
'Click for more informations…'
  => 'Haga clic para obtener más información…',
'Sosa table is empty or the tree root has been changed.'
  => 'La tabla Sosa está vacía o se ha cambiado la raíz del árbol.',
'You must be an editor to do this.'
  => 'Debe ser administrador o editor para finalizar esta operación.',
'Sosa table exists.'
  => 'La tabla Sosa existe',
'Sosa table is empty.'
  => 'La tabla Sosa está vacía.',
'OK'
  => 'OK',
'Error!'
  => '¡Error!',
'Go to welcome page'
  => 'Ir a la página de inicio',
'Family tree root'
  => 'Inicio del árbol',
'In the numbering of Sosa-Stradonitz, number one is assigned to the root of the family tree ⇨ link to a help page…'
  => 'En la numeración Sosa-Stradonitz, el número&nbsp;1 se asigna a la raíz del árbol genealógico ⇨ enlace a una página de ayuda…',
'using %s as root'
  => 'Usando %s como raíz',
'Back to the previous page'
  => 'Volver a la página anterior',
'Relationship with root…'
  => 'Relación con la raíz…',
'Update done.'
  => 'Actualización realizada.',
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

// sidebar.phtml 2025-05
'The default individual of the current gedcom will be used as the root for updating the Sosa numbers.'
  => 'El individuo por defecto del GEDCOM actual será la raíz utilizada para actualizar los números Sosa.',
'Update Sosa numbers'
  => 'Actualizar los números de Sosa',
'%1$s is Sosa %2$s (%3$s&nbsp;generation) of'
  => '%1$s es Sosa %2$s (%3$s&nbsp;generación) de',
'⁂ The great-grandparent %1$s is missing. The Sosa table must be rebuilt.'
  => '⁂ Falta el bisabuelo %1$s. La tabla Sosa debe ser reconstruida.',

// sidebar.phtml 2025-10
'(%1$s generation)'
  => '(%1$s generación)',
'Logged-in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…'
  => 'Los miembros registrados que estén relacionados con una persona del árbol genealógico pueden ver los números Sosa de sus propios antepasados ⇨ enlace a una página de ayuda…',
'The wt_sosa table does not exist, so we will create it.'
  => 'La tabla wt_sosa no existe, por lo que la crearemos.',
'The structure of the wt_sosa table will need to be modified.'
  => 'Será necesario modificar la estructura de la tabla wt_sosa.',
'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.'
  => 'Aparecerá el mensaje de error <span style="background-color: #f8d7da">“There is no active transaction…”</span>. Ignórelo y vuelva a cargar la página.',
'Update your Sosa numbers'
  => 'Actualizar tus números de Sosa',
'Update the Sosa numbers in the tree'
  => 'Actualizar los números Sosa del árbol',
'Numbers are calculated from the default individual.'
  => 'Los números se calculan a partir del individuo predeterminado.',
'The numbers are calculated relative on you.'
  => 'Los números se calculan en relación con usted.',
'%1$s is not an ancestor of'
  => '%1$s no es un ancestro de',
'First, you need to calculate your own Sosa numbers.'
  => 'En primer lugar, debes calcular tus propios números de Sosa.',

// update.phtml 2025-05
'Updating Sosa numbers'
  => 'Actualizando los números de Sosa',
'Sosa table is filled up to generation %s.'
  => 'La tabla Sosa está llena hasta la generación %s.',
'But all parents may not have been found!'
  => '¡Pero puede que no se hayan encontrado a todos los padres!',
'We checked that there were no parent in generation %s'
  => 'Comprobamos que no había ningún ancestro directo en la generación %s',
'(pedigree collapse)'
  => '(colapso del pedigrí)',
' %s&#37 used'
  => ' usado al %s&#37',
'Maximum number of generations for which Sosa numbers will be searched. Defined in resources/views/update.phtml of module sosa20. If too small, Sosa numbers may be missing.'
  => 'Número máximo de generaciones en las que se buscarán números de Sosa. Definido en recursos/vistas/update.phtml del módulo sosa20. Si son demasiado pequeños, es posible que falten los números de Sosa.',
'maxgen should be increased to check that all the Sosa numbers have been calculated.'
  => 'Se debe aumentar maxgen para verificar que se hayan calculado todos los números de Sosa.',
'Maximum memory allocated to php. Set in php.d/01_ressourcelimits on the server (apache).'
  => 'Memoria máxima asignada a php. Establecido en php.d/01_ressourcelimits en el servidor (apache).',
'The process was interrupted to avoid memory overflow.'
  => 'El proceso se interrumpió para evitar un desbordamiento de memoria.',
'Calculation stopped at generation %s'
  => 'Cálculo detenido en la generación %s',
' (no parent found so no Sosa number to calculate).'
  => ' (no se encontraron padres, por lo que no hay número de Sosa para calcular).',
'Largest Sosa number found. In the case of a pedigree collapse, common ancestors have several numbers, but only the the smallest is displayed in the sidebar.'
  => 'Se encontró el mayor número de Sosa. En el caso de un colapso de pedigrí, los ancestros comunes tienen varios números, pero solo el más pequeño se muestra en la barra lateral.',
'Elapsed time'
  => 'Tiempo transcurrido',

// migration.phtml 2025-10
'Operation successfully completed.'
  => 'Operación completada con éxito.',
'The numbers calculated previously are assigned to the default user. They are visible to unregistered users and only an editor can update them.'
  => 'Los números calculados previamente se asignan al usuario predeterminado. Son visibles para los usuarios no registrados y solo un editor puede actualizarlos.',
'Each registered user present in the tree will be able to generate numbers relating to them (those of their direct ancestors).'
  => 'Cada usuario registrado presente en el árbol podrá generar los números que le correspondan (los de sus ancestros directos).',

// help.phtml 2025-10
'Help for Sosa²⁰'
  => 'Ayuda para Sosa²⁰',
'More informations on gustine.eu.'
  => 'Más información en gustine.eu.',
'The default individual is number&nbsp;1'
  => 'El individuo predeterminado es el número&nbsp;1',
'⇨ link to Wikipedia…'
  => '⇨ enlace a Wikipedia…',
'Sosa numbers are calculated in relation to the “default individual” of the tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor status must therefore update them from time to time.'
  => 'Los números de Sosa se calculan en relación con el «individuo predeterminado» del árbol considerado como raíz (proband). Dado que esto puede llevar mucho tiempo, todos los números se calculan previamente y se almacenan. Por lo tanto, un usuario con estatus de editor debe actualizarlos de vez en cuando.',
'You can update the default individual numbers, which are visible to everyone.'
  => 'Puede actualizar los números predeterminados de la persona, visibles para todos.',
'You’re not allowed to do that.'
  => 'No está autorizado a hacer eso.',
'A great-grandparent is number&nbsp;1'
  => 'Un bisabuelo és el número&nbsp;1',
'A grandparent is number&nbsp;1'
  => 'Un abuelo és el número&nbsp;1',
'A parent is number&nbsp;1'
  => 'Un padre és el número&nbsp;1',
'It is assumed that the individuals of the first generations are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.'
  => 'Se supone que los individuos de las primeras generaciones están ocultos para los visitantes, pero que los ocho bisabuelos de la cuarta generación son visibles.',
'It is assumed that the individuals of the first generations are hidden from visitors but that the four grandparents of the third generation are visible.'
  => 'Se supone que los individuos de las primeras generaciones están ocultos para los visitantes, pero que los cuatro abuelos de la tercera generación son visibles.',
'It is assumed that the individuals of the first generations are hidden from visitors but that the two parents are visible.'
  => 'Se supone que los individuos de las primeras generaciones están ocultos para los visitantes, pero que los dos padres son visibles.',
'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the great-grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'A continuación, determinamos de qué bisabuelo procede el individuo y mostramos un pequeño símbolo que representa su posición en un diagrama de abanico. Finalmente, mostramos el bisabuelo y calculamos el número de Sosa correspondiente a esta raíz secundaria.',
'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'A continuación, determinamos de qué abuelo procede el individuo y mostramos un pequeño símbolo que representa su posición en un diagrama de abanico. Finalmente, mostramos el abuelo y calculamos el número de Sosa correspondiente a esta raíz secundaria.',
'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the parent and calculate the sosa number corresponding to this secondary root.'
  => 'A continuación, determinamos de qué padre procede el individuo y mostramos un pequeño símbolo que representa su posición en un diagrama de abanico. Finalmente, mostramos el padre y calculamos el número de Sosa correspondiente a esta raíz secundaria.',
'You are number&nbsp;1'
  => 'Eres el número&nbsp;1',
'Members who are connected and linked to an individual in the tree display their own numbers, calculated based on that individual. They can update these numbers. If they are editors, they can also update the numbers of the default individual, visible to everyone.'
  => 'Los miembros conectados y vinculados a una persona en el árbol muestran sus propios números, calculados en función de esa persona. Pueden actualizar estos números. Si son editores, también pueden actualizar los números de la persona predeterminada, visibles para todos.',
'You are connected as %1$s'
  => 'Estás conectado como %1$s',
'You can only update your own numbers.'
  => 'Solo puedes actualizar tus propios números.',
'You can update both your own numbers and those of the default individual.'
  => 'Puedes actualizar tanto tus propios números como los de la persona predeterminada.',
'You are only a visitor to this tree.'
  => 'Solo eres un visitante de este árbol.',
'Users who are logged in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not logged in.'
  => 'Los usuarios que han iniciado sesión, pero no están vinculados a ninguna persona en el árbol, no tienen números personales para mostrar. Tampoco los tienen los usuarios que no han iniciado sesión.',
'You are not logged-in.'
  => 'No ha iniciado sesión.',

];
