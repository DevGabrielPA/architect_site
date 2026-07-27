<?php

// Dados exibidos nas páginas do dropdown "Portfolio" (Completed Projects e Design Insights)
// e na prévia da home. Imagens ficam em public/images/{pasta}/;
// enquanto o arquivo não existir, o grid mostra automaticamente um placeholder "Image Coming Soon".
return [

    'completed_projects' => [
        ['title' => 'Casa Branca', 'slug' => 'casa-branca', 'image' => 'casa-branca.png', 'ratio' => '3 / 2'],
        ['title' => 'Cozinha', 'slug' => 'cozinha', 'image' => 'cozinha.jpg', 'ratio' => '3 / 2'],
        ['title' => 'Cozinha Adriana', 'slug' => 'cozinha-adriana', 'image' => 'cozinha-adriana.png', 'ratio' => '16 / 9'],
        ['title' => 'Quarto Alice', 'slug' => 'quarto-alice', 'image' => 'quarto-alice.png', 'ratio' => '1 / 1'],
        ['title' => 'Quarto Eva', 'slug' => 'quarto-eva', 'image' => 'quarto-eva.png', 'ratio' => '16 / 9'],
        ['title' => 'Quarto Pê e Lu', 'slug' => 'quarto-pe-e-lu', 'image' => 'quarto-pe-e-lu.png', 'ratio' => '16 / 9'],
        ['title' => 'Quarto Betina', 'slug' => 'quarto-betina', 'image' => 'quarto-betina.png', 'ratio' => '3 / 2'],
        ['title' => 'Sala', 'slug' => 'sala', 'image' => 'sala.png', 'ratio' => '3 / 4'],
        ['title' => 'Suíte Master', 'slug' => 'suite-master', 'image' => 'suite-master.png', 'ratio' => '7 / 5'],
    ],

    // TODO: títulos e imagens abaixo são placeholders — substituir pelas peças reais do portfólio de design.
    'design_insights' => [
        [
            'title' => 'Saturnos Chandelier',
            'slug' => 'lustre-saturnos',
            'image' => 'saturnos.png',
            'ratio' => '1 / 1',
            'video' => 'yReftZmOR2k',
            'quote' => 'Known as a "gas giant" — it stands out for the beauty of its ring system.',
            'description' => [
                'The Saturnos Chandelier is another original creation by the architect, composed of a sculptural metal plate that lifts three softly frosted glass globes into the air.',
                'A sophisticated fixture designed to fit seamlessly into the modern atmosphere our clients had long envisioned for their home.',
            ],
            'images' => [
                'saturnos/saturnos1.jpg',
                'saturnos/saturnos2.jpg',
                'saturnos/saturnos3.jpg',
                'saturnos/saturnos4.jpg',
                'saturnos/saturnos5.jpg',
                'saturnos/saturnos6.jpg',
                'saturnos/saturnos7.jpg',
                'saturnos/saturnos8.jpg',
            ],
        ],
        [
            'title' => 'Vínculo Lamp',
            'slug' => 'vinculo-lamp',
            'image' => 'vinculo.png',
            'ratio' => '4 / 5',
            'video' => 'hJlfz7mNlCc',
            'description' => [
                'The Vínculo lamp collection is the embodiment of this very union, where the light in one\'s eyes illuminates and completes the other\'s.',
                'The stone base is available in Branco Espírito Santo marble or Preto Via Láctea granite, with triangular accents in Louro Freijó or Imbuia MDF. The brushed aluminum stem comes in aluminum, champagne, copper, gold, or onyx finishes.',
            ],
            'images' => [
                'vinculo/vinculo12.jpg',
                'vinculo/vinculo11.jpg',
                'vinculo/vinculo10.jpg',
                'vinculo/vinculo9.jpg',
                'vinculo/vinculo8.jpg',
                'vinculo/vinculo7.jpg',
                'vinculo/vinculo6.jpg',
                'vinculo/vinculo5.jpg',
                'vinculo/vinculo4.jpg',
                'vinculo/vinculo3.jpg',
                'vinculo/vinculo2.jpg',
                'vinculo/vinculo1.jpg',
            ],
        ],
        [
            'title' => 'Brisa Side Table',
            'slug' => 'brisa-side-table',
            'image' => 'brisa.png',
            'ratio' => '3 / 2',
            'images' => [
                'brisa/brisa1.jpg',
                'brisa/brisa2.jpg',
                'brisa/brisa3.jpg',
                'brisa/brisa4.jpg',
                'brisa/brisa5.jpg',
                'brisa/brisa6.jpg',
            ],
        ],
        ['title' => 'Custom Lounge Chair Concept', 'slug' => 'custom-lounge-chair-concept', 'image' => 'custom-lounge-chair-concept.jpg', 'ratio' => '3 / 4'],
        ['title' => 'Sculptural Coffee Table', 'slug' => 'sculptural-coffee-table', 'image' => 'sculptural-coffee-table.jpg', 'ratio' => '4 / 3'],
        ['title' => 'Handcrafted Lighting Fixture', 'slug' => 'handcrafted-lighting-fixture', 'image' => 'handcrafted-lighting-fixture.jpg', 'ratio' => '3 / 4'],
        ['title' => 'Bespoke Console Cabinet', 'slug' => 'bespoke-console-cabinet', 'image' => 'bespoke-console-cabinet.jpg', 'ratio' => '4 / 3'],
    ],

];
