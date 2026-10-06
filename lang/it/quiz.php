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
        'dimensions_intro' => 'Queste cinque dimensioni sono calcolate a partire da tutte le tue risposte, e non solo dallo stile arrivato primo. Mostrano da che parte pende il tuo gusto in ogni aspetto, e con quale intensità. Passa il mouse o tocca ciascuna per scoprire cosa dice di te.',
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
        'tempo' => [
            'group' => 'Epoca',
            'left' => 'Tradizionale',
            'right' => 'Moderno',
            'left_text' => 'Il tradizionale è un tuo tratto distintivo. Ami le forme e i riferimenti che hanno superato la prova del tempo, e vedi bellezza in ciò che ha una storia.',
            'right_text' => 'Il tuo tratto più marcato qui è il moderno. Ami le soluzioni attuali, il design recente e gli ambienti che sembrano fatti per il modo di vivere di oggi.',
        ],
        'elementos' => [
            'group' => 'Composizione',
            'left' => 'Essenziale',
            'right' => 'Dettagliato',
            'left_text' => 'Ami gli ambienti puliti, con pochi elementi in vista. Lo spazio libero e le superfici sgombre portano la calma visiva che cerchi.',
            'right_text' => 'Ami gli ambienti ricchi di dettagli. Texture, oggetti, quadri e strati di tessuti danno allo spazio la vita e la personalità che cerchi.',
        ],
        'cor' => [
            'group' => 'Palette',
            'left' => 'Neutro',
            'right' => 'Colorato',
            'left_text' => 'Preferisci una palette neutra. Pochi colori, ben abbinati, rendono l\'ambiente calmo e mettono in risalto forme e materiali.',
            'right_text' => 'Il colore è una parte importante del tuo gusto. Ti senti bene in ambienti vivaci, con fantasie e abbinamenti che esprimono personalità.',
        ],
        'linhas' => [
            'group' => 'Caratteristiche',
            'left' => 'Linee rette',
            'right' => 'Linee curve',
            'left_text' => 'Le linee rette sono un tuo tratto distintivo. Ami le forme semplici e geometriche, che rendono l\'ambiente ordinato e visivamente pulito.',
            'right_text' => 'Ti ritrovi nelle linee curve. Forme arrotondate, archi e dettagli ornamentali portano movimento e morbidezza all\'ambiente.',
        ],
        'materiais' => [
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
                'characteristics' => [
                    'text' => 'Il classico parte dalla simmetria e dalla proporzione. Gli ambienti si organizzano attorno a un punto centrale, come un camino o una consolle, e i dettagli lavorati danno la rifinitura.',
                    'items' => [
                        'Simmetria e proporzione',
                        'Cornici, boiserie e battiscopa alti',
                        'Mobili imponenti, dal disegno tradizionale',
                        'Lampadari di cristallo e tappeti decorati',
                        'Specchi, sculture e opere d\'arte in evidenza',
                    ],
                ],
                'materials' => [
                    'text' => 'I materiali sono nobili e scelti per durare. È uno stile in cui la qualità si percepisce al tatto.',
                    'items' => [
                        'Legno nobile e massello',
                        'Marmo',
                        'Velluto, seta e lino',
                        'Ottone e dettagli dorati',
                        'Cristallo',
                    ],
                ],
                'palette' => [
                    'text' => 'La base è chiara e calda, con l\'oro nei dettagli. I toni profondi, come il blu navy, entrano in punti scelti.',
                    'colors' => [
                        ['name' => 'Bianco sporco', 'hex' => '#F4EFE6'],
                        ['name' => 'Beige', 'hex' => '#D9C7A8'],
                        ['name' => 'Oro anticato', 'hex' => '#B8975A'],
                        ['name' => 'Marrone', 'hex' => '#5C4033'],
                        ['name' => 'Blu navy', 'hex' => '#1F2A44'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'La simmetria come punto di partenza', 'text' => 'Organizza l\'ambiente a partire da un asse. Divano centrato, poltrone in coppia e lampade uguali ai due lati risolvono buona parte della composizione.'],
                ['title' => 'Pochi materiali, tutti buoni', 'text' => 'Legno, pietra e metallo veri invecchiano bene. Due o tre buone scelte valgono più di molte scelte mediocri.'],
                ['title' => 'Cornici e boiserie', 'text' => 'Danno disegno a una parete liscia e funzionano anche negli appartamenti nuovi, senza alcun dettaglio originale.'],
                ['title' => 'Luce a strati', 'text' => 'Lampadario, applique e lampade da tavolo su circuiti separati permettono di cambiare l\'atmosfera dell\'ambiente nel corso della giornata.'],
            ],
            'watch_outs' => [
                ['title' => 'Eccesso di ornamenti', 'text' => 'Quando tutto ha un dettaglio, niente risalta. Scegli uno o due protagonisti per ambiente e lascia il resto più tranquillo.'],
                ['title' => 'Proporzioni negli spazi piccoli', 'text' => 'I mobili classici tendono a essere voluminosi. In ambienti piccoli o con soffitti bassi, lampadari grandi e cornici pesanti schiacciano lo spazio.'],
                ['title' => 'Imitazioni', 'text' => 'Il laminato effetto marmo e l\'oro troppo lucido indeboliscono l\'insieme. Nel classico è meglio avere meno, ma avere l\'originale.'],
            ],
        ],

        'minimalist' => [
            'name' => 'Minimalista',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Il minimalismo riduce l\'ambiente al necessario. Ogni pezzo ha una funzione e un posto definiti, e lo spazio vuoto fa parte del progetto.',
                    'items' => [
                        'Linee rette e forme semplici',
                        'Superfici libere',
                        'Pochi mobili, di alta qualità',
                        'Arredi multifunzionali',
                        'Contenitori a incasso e discreti',
                    ],
                ],
                'materials' => [
                    'text' => 'Pochi materiali, ripetuti in tutto l\'ambiente, creano unità. Le finiture sono lisce e senza decorazioni.',
                    'items' => [
                        'Vetro',
                        'Metallo, come acciaio spazzolato e alluminio',
                        'Legno chiaro',
                        'Gres porcellanato o pietra a disegno uniforme',
                        'Tessuti in tinta unita, senza fantasie',
                    ],
                ],
                'palette' => [
                    'text' => 'La palette è ridotta e neutra. Il contrasto tra bianco e nero definisce le forme, e il legno chiaro evita che l\'ambiente risulti freddo.',
                    'colors' => [
                        ['name' => 'Bianco', 'hex' => '#FFFFFF'],
                        ['name' => 'Grigio chiaro', 'hex' => '#D9D9D9'],
                        ['name' => 'Grigio medio', 'hex' => '#8C8C8C'],
                        ['name' => 'Nero', 'hex' => '#1A1A1A'],
                        ['name' => 'Legno chiaro', 'hex' => '#D8C3A5'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Arredi chiusi', 'text' => 'Ante lisce, senza maniglie a vista, contengono il quotidiano e mantengono le superfici libere.'],
                ['title' => 'Pochi pezzi, ben scelti', 'text' => 'Con meno oggetti, ognuno risalta di più. Vale la pena investire nel divano, nel tavolo e nella lampada principale.'],
                ['title' => 'Ripetizione dei materiali', 'text' => 'Lo stesso pavimento e lo stesso legno in più ambienti danno continuità e ampliano lo spazio.'],
                ['title' => 'La luce come parte del progetto', 'text' => 'Luce naturale senza ostacoli e illuminazione a incasso prendono il posto degli oggetti decorativi.'],
            ],
            'watch_outs' => [
                ['title' => 'Ambiente freddo', 'text' => 'Senza texture, il minimalismo diventa impersonale. Legno, lana e lino portano calore senza aggiungere oggetti.'],
                ['title' => 'Mancanza di contenitori', 'text' => 'L\'aspetto pulito dipende dall\'avere dove riporre le cose. Senza abbastanza arredi su misura, gli oggetti tornano sui piani di lavoro.'],
                ['title' => 'Finiture in vista', 'text' => 'Con pochi elementi, ogni difetto si nota: un battiscopa storto, una fuga fatta male, una parete irregolare.'],
            ],
        ],

        'rustic' => [
            'name' => 'Rustico',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Il rustico porta la natura dentro casa. I materiali si mostrano come sono, con venature, nodi e segni, e l\'ambiente invita a restare.',
                    'items' => [
                        'Travi e strutture in legno a vista',
                        'Texture naturali in evidenza',
                        'Mobili robusti',
                        'Pezzi artigianali e di recupero',
                        'Camino o stufa a legna come punto d\'incontro',
                    ],
                ],
                'materials' => [
                    'text' => 'Tutto è naturale e poco lavorato. L\'imperfezione fa parte dell\'aspetto.',
                    'items' => [
                        'Legno grezzo o di recupero',
                        'Pietra naturale',
                        'Ferro',
                        'Lino e cotone',
                        'Paglia, vimini e ceramica',
                    ],
                ],
                'palette' => [
                    'text' => 'Toni terrosi, presi dai materiali stessi. Il verde entra attraverso le piante e i dettagli color muschio.',
                    'colors' => [
                        ['name' => 'Ecrù', 'hex' => '#EDE6D6'],
                        ['name' => 'Sabbia', 'hex' => '#D8C4A0'],
                        ['name' => 'Terracotta', 'hex' => '#C1693C'],
                        ['name' => 'Marrone legno', 'hex' => '#6B4A2F'],
                        ['name' => 'Verde muschio', 'hex' => '#6B705C'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Legno di recupero', 'text' => 'In un tavolo, in un pannello o nelle travi, crea da solo buona parte dell\'atmosfera dell\'ambiente.'],
                ['title' => 'Mix di texture', 'text' => 'Pietra, legno, lino e paglia insieme creano interesse senza dipendere dal colore.'],
                ['title' => 'Pezzi artigianali', 'text' => 'Ceramica, cesteria e mobili fatti a mano rafforzano il carattere dello stile.'],
                ['title' => 'Luce calda', 'text' => 'Lampadine dalla tonalità gialla e punti luce bassi, come lampade da tavolo e applique, rafforzano l\'accoglienza.'],
            ],
            'watch_outs' => [
                ['title' => 'Ambiente buio', 'text' => 'Molto legno scuro e pietra assorbono la luce. Pareti chiare e buone aperture compensano.'],
                ['title' => 'Peso visivo', 'text' => 'Troppi mobili robusti appesantiscono l\'ambiente, soprattutto negli spazi piccoli.'],
                ['title' => 'Manutenzione dei materiali', 'text' => 'Legno e pietra naturale richiedono trattamenti contro umidità, macchie e termiti.'],
            ],
        ],

        'industrial' => [
            'name' => 'Industriale',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Ispirato ai vecchi capannoni e loft di New York, l\'industriale mostra ciò che gli altri stili nascondono: struttura, tubature e impianti restano a vista.',
                    'items' => [
                        'Tubature e canaline a vista',
                        'Mattoni a vista',
                        'Ambienti open space e soffitti alti',
                        'Lampade e sospensioni in metallo',
                        'Mobili in ferro e legno',
                    ],
                ],
                'materials' => [
                    'text' => 'Materiali grezzi, dall\'aspetto resistente, con finitura opaca.',
                    'items' => [
                        'Cemento e cemento spatolato',
                        'Acciaio e ferro nero',
                        'Pelle',
                        'Mattoni a vista',
                        'Legno scuro o di recupero',
                    ],
                ],
                'palette' => [
                    'text' => 'I grigi e il nero formano la base. Il marrone della pelle e il tono mattone scaldano l\'insieme.',
                    'colors' => [
                        ['name' => 'Grigio cemento', 'hex' => '#9A9A96'],
                        ['name' => 'Grafite', 'hex' => '#3A3A3C'],
                        ['name' => 'Nero', 'hex' => '#1C1C1C'],
                        ['name' => 'Marrone cuoio', 'hex' => '#7B4B2A'],
                        ['name' => 'Mattone', 'hex' => '#9C4A33'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Struttura a vista', 'text' => 'Solaio, travi e tubature a vista entrano a far parte dell\'arredo e rendono superfluo il controsoffitto.'],
                ['title' => 'Ambienti open space', 'text' => 'Soggiorno, cucina e zona pranzo senza pareti valorizzano l\'ampiezza che lo stile richiede.'],
                ['title' => 'Binari e sospensioni', 'text' => 'L\'illuminazione a binario permette di orientare la luce e si abbina all\'aspetto tecnico.'],
                ['title' => 'Pelle e legno per scaldare', 'text' => 'Un divano in pelle o un tavolo in legno bilanciano la freddezza del cemento e del metallo.'],
            ],
            'watch_outs' => [
                ['title' => 'Ambiente freddo e buio', 'text' => 'Troppo grigio e nero appesantiscono. Una luce ben progettata, il legno e i tessuti evitano questo effetto.'],
                ['title' => 'Acustica', 'text' => 'Superfici dure e ambienti aperti creano eco. Tappeti, tende e imbottiti aiutano ad assorbire il suono.'],
                ['title' => 'Gli impianti a vista richiedono cura', 'text' => 'Tubature e cavi a vista hanno bisogno di un percorso progettato e di un\'esecuzione pulita. L\'improvvisazione si vede.'],
            ],
        ],

        'scandinavian' => [
            'name' => 'Scandinavo',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Lo scandinavo è nato in paesi dagli inverni lunghi e con poca luce, e per questo valorizza la luminosità e il comfort. È funzionale come il minimalista, ma più accogliente.',
                    'items' => [
                        'Luce naturale sfruttata al massimo',
                        'Mobili leggeri, dalle linee semplici',
                        'Plaid, cuscini e tappeti',
                        'Piante',
                        'Arredamento essenziale e funzionale',
                    ],
                ],
                'materials' => [
                    'text' => 'Legno chiaro e tessuti naturali danno il tono. Le texture morbide svolgono il ruolo che il colore avrebbe in altri stili.',
                    'items' => [
                        'Legno chiaro, come pino e rovere',
                        'Lana e maglia',
                        'Lino e cotone',
                        'Ceramica opaca',
                        'Fibre naturali',
                    ],
                ],
                'palette' => [
                    'text' => 'Il bianco e il grigio chiaro amplificano la luce. L\'azzurro e il legno portano morbidezza, e la grafite entra nei piccoli dettagli.',
                    'colors' => [
                        ['name' => 'Bianco', 'hex' => '#FAFAF7'],
                        ['name' => 'Grigio chiaro', 'hex' => '#DADDE0'],
                        ['name' => 'Azzurro', 'hex' => '#BFD3DF'],
                        ['name' => 'Legno chiaro', 'hex' => '#D9C4A1'],
                        ['name' => 'Grafite', 'hex' => '#3F4448'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Finestre libere', 'text' => 'Tende leggere e traslucide, o nessuna tenda, lasciano entrare la luce tutto il giorno.'],
                ['title' => 'Strati di tessuti', 'text' => 'Plaid, cuscini e tappeti di texture diverse portano l\'accoglienza che definisce lo stile.'],
                ['title' => 'Legno chiaro sul pavimento e nei mobili', 'text' => 'Scalda la base bianca senza scurire l\'ambiente.'],
                ['title' => 'Piante', 'text' => 'Il verde è la principale fonte di colore e di vita nell\'ambiente.'],
            ],
            'watch_outs' => [
                ['title' => 'Troppo bianco', 'text' => 'Senza legno e texture, l\'ambiente risulta spento e sembra incompiuto.'],
                ['title' => 'Clima brasiliano', 'text' => 'La lana e i tappeti a pelo lungo sono stati pensati per il freddo. Nelle regioni calde, lino e cotone svolgono lo stesso ruolo.'],
                ['title' => 'Superfici chiare', 'text' => 'Divani, tappeti e pareti chiari mostrano lo sporco facilmente. Tessuti lavabili e fodere sfoderabili aiutano.'],
            ],
        ],

        'bohemian' => [
            'name' => 'Boho',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Il boho è libero e personale. Mescola epoche, culture e fantasie, e ogni oggetto di solito ha una storia: un viaggio, un mercatino, un\'eredità.',
                    'items' => [
                        'Mix di fantasie e texture',
                        'Mobili vintage e trovati nei mercatini',
                        'Tante piante',
                        'Cuscini, tappeti e pouf a strati',
                        'Oggetti di viaggio e arte in vista',
                    ],
                ],
                'materials' => [
                    'text' => 'Prevalgono il fatto a mano e le fibre naturali. Niente deve abbinarsi alla perfezione.',
                    'items' => [
                        'Tessuti etnici e ricamati',
                        'Macramè e uncinetto',
                        'Rattan, vimini e paglia',
                        'Legno',
                        'Ceramica artigianale',
                    ],
                ],
                'palette' => [
                    'text' => 'Colori caldi e intensi su una base chiara. È la base neutra che permette di mescolare tanti colori senza stancare.',
                    'colors' => [
                        ['name' => 'Ecrù', 'hex' => '#EFE6D5'],
                        ['name' => 'Terracotta', 'hex' => '#C1693C'],
                        ['name' => 'Senape', 'hex' => '#D1A23A'],
                        ['name' => 'Verde smeraldo', 'hex' => '#2F6F5E'],
                        ['name' => 'Blu indaco', 'hex' => '#2E4374'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Base neutra', 'text' => 'Pareti e divano color ecrù lasciano emergere colori e fantasie senza che competano tra loro.'],
                ['title' => 'Un filo conduttore', 'text' => 'Ripetere due o tre colori in oggetti diversi dà unità al mix.'],
                ['title' => 'Piante a diverse altezze', 'text' => 'A terra, sulle mensole e sospese, riempiono l\'ambiente e collegano gli elementi.'],
                ['title' => 'Pezzi trovati nei mercatini', 'text' => 'Mobili d\'antiquariato, dei mercatini e dei viaggi danno l\'autenticità che lo stile richiede.'],
            ],
            'watch_outs' => [
                ['title' => 'Mix senza criterio', 'text' => 'Senza un filo conduttore di colore o di materiale, l\'ambiente sembra disordinato.'],
                ['title' => 'Pulizia e manutenzione', 'text' => 'Tanti oggetti, tessuti e piante accumulano polvere e richiedono più cura nel quotidiano.'],
                ['title' => 'Spazi piccoli', 'text' => 'Negli ambienti compatti, molti strati riducono la sensazione di spazio. Conviene concentrare il mix in un angolo o su una parete.'],
            ],
        ],

        'contemporary' => [
            'name' => 'Contemporaneo',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Il contemporaneo è lo stile del presente. Segue ciò che c\'è di attuale nel design e nella tecnologia e combina con equilibrio riferimenti moderni e classici.',
                    'items' => [
                        'Linee rette, con alcune curve morbide',
                        'Ambienti open space',
                        'Pochi pezzi, con uno protagonista',
                        'Illuminazione a incasso e progettata',
                        'Tecnologia e domotica discrete',
                    ],
                ],
                'materials' => [
                    'text' => 'Non esiste un materiale obbligatorio. Ciò che definisce lo stile è la combinazione equilibrata di finiture attuali.',
                    'items' => [
                        'Gres porcellanato di grande formato',
                        'Arredi su misura, laccati o impiallacciati in legno',
                        'Vetro',
                        'Metalli neri o spazzolati',
                        'Quarzo e altre superfici sintetiche',
                    ],
                ],
                'palette' => [
                    'text' => 'Base neutra, dal bianco al grigio piombo, con un punto di colore scelto. Qui l\'esempio è il blu petrolio, ma può essere qualsiasi tonalità usata con moderazione.',
                    'colors' => [
                        ['name' => 'Bianco ghiaccio', 'hex' => '#F2F2F0'],
                        ['name' => 'Greige', 'hex' => '#B8B0A5'],
                        ['name' => 'Grigio piombo', 'hex' => '#4A4E54'],
                        ['name' => 'Nero', 'hex' => '#1E1E1E'],
                        ['name' => 'Blu petrolio (punto di colore)', 'hex' => '#1F5F6B'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Base neutra con un punto di colore', 'text' => 'Una poltrona, un quadro o una parete colorata bastano per dare personalità.'],
                ['title' => 'Un pezzo protagonista', 'text' => 'Una lampada di design o un\'opera d\'arte danno identità a un ambiente dalle linee semplici.'],
                ['title' => 'Arredi su misura', 'text' => 'Pannelli e armadi su misura organizzano lo spazio e nascondono apparecchi e cavi.'],
                ['title' => 'Illuminazione a scenari', 'text' => 'Luce a incasso, indiretta e dimmerabile adatta l\'ambiente a ogni momento della giornata.'],
            ],
            'watch_outs' => [
                ['title' => 'Effetto showroom', 'text' => 'Troppo neutro e senza oggetti personali, l\'ambiente risulta impersonale.'],
                ['title' => 'Tendenze passeggere', 'text' => 'Seguendo ciò che è attuale, lo stile può passare di moda in fretta. Mantieni neutro ciò che costa caro cambiare e lascia la tendenza a ciò che è facile da sostituire.'],
                ['title' => 'Mix senza unità', 'text' => 'Con tanti materiali disponibili, è facile esagerare. Due o tre finiture principali sono sufficienti.'],
            ],
        ],

    ],

];
