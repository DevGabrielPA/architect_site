<?php

// Réponse automatique envoyée à qui remplit le formulaire de contact (voir
// ContactAutoReplyMail). Traduction de l'original portugais de Larissa.
// :name = prénom de la personne.
return [
    'subject' => 'À propos de votre projet',

    'greeting_morning' => 'Bonjour :name, comment allez-vous ?',
    'greeting_afternoon' => 'Bonjour :name, comment allez-vous ?',
    'greeting_evening' => 'Bonsoir :name, comment allez-vous ?',

    'intro' => 'Merci beaucoup de nous avoir contactés ! J\'ai vu que vous nous avez déjà indiqué un budget estimé. Pour mieux comprendre ce que vous avez en tête et bien vous orienter dès maintenant, pourriez-vous m\'en dire un peu plus sur le projet ?',

    'points_intro' => 'Quelques points qui aident beaucoup :',
    'points' => [
        'Le type d\'espace (maison, appartement, bureau...) et sa surface approximative',
        'S\'il s\'agit d\'un projet à partir de zéro, d\'une rénovation ou seulement de la décoration/de l\'aménagement intérieur',
        'Si vous avez déjà un délai en tête pour commencer',
    ],

    'next_step' => 'Avec ces informations, je pourrai vous répondre pour que nous avancions sur le projet.',

    'quiz_pitch' => 'Enfin, j\'aimerais vous recommander une étape qui rend le projet beaucoup plus juste : notre Test de Style. En quelques minutes, il identifie votre style architectural, les couleurs, les matériaux et les formes qui vous ressemblent le plus, ainsi que ce qui ne vous correspond pas. Ainsi, nous alignons les attentes dès le départ et développons un projet fidèle à vos goûts, avec plus de précision et sans retouches. Le résultat peut aussi vous aider à voir plus clairement ce que vous souhaitez pour votre espace.',

    'quiz_link_intro' => 'Le test est facultatif et ne coûte que 3 $ US :',

    'sign_off' => 'Dans l\'attente de votre retour !',
];
