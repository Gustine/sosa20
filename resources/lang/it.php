<?php
return [
'Sosa-Stradonitz (Ahnentafel)'
  => 'Sosa-Stradonitz',
'A sidebar showing Sosa-Stradonitz number of individuals.'
  => 'Barra laterale che mostra il numero di individui di Sosa-Stradonitz.',
'First, define a valid default individual for the current gedcom.'
  => 'First, define a valid default individual for the current gedcom.',
'Sosa number %s'
  => 'Sosa numero %s',
'No Sosa number'
  => 'Nessun numero Sosa',
'(not a direct ancestor)'
  => '(non un antenato diretto)',
'Click for more informations…'
  => 'Clicca per maggiori informazioni…',
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
  => 'Vai alla pagina di benvenuto',
'Family tree root'
  => "Radice dell'albero genealogico",
'In the numbering of Sosa-Stradonitz, number one is assigned to the root of the family tree ⇨ link to a help page…'
  => "Nella numerazione di Sosa-Stradonitz, il numero uno è assegnato alla radice dell'albero genealogico ⇨ link a una pagina di aiuto…",
'using %s as root'
  => 'using %s as root',
'Back to the previous page'
  => 'Torna alla pagina precedente',
'Relationship with root…'
  => 'Relazione con la radice…',
'Update done.'
  => 'Update done.',
'The default individual is no longer part of this tree.'
  => 'The default individual is no longer part of this tree.',
'You are not linked to an individual in this family tree.'
  => 'You are not linked to an individual in this family tree.',
'//en.wikipedia.org/wiki/Ahnentafel'
  => '//it.wikipedia.org/wiki/Metodo_Sosa-Stradonitz',
'An ascending branch of a great-grandparent of the root ⇨ link to a help page…'
  => 'Un ramo ascendente di un bisnonno della radice ⇨ link a una pagina di aiuto…',
'//gustine.eu/mode_emploi/sosa-en.php'
  => '//gustine.eu/mode_emploi/sosa-en.php',

// sidebar.phtml 2025-05
'The default individual of the current gedcom will be used as the root for updating the Sosa numbers.'
  => 'The default individual of the current gedcom will be used as the root for updating the Sosa numbers.',
'Update Sosa numbers'
  => 'Update Sosa numbers',
'%1$s is Sosa %2$s (%3$s&nbsp;generation) of'
  => '%1$s  è Sosa %2$s (%3$s&nbsp;generazione) di',
'⁂ The great-grandparent %1$s is missing. The Sosa table must be rebuilt.'
  => '⁂ Il bisnonno %1$s è scomparso. La tabella Sosa deve essere ricostruita.',

// sidebar.phtml 2025-10
'(%1$s generazione)'
  => '(%1$s generación)',
'Logged-in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…'
  => 'I membri registrati che sono imparentati con una persona presente nell’albero genealogico possono visualizzare i numeri Sosa dei propri antenati ⇨ link alla pagina di aiuto…',
'The wt_sosa table does not exist, so we will create it.'
  => 'The wt_sosa table does not exist, so we will create it.',
'The structure of the wt_sosa table will need to be modified.'
  => 'The structure of the wt_sosa table will need to be modified.',
'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.'
  => 'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.',
'Update your Sosa numbers'
  => 'Aggiornare i propri numeri Sosa',
'Update the Sosa numbers in the tree'
  => 'Aggiornare i numeri Sosa dell’albero',
'Numbers are calculated from the default individual.'
  => 'Numbers are calculated from the default individual.',
'The numbers are calculated relative on you.'
  => 'The numbers are calculated relative on you.',
'%1$s is not an ancestor of'
  => '%1$s non è un antenato di',
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
  => 'Aiuto per Sosa²⁰',
'More informations on gustine.eu.'
  => 'Maggiori informazioni su gustine.eu.',
'The default individual is number&nbsp;1'
  => 'L’individuo predefinito è il numero&nbsp;1',
'⇨ link to Wikipedia…'
  => '⇨ link a Wikipedia…',
'Sosa numbers are calculated in relation to the “default individual” of the tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor status must therefore update them from time to time.'
  => 'I numeri Sosa vengono calcolati in relazione all "individuo predefinito" dell albero considerato come radice (probando). Poiché questa operazione può richiedere molto tempo, tutti i numeri vengono precalcolati e memorizzati. Un utente con stato di editor deve quindi aggiornarli di volta in volta.',
'You can update the default individual numbers, which are visible to everyone.'
  => 'È possibile aggiornare i numeri predefiniti degli individui, che sono visibili a tutti.',
'You’re not allowed to do that.'
  => 'Non è consentito farlo.',
'A great-grandparent is number&nbsp;1'
  => 'Un bisnonno è il numero&nbsp;1',
'A grandparent is number&nbsp;1'
  => 'Un nonno è il numero&nbsp;1',
'A parent is number&nbsp;1'
  => 'Un genitore è il numero&nbsp;1',
'It is assumed that the individuals of the first generations are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.'
  => 'Si presume che gli individui delle prime generazioni siano nascosti ai visitatori, ma che gli otto bisnonni della quarta generazione siano visibili.',
'It is assumed that the individuals of the first generations are hidden from visitors but that the four grandparents of the third generation are visible.'
  => 'Si presume che gli individui delle prime generazioni siano nascosti ai visitatori, ma che gli quattro nonni della terza generazione siano visibili.',
'It is assumed that the individuals of the first generations are hidden from visitors but that both parents are visible.'
  => 'Si presume che gli individui delle prime generazioni siano nascosti ai visitatori, ma che gli i due genitori siano visibili.',

'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the great-grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'Determiniamo quindi di quale bisnonno è l’antenato dell’individuo e mostriamo un piccolo simbolo che ne rappresenta la posizione su un diagramma a ventaglio. Infine, mostriamo il bisnonno e calcoliamo il numero di Sosa corrispondente a questa radice secondaria.',
'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the grandparent and calculate the sosa number corresponding to this secondary root.'
  => 'Determiniamo quindi di quale nonno è l’antenato dell’individuo e mostriamo un piccolo simbolo che ne rappresenta la posizione su un diagramma a ventaglio. Infine, mostriamo il nonno e calcoliamo il numero di Sosa corrispondente a questa radice secondaria.',
'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Finally, we display the parent and calculate the sosa number corresponding to this secondary root.'
  => 'Determiniamo quindi di quale genitori è l’antenato dell’individuo e mostriamo un piccolo simbolo che ne rappresenta la posizione su un diagramma a ventaglio. Infine, mostriamo il genitore e calcoliamo il numero di Sosa corrispondente a questa radice secondaria.',
'You are number&nbsp;1'
  => 'Tu sei il numero&nbsp;1',
'Members who are connected and linked to an individual in the tree display their own numbers, calculated based on that individual. They can update these numbers. If they are editors, they can also update the numbers of the default individual, visible to everyone.'
  => 'I membri collegati e collegati a un individuo nell’albero visualizzano i propri numeri, calcolati in base a quell’individuo. Possono aggiornare questi numeri. Se sono editori, possono anche aggiornare i numeri dell’individuo predefinito, visibili a tutti.',
'You are connected as %1$s'
  => 'Sei collegato come %1$s',
'You can only update your own numbers.'
  => 'Puoi aggiornare solo i tuoi numeri.',
'You can update both your own numbers and those of the default individual.'
  => 'Puoi aggiornare sia i tuoi numeri che quelli dell’individuo predefinito.',
'You are only a visitor to this tree.'
  => 'Sei solo un visitatore di questo albero genealogico.',
'Users who are logged in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not logged in.'
  => 'Gli utenti che hanno effettuato l’accesso ma non sono collegati a un individuo nell’albero genealogico non hanno numeri personali da visualizzare. Lo stesso vale per gli utenti che non hanno effettuato l’accesso.',
'You are not logged-in.'
  => 'Non hai effettuato l’accesso.',

// settings.phtml 2025-11
'Profile image for the default individual (free height and width)'
  => 'Immagine del profilo per l’individuo predefinito (altezza e larghezza libere)',
'Display the Sosa number corresponding to an ancestor'
  => 'Visualizza il numero Sosa corrispondente a un antenato',
'parents'
  => 'genitori',
'grandparents'
  => 'nonni',
'great-grandparents'
  => 'bisnonni',
'Display the Sosa number corresponding to a logged-in member'
  => 'Visualizza il numero Sosa corrispondente a un membro connesso',
'Sprite for symbols (height: 35px, width: 72 or 144 or 288 px)'
  => 'Sprite per i simboli (altezza: 35 px, larghezza: 72 o 144 o 288 px)',
'Reset to default values'
  => 'Ripristina impostazioni predefinite',
'The settings for the tree “%s” have been reset to their default values.'
  => 'Le impostazioni per l’albero “%s” sono state ripristinate ai valori predefiniti.',
'The settings for the tree “%s” have been updated.'
  => 'Le impostazioni per l’albero “%s” sono state aggiornate.',

];
