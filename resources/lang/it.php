<?php
return [
'Sosa-Stradonitz (Ahnentafel)'
  => 'Sosa-Stradonitz',
'A sidebar showing Sosa-Stradonitz number of individuals.'
  => 'Barra laterale che mostra il numero di individui di Sosa-Stradonitz.',
'First, define a valid default individual for the current family tree.'
  => 'First, define a valid default individual for the current family tree.',
'Sosa number %s'
  => 'Sosa numero %s',
'No Sosa number'
  => 'Nessun numero Sosa',
'(not a direct ancestor)'
  => '(non un antenato diretto)',
'Click for more informations…'
  => 'Clicca per maggiori informazioni…',
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
  => "Radice dell'albero genealogico",
'The Sosa-Stradonitz numbering system assigns number one to the root of the family tree ⇨ link to a help page…'
  => "Nella numerazione di Sosa-Stradonitz, il numero uno è assegnato alla radice dell'albero genealogico ⇨ link a una pagina di aiuto…",
'using %s as Sosa 1'
  => 'utilizzando %s come Sosa 1',
'Return to the previous page'
  => 'Torna alla pagina precedente',
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

// module.php 2025-11
'The settings for the family tree “%s” have been updated.'
  => 'Le impostazioni per l’albero genealogico “%s” sono state aggiornate.',

// sidebar.phtml 2025-05
'Family tree #'
  => 'Albero genealogico n° ',
'The default individual of the current family tree will be used as the root for updating the Sosa numbers.'
  => 'The default individual of the current family tree will be used as the root for updating the Sosa numbers.',
'Update Sosa numbers'
  => 'Update Sosa numbers',
'%1$s is Sosa %2$s (%3$s&nbsp;generation) of'
  => '%1$s è Sosa %2$s (%3$s&nbsp;generazione) di',
'⁂ The great-grandparent %1$s is missing. The Sosa table needs rebuilding.'
  => '⁂ Il bisnonno %1$s è scomparso. La tabella Sosa deve essere ricostruita.',

// sidebar.phtml 2025-10
'(%1$s generazione)'
  => '(%1$s generación)',
'Signed in members who are related to an individual in the tree can view the Sosa numbers of their own ancestors ⇨ link to a help page…'
  => 'I membri registrati che sono imparentati con una persona presente nell’albero genealogico possono visualizzare i numeri Sosa dei propri antenati ⇨ link alla pagina di aiuto…',
'The wt_sosa table does not exist, we need to create it.'
  => 'The wt_sosa table does not exist, we need to create it.',
'The structure of the wt_sosa table needs to be modified.'
  => 'The structure of the wt_sosa table needs to be modified.',
'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.'
  => 'An error message <span style="background-color: #f8d7da">“There is no active transaction…”</span> will appear. Ignore it and reload the page.',
'Update your Sosa numbers'
  => 'Aggiornare i propri numeri Sosa',
'Update the Sosa numbers in the tree'
  => 'Aggiornare i numeri Sosa dell’albero',
'%1$s is not an ancestor of'
  => '%1$s non è un antenato di',
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
  => 'Aiuto per Sosa²⁰',
'See more information at gustine.eu.'
  => 'Maggiori informazioni su gustine.eu.',
'The default individual is number&nbsp;1'
  => 'L’individuo predefinito è il numero&nbsp;1',
'⇨ link to Wikipedia…'
  => '⇨ link a Wikipedia…',
'Sosa numbers are calculated in relation to the “default individual” of the family tree considered as the root (proband). Because this can take a long time, all numbers are pre-calculated and stored. A user with editor rights, or higher, should update them from time to time.'
  => 'I numeri Sosa vengono calcolati in relazione all "individuo predefinito" dell albero considerato come radice (probando). Poiché questa operazione può richiedere molto tempo, tutti i numeri vengono precalcolati e memorizzati. Un utente con stato di editor deve quindi aggiornarli di volta in volta.',
'You can update the default individual Sosa numbers, which are visible to everyone.'
  => 'È possibile aggiornare i numeri predefiniti degli individui, che sono visibili a tutti.',
'You’re not allowed to do that.'
  => 'Non è consentito farlo.',
'A great-grandparent is number&nbsp;1'
  => 'Un bisnonno è il numero&nbsp;1',
'A grandparent is number&nbsp;1'
  => 'Un nonno è il numero&nbsp;1',
'A parent is number&nbsp;1'
  => 'Un genitore è il numero&nbsp;1',
'It is assumed that the first generation individuals are hidden from visitors but that the eight great-grandparents of the fourth generation are visible.'
  => 'Si presume che gli individui delle prime generazioni siano nascosti ai visitatori, ma che gli otto bisnonni della quarta generazione siano visibili.',
'It is assumed that the first generation individuals are hidden from visitors but that the four grandparents of the third generation are visible.'
  => 'Si presume che gli individui delle prime generazioni siano nascosti ai visitatori, ma che gli quattro nonni della terza generazione siano visibili.',
'It is assumed that the first generation individuals are hidden from visitors but that both parents are visible.'
  => 'Si presume che gli individui delle prime generazioni siano nascosti ai visitatori, ma che gli i due genitori siano visibili.',

'We then determine which great-grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the great-grandparent and calculate the Sosa number corresponding to this secondary root.'
  => 'Determiniamo quindi di quale bisnonno è l’antenato dell’individuo e mostriamo un piccolo simbolo che ne rappresenta la posizione su un diagramma a ventaglio. Infine, mostriamo il bisnonno e calcoliamo il numero di Sosa corrispondente a questa radice secondaria.',
'We then determine which grandparent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the grandparent and calculate the Sosa number corresponding to this secondary root.'
  => 'Determiniamo quindi di quale nonno è l’antenato dell’individuo e mostriamo un piccolo simbolo che ne rappresenta la posizione su un diagramma a ventaglio. Infine, mostriamo il nonno e calcoliamo il numero di Sosa corrispondente a questa radice secondaria.',
'We then determine which parent’s ancestor the individual is and display a small symbol representing its place on a fan diagram. Once determined, we display the parent and calculate the Sosa number corresponding to this secondary root.'
  => 'Determiniamo quindi di quale genitori è l’antenato dell’individuo e mostriamo un piccolo simbolo che ne rappresenta la posizione su un diagramma a ventaglio. Infine, mostriamo il genitore e calcoliamo il numero di Sosa corrispondente a questa radice secondaria.',
'You are number&nbsp;1'
  => 'Tu sei il numero&nbsp;1',
'Members who are signed in and linked to an individual in the tree display their own Sosa numbers, calculated based on that individual. They can update these numbers. If they have editor rights, or higher, they can also update the numbers of the default individual, visible to everyone.'
  => 'I membri collegati e collegati a un individuo nell’albero visualizzano i propri numeri, calcolati in base a quell’individuo. Possono aggiornare questi numeri. Se sono editori, possono anche aggiornare i numeri dell’individuo predefinito, visibili a tutti.',
'You are signed in as %1$s'
  => 'Sei collegato come %1$s',
'You can only update your own numbers.'
  => 'Puoi aggiornare solo i tuoi numeri.',
'You can update both your own numbers and those of the default individual.'
  => 'Puoi aggiornare sia i tuoi numeri Sosa che quelli dell’individuo predefinito.',
'You are only a visitor to this family tree.'
  => 'Sei solo un visitatore di questo albero genealogico.',
'Users who are signed in but are not linked to an individual in the tree do not have personal numbers to display. Neither do users who are not signed in.'
  => 'Gli utenti che hanno effettuato l’accesso ma non sono collegati a un individuo nell’albero genealogico non hanno numeri personali da visualizzare. Lo stesso vale per gli utenti che non hanno effettuato l’accesso.',
'You are not signed in.'
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
'Display the Sosa number corresponding to a signed in member'
  => 'Visualizza il numero Sosa corrispondente a un membro connesso',
'Sprite image for symbols (height: 35px, width: 72 or 144 or 288 px)'
  => 'Sprite per i simboli (altezza: 35 px, larghezza: 72 o 144 o 288 px)',

];
