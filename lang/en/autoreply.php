<?php

// Automatic reply sent to whoever fills in the contact form (see
// ContactAutoReplyMail). Translated from Larissa's Portuguese original.
// :name = the person's first name.
return [
    'subject' => 'About your project',

    'greeting_morning' => 'Good morning, :name, how are you?',
    'greeting_afternoon' => 'Good afternoon, :name, how are you?',
    'greeting_evening' => 'Good evening, :name, how are you?',

    'intro' => 'I\'m so glad you got in touch! I see you\'ve already shared an estimated budget with us. To better understand what you have in mind and point you in the right direction, could you tell me a little more about the project?',

    'points_intro' => 'A few things that help a lot:',
    'points' => [
        'What kind of space it is (house, apartment, office...) and its approximate size',
        'Whether it\'s a project from scratch, a renovation or just the decoration/interiors',
        'Whether you already have a timeline in mind to get started',
    ],

    'next_step' => 'With this information, I can get back to you so we can move forward with the project.',

    'quiz_pitch' => 'Finally, I\'d like to recommend a step that makes the project much more on point: our Style Quiz. In just a few minutes, it identifies your architectural style, the colors, materials and shapes you relate to the most, and also what doesn\'t suit you. That way, we align expectations from the start and develop a project true to your taste, with more precision and no rework. The result can also help you see more clearly what you want for your space.',

    'quiz_link_intro' => 'The quiz is optional and costs just $3:',

    'sign_off' => 'Looking forward to hearing from you!',
];
