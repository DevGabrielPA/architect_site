<?php

// Risposta automatica inviata a chi compila il modulo di contatto (vedi
// ContactAutoReplyMail). Traduzione dell'originale portoghese di Larissa.
// :name = nome della persona.
return [
    'subject' => 'Sul tuo progetto',

    'greeting_morning' => 'Buongiorno :name, come stai?',
    'greeting_afternoon' => 'Buon pomeriggio :name, come stai?',
    'greeting_evening' => 'Buonasera :name, come stai?',

    'intro' => 'Che bello che ci hai contattato! Ho visto che ci hai già indicato un budget stimato. Per capire meglio cosa hai in mente e darti subito le indicazioni giuste, puoi raccontarmi qualcosa in più sul progetto?',

    'points_intro' => 'Alcuni punti che aiutano molto:',
    'points' => [
        'Che tipo di spazio è (casa, appartamento, ufficio...) e la metratura approssimativa',
        'Se è un progetto da zero, una ristrutturazione o solo la parte di arredamento/interni',
        'Se hai già in mente una tempistica per iniziare',
    ],

    'next_step' => 'Con queste informazioni, posso già darti un riscontro per andare avanti con il progetto.',

    'quiz_pitch' => 'Infine, vorrei consigliarti una fase che rende il progetto molto più mirato: il nostro Test di Stile. In pochi minuti identifica il tuo stile d\'arredamento, i colori, i materiali e le forme in cui ti riconosci di più, e anche ciò che non fa per te. Così allineiamo le aspettative fin dall\'inizio e sviluppiamo un progetto fedele ai tuoi gusti, con più precisione e senza rifacimenti. Il risultato può anche aiutarti a vedere con più chiarezza cosa desideri per il tuo spazio.',

    'quiz_link_intro' => 'Il test è facoltativo e costa solo 3 US$:',

    'sign_off' => 'Resto in attesa di una tua risposta!',
];
