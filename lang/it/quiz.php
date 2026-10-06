<?php

return [

    'meta' => [
        'title' => 'Test di Stile d\'Arredamento | Larissa Vasconcellos',
        'description' => 'Scopri in pochi minuti quale stile d\'arredamento ti rispecchia di più: Classico, Minimalista, Rustico, Industriale, Scandinavo, Boho o Contemporaneo.',
    ],

    'intro' => [
        'heading' => 'Qual È Il Tuo Stile D\'Arredamento?',
        'subheading' => 'Rispondi a 20 domande rapide con immagini e scopri quale dei 7 stili ti rispecchia di più — e come il tuo gusto si divide tra palette, forme e materiali.',
        'start_button' => 'Inizia Il Test',
    ],

    'ui' => [
        'question_progress' => 'Domanda :current di :total',
        'next' => 'Avanti',
        'back' => 'Indietro',
        'submit' => 'Invia',
        'validation_required' => 'Scegli un\'opzione per continuare.',
        'incomplete_message' => 'Rispondi a tutte le domande prima di inviare.',
    ],

    'questions' => [
        1 => 'Quale soggiorno ti piace di più?',
        2 => 'In quale camera d\'albergo vorresti svegliarti?',
        3 => 'Quale cucina ti rispecchia?',
        4 => 'Quale bar/ristorante sceglieresti per una serata speciale?',
        5 => 'Quale letto sceglieresti per la tua camera?',
        6 => 'Quale pavimento preferisci?',
        7 => 'Quale rivestimento a parete ti attira?',
        8 => 'Quale illuminazione/lampada sceglieresti?',
        9 => 'Quale tavolo da pranzo ti rispecchia?',
        10 => 'Quale palette di colori ti piace di più?',
        11 => 'Quali tende sceglieresti?',
        12 => 'Quale tappeto ti rispecchia?',
        13 => 'Quale oggetto decorativo appenderesti al muro?',
        14 => 'In quale di questi luoghi vorresti viaggiare in vacanza?',
        15 => 'Quale balcone/area esterna vorresti avere?',
        16 => 'Quale poltrona attira la tua attenzione?',
        17 => 'Quale bagno sceglieresti?',
        18 => 'Quale libreria/scaffale ti rispecchia?',
        19 => 'Quale porta sceglieresti per casa tua?',
        20 => 'Quale facciata di casa ti piace di più?',
    ],

    'result' => [
        'ready_heading' => 'Il Tuo Risultato È Pronto!',
        'ready_body' => 'Hai risposto a tutte le 20 domande. Sblocca ora il tuo Report Completo dello Stile per un pagamento unico di 3 $.',
        'unlock_heading' => 'Report Completo dello Stile',
        'unlock_body' => 'Per soli 3 $, sblocchi il risultato dettagliato del tuo test: quale dei 7 stili ti rispecchia di più, le cinque dimensioni del tuo gusto (palette, forme e materiali) calcolate a partire da tutte le tue risposte, come appare il tuo stile nella pratica — caratteristiche, materiali e palette di colori — e cosa funziona per te, insieme ai punti di attenzione.',
        'unlock_cta' => 'Vedi Il Mio Risultato',
        'checkout_cancelled' => 'Il pagamento è stato annullato. Sblocca di nuovo quando sei pronto a vedere il tuo risultato.',
        'checkout_error' => 'Non è stato possibile avviare il pagamento in questo momento. Riprova tra poco.',
        'invalid_token' => 'Questo link del risultato non è valido o è scaduto. Rifai il test per ottenere un nuovo risultato.',
        'hero_label' => 'Il tuo stile architettonico è',
        'dimensions_heading' => 'Le dimensioni del tuo stile',
        'dimensions_intro' => 'Queste cinque dimensioni sono calcolate a partire da tutte le tue risposte, e non solo dallo stile arrivato primo. Mostrano da che parte pende il tuo gusto in fatto di palette, forme e materiali, e con quale intensità. Passa il mouse o tocca ciascuna per scoprire cosa dice di te.',
        'practice_heading' => 'Il tuo stile nella pratica',
        'practice_characteristics' => 'Caratteristiche',
        'practice_materials' => 'Materiali principali',
        'practice_palette' => 'Palette di colori',
        'fit_heading' => 'Cosa funziona e punti di attenzione',
        'works_heading' => 'Cosa funziona per te',
        'watch_outs_heading' => 'Punti di attenzione',
        'projects_heading' => 'Progetti in questo stile',
        'sidebar_label' => 'Il tuo stile è:',
        'sections_nav_label' => 'Sezioni della pagina',
        'on_this_page' => 'In questa pagina',
        'share' => 'Condividi',
        'share_copied' => 'Link copiato!',
        'share_text' => 'Il mio stile d\'arredamento è :style. Fai il test e scopri il tuo:',
    ],

    // Seção "Dimensões do seu estilo": nomes dos polos (esquerdo = 0,
    // direito = 100) e o texto do card de cada polo. Pesos e cálculo em
    // config/quiz.php ('dimensions') e quiz_dimensions() em app/helpers.php.
    'dimensions' => [
        'tones' => [
            'group' => 'Palette',
            'left' => 'Toni chiari',
            'right' => 'Toni scuri',
            'left_text' => 'I toni chiari sono un tuo tratto distintivo. Ami gli ambienti luminosi e ariosi, in cui il bianco, il beige e i legni chiari ampliano lo spazio e portano leggerezza.',
            'right_text' => 'Il tuo tratto più marcato qui sono i toni scuri. Ami gli ambienti con profondità e personalità, in cui il marrone, la grafite e il nero creano un\'atmosfera intima.',
        ],
        'color' => [
            'group' => 'Palette',
            'left' => 'Neutro',
            'right' => 'Colorato',
            'left_text' => 'Preferisci una palette neutra. Pochi colori, ben abbinati, rendono l\'ambiente calmo e mettono in risalto forme e materiali.',
            'right_text' => 'Il colore è una parte importante del tuo gusto. Ti senti bene in ambienti vivaci, con fantasie e abbinamenti che esprimono personalità.',
        ],
        'lines' => [
            'group' => 'Caratteristiche',
            'left' => 'Linee rette',
            'right' => 'Linee curve',
            'left_text' => 'Le linee rette sono un tuo tratto distintivo. Ami le forme semplici e geometriche, che rendono l\'ambiente ordinato e visivamente pulito.',
            'right_text' => 'Ti ritrovi nelle linee curve. Forme arrotondate, archi e dettagli ornamentali portano movimento e morbidezza all\'ambiente.',
        ],
        'character' => [
            'group' => 'Caratteristiche',
            'left' => 'Sofisticato',
            'right' => 'Accogliente',
            'left_text' => 'Il tuo tratto più marcato qui è la raffinatezza. Apprezzi gli ambienti eleganti e ben rifiniti, in cui ogni dettaglio sembra essere stato pensato.',
            'right_text' => 'Dai priorità all\'accoglienza. Per te, un buon ambiente è quello che invita a restare, con texture morbide, luce calda e un\'atmosfera di casa vissuta.',
        ],
        'materials' => [
            'group' => 'Materiali',
            'left' => 'Materiali naturali',
            'right' => 'Materiali industriali',
            'left_text' => 'Preferisci i materiali naturali. Legno, pietra, fibre e tessuti come lino e cotone portano la texture e il calore che cerchi.',
            'right_text' => 'Ti ritrovi nei materiali industriali. Cemento, acciaio e vetro danno all\'ambiente l\'aspetto urbano e attuale che ti rispecchia.',
        ],
    ],

    'checkout' => [
        'product_name' => 'Risultato Completo — Test di Stile d\'Arredamento',
    ],

    'mail' => [
        'unlocked_subject' => 'Il Tuo Risultato Completo del Test di Stile È Pronto',
        'unlocked_heading' => 'Il tuo risultato completo è sbloccato!',
        'unlocked_body' => 'Il tuo pagamento è stato confermato e il risultato completo del tuo Test di Stile d\'Arredamento è ora disponibile. Il tuo stile predominante è <strong>:style</strong> — clicca sul pulsante qui sotto per scoprire le dimensioni del tuo gusto, come appare il tuo stile nella pratica e molto altro.',
        'unlocked_cta' => 'Vedi Il Mio Risultato Completo',
    ],

    // Conteúdo da página de resultado de cada estilo. Campos vazios ficam
    // ocultos na página (ela continua funcionando) — preencher um estilo por vez.
    //   hero_text  → 2 parágrafos, começando por "Sendo do estilo [nome], você…"
    //   practice   → characteristics/materials: 'text' (2–3 frases) + 'items' (lista curta);
    //                palette: 'text' + 'colors' => [['name' => 'Bege', 'hex' => '#E8DCC4'], ...]
    //   works      → 4 a 6 itens ['title' => '...', 'text' => '...'] (O que funciona para você)
    //   watch_outs → 3 a 5 itens ['title' => '...', 'text' => '...'] (Pontos de atenção)
    'styles' => [

        'classic' => [
            'name' => 'Classico',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

        'minimalist' => [
            'name' => 'Minimalista',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

        'rustic' => [
            'name' => 'Rustico',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

        'industrial' => [
            'name' => 'Industriale',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

        'scandinavian' => [
            'name' => 'Scandinavo',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

        'bohemian' => [
            'name' => 'Boho',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

        'contemporary' => [
            'name' => 'Contemporaneo',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

    ],

];
