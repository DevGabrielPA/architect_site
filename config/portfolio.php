<?php

// Dados exibidos nas páginas do dropdown "Portfolio" (Completed Projects, Technical & AutoCAD
// Concepts e Design Insights) e na prévia da home. Imagens ficam em public/images/{pasta}/;
// enquanto o arquivo não existir, o grid mostra automaticamente um placeholder "Image Coming Soon".
return [

    'completed_projects' => [
        ['title' => 'Bayfront Venetian Islands', 'slug' => 'bayfront-venetian-islands', 'image' => 'bayfront-venetian-islands.jpg', 'ratio' => '4 / 3'],
        ['title' => 'New Build Ponce Davis, Miami', 'slug' => 'new-build-ponce-davis', 'image' => 'new-build-ponce-davis.jpg', 'ratio' => '3 / 4'],
        ['title' => 'Oceanfront Armani Casa', 'slug' => 'oceanfront-armani-casa', 'image' => 'oceanfront-armani-casa.jpg', 'ratio' => '4 / 3'],
        ['title' => 'Prive Penthouse Aventura', 'slug' => 'prive-penthouse-aventura', 'image' => 'prive-penthouse-aventura.jpg', 'ratio' => '3 / 4'],
        ['title' => 'Full Remodeling Fisher Island Oceanfront', 'slug' => 'full-remodeling-fisher-island-oceanfront', 'image' => 'full-remodeling-fisher-island-oceanfront.jpg', 'ratio' => '4 / 3'],
        ['title' => 'Waterfront Fort Lauderdale', 'slug' => 'waterfront-fort-lauderdale', 'image' => 'waterfront-fort-lauderdale.jpg', 'ratio' => '4 / 3'],
    ],

    // TODO: títulos e imagens abaixo são placeholders — substituir pelo conteúdo técnico real.
    'technical_concepts' => [
        ['title' => 'Floor Plan Layout Studies', 'slug' => 'floor-plan-layout-studies', 'image' => 'floor-plan-layout-studies.jpg', 'ratio' => '4 / 3'],
        ['title' => 'Structural Detailing', 'slug' => 'structural-detailing', 'image' => 'structural-detailing.jpg', 'ratio' => '3 / 4'],
        ['title' => 'Millwork & Joinery Drawings', 'slug' => 'millwork-joinery-drawings', 'image' => 'millwork-joinery-drawings.jpg', 'ratio' => '4 / 3'],
        ['title' => 'Lighting & Electrical Plans', 'slug' => 'lighting-electrical-plans', 'image' => 'lighting-electrical-plans.jpg', 'ratio' => '3 / 4'],
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
        ['title' => 'Vínculo Lamp', 'slug' => 'vinculo-lamp', 'image' => 'vinculo.png', 'ratio' => '4 / 5'],
        ['title' => 'Brisa Side Table', 'slug' => 'brisa-side-table', 'image' => 'brisa.png', 'ratio' => '3 / 2'],
        ['title' => 'Custom Lounge Chair Concept', 'slug' => 'custom-lounge-chair-concept', 'image' => 'custom-lounge-chair-concept.jpg', 'ratio' => '3 / 4'],
        ['title' => 'Sculptural Coffee Table', 'slug' => 'sculptural-coffee-table', 'image' => 'sculptural-coffee-table.jpg', 'ratio' => '4 / 3'],
        ['title' => 'Handcrafted Lighting Fixture', 'slug' => 'handcrafted-lighting-fixture', 'image' => 'handcrafted-lighting-fixture.jpg', 'ratio' => '3 / 4'],
        ['title' => 'Bespoke Console Cabinet', 'slug' => 'bespoke-console-cabinet', 'image' => 'bespoke-console-cabinet.jpg', 'ratio' => '4 / 3'],
    ],

];
