<?php

// Informativa sulla privacy (resources/views/privacy.blade.php) e i brevi
// avvisi che vi rimandano nel modulo di contatto e nel pagamento del quiz.
// Tradotto dall'originale portoghese (lang/pt/privacy.php).
// :email = canale di contatto per la privacy (config mail.contact_to).
return [
    'meta_title' => 'Informativa sulla privacy | Larissa Vasconcellos Architettura',
    'meta_description' => 'Come Larissa Vasconcellos Architettura raccoglie, utilizza e protegge i tuoi dati personali e come esercitare i tuoi diritti.',
    'heading' => 'Informativa sulla privacy',
    'updated' => 'Ultimo aggiornamento: 17 ottobre 2026',
    'intro' => 'Questa informativa spiega quali dati personali raccogliamo quando utilizzi questo sito, per quali finalità, con chi li condividiamo e come puoi esercitare i tuoi diritti, in conformità con la Legge generale brasiliana sulla protezione dei dati (LGPD, Legge n. 13.709/2018) e, ove applicabile, con il Regolamento generale sulla protezione dei dati dell\'Unione europea (GDPR).',

    'sections' => [
        [
            'title' => '1. Titolare del trattamento',
            'paragraphs' => [
                'Il titolare del trattamento è Larissa Vasconcellos Arquitetura, con sede a Belo Horizonte, MG, Brasile. Per qualsiasi questione relativa alla privacy, scrivi a :email.',
            ],
        ],
        [
            'title' => '2. Quali dati raccogliamo',
            'paragraphs' => [],
            'items' => [
                'Modulo di contatto: nome, cognome, e-mail, telefono (con prefisso internazionale), paese e budget stimato del progetto. Riceviamo anche il fuso orario del tuo browser, usato solo per scegliere tra «buongiorno», «buon pomeriggio» o «buonasera» nella risposta automatica.',
                'Test di stile architettonico: non chiediamo nome né e-mail per fare il test. Le tue risposte non vengono salvate sul nostro server: restano solo nel tuo browser (cancellate alla chiusura della scheda) e in un link crittografato che hai solo tu.',
                'Acquisto del Report di stile completo: il pagamento è gestito da Stripe e non riceviamo mai i dati della tua carta. Stripe ci comunica solo la conferma del pagamento e l\'e-mail inserita al checkout, che usiamo per inviarti il link al tuo report.',
                'Dati tecnici: quando visiti il sito, il tuo indirizzo IP e le informazioni del browser vengono trattati temporaneamente per sicurezza (limitazione dei tentativi e blocco dello spam) e per registrare gli errori. In questi registri l\'e-mail appare mascherata (ad esempio «pe***@gmail.com»).',
            ],
        ],
        [
            'title' => '3. Finalità e basi giuridiche',
            'paragraphs' => [],
            'items' => [
                'Rispondere alla tua richiesta, inviare la risposta automatica e preparare una proposta di progetto: misure precontrattuali adottate su tua richiesta (art. 7, V, LGPD; art. 6(1)(b) GDPR).',
                'Gestire il pagamento e consegnare il report acquistato: esecuzione di un contratto (art. 7, V, LGPD; art. 6(1)(b) GDPR).',
                'Proteggere il sito da abusi, spam e frodi e correggere errori: legittimo interesse (art. 7, IX, LGPD; art. 6(1)(f) GDPR).',
                'Adempiere agli obblighi legali e fiscali relativi ai pagamenti: obbligo legale (art. 7, II, LGPD; art. 6(1)(c) GDPR).',
            ],
            'closing' => 'Non usiamo i tuoi dati per pubblicità, non creiamo profili comportamentali e non vendiamo dati personali.',
        ],
        [
            'title' => '4. Con chi li condividiamo',
            'paragraphs' => [
                'Condividiamo i dati solo con i fornitori necessari al funzionamento del sito, che li trattano per nostro conto:',
            ],
            'items' => [
                'Resend: invio delle e-mail del sito (messaggio di contatto, risposta automatica e link del report).',
                'Google (Gmail): casella di posta in cui riceviamo i messaggi di contatto.',
                'Stripe: elaborazione dei pagamenti.',
                'Render: hosting del sito.',
                'Google Fonts e Cloudflare (cdnjs): forniscono i caratteri e le icone del sito e ricevono il tuo indirizzo IP al caricamento della pagina.',
                'YouTube: video incorporati in alcune pagine di progetto, caricati in modalità di privacy avanzata.',
            ],
            'closing' => 'Possiamo inoltre condividere dati quando richiesto dalla legge o da un\'autorità competente.',
        ],
        [
            'title' => '5. Trasferimenti internazionali',
            'paragraphs' => [
                'Alcuni di questi fornitori conservano dati al di fuori del Brasile, principalmente negli Stati Uniti. Questi trasferimenti seguono l\'articolo 33 della LGPD e si basano sulle garanzie contrattuali e di sicurezza offerte da ciascun fornitore.',
            ],
        ],
        [
            'title' => '6. Cookie e archiviazione nel browser',
            'paragraphs' => [
                'Usiamo solo cookie strettamente necessari: un cookie di sessione crittografato e un cookie che protegge i moduli da invii contraffatti (CSRF). Il Test di stile usa l\'archiviazione della scheda (sessionStorage) per non perdere i tuoi progressi se la pagina viene ricaricata. Non usiamo cookie di analisi, pubblicità o tracciamento.',
            ],
        ],
        [
            'title' => '7. Per quanto tempo li conserviamo',
            'paragraphs' => [],
            'items' => [
                'Messaggi di contatto: per il tempo necessario a risponderti e per un\'eventuale collaborazione di progetto, o finché non ne chiedi la cancellazione.',
                'Dati di pagamento: conservati da Stripe per il periodo richiesto dagli obblighi legali e fiscali.',
                'Dati tecnici e di sicurezza: per brevi periodi (i controlli anti-abuso scadono entro 24 ore e i registri degli errori vengono eliminati periodicamente).',
            ],
        ],
        [
            'title' => '8. I tuoi diritti',
            'paragraphs' => [
                'Puoi richiedere, in qualsiasi momento e gratuitamente:',
            ],
            'items' => [
                'la conferma che trattiamo i tuoi dati e l\'accesso agli stessi;',
                'la rettifica di dati incompleti, inesatti o non aggiornati;',
                'l\'anonimizzazione, il blocco o la cancellazione di dati non necessari o trattati illecitamente;',
                'la portabilità dei tuoi dati verso un altro fornitore;',
                'informazioni su con chi condividiamo i tuoi dati;',
                'la cancellazione dei tuoi dati e la revoca del consenso, quando il trattamento si basa su di esso;',
                'l\'opposizione a un trattamento che ritieni irregolare.',
            ],
            'closing' => 'Per esercitare questi diritti, scrivi a :email. Risponderemo entro 15 giorni. Puoi anche presentare reclamo all\'Autorità nazionale brasiliana per la protezione dei dati (ANPD) o, se ti trovi nell\'Unione europea, all\'autorità di protezione dei dati del tuo paese (in Italia, il Garante per la protezione dei dati personali).',
        ],
        [
            'title' => '9. Sicurezza',
            'paragraphs' => [
                'Il sito usa una connessione crittografata (HTTPS), non mantiene un database di clienti e protegge i link del Test di stile con la crittografia. Nessun sistema è completamente immune da guasti, ma adottiamo misure tecniche e organizzative ragionevoli per proteggere i tuoi dati.',
            ],
        ],
        [
            'title' => '10. Minori',
            'paragraphs' => [
                'Questo sito non è rivolto a minori di 18 anni e non raccogliamo consapevolmente dati di bambini o adolescenti.',
            ],
        ],
        [
            'title' => '11. Modifiche a questa informativa',
            'paragraphs' => [
                'Possiamo aggiornare questa informativa per riflettere modifiche al sito o alla legge. La data dell\'ultimo aggiornamento è indicata in cima a questa pagina.',
            ],
        ],
    ],

    'link_text' => 'Informativa sulla privacy',
    'footer_link' => 'Privacy',
    'contact_notice' => 'Inviando il modulo, accetti che i tuoi dati vengano utilizzati per rispondere alla tua richiesta, come descritto nella nostra :link.',
    'checkout_notice' => 'Il pagamento è gestito in modo sicuro da Stripe; non riceviamo mai i dati della tua carta. Maggiori informazioni nella nostra :link.',
];
