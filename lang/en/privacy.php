<?php

// Privacy Policy (resources/views/privacy.blade.php) and the short notices
// that link to it on the contact form and the quiz checkout.
// Translated from the Portuguese original (lang/pt/privacy.php).
// :email = contact channel for privacy matters (config mail.contact_to).
// Each section: 'title', 'paragraphs' and, optionally, 'items' (list) and 'closing'.
return [
    'meta_title' => 'Privacy Policy | Larissa Vasconcellos Architecture',
    'meta_description' => 'How Larissa Vasconcellos Architecture collects, uses and protects your personal data, and how to exercise your rights.',
    'heading' => 'Privacy Policy',
    'updated' => 'Last updated: October 17, 2026',
    'intro' => 'This policy explains what personal data we collect when you use this website, what we use it for, who we share it with and how you can exercise your rights, in accordance with Brazil\'s General Data Protection Law (LGPD, Law No. 13,709/2018) and, where applicable, the European Union\'s General Data Protection Regulation (GDPR).',

    'sections' => [
        [
            'title' => '1. Who is responsible for your data',
            'paragraphs' => [
                'The data controller is Larissa Vasconcellos Arquitetura, based in Belo Horizonte, MG, Brazil. For any privacy matter, write to :email.',
            ],
        ],
        [
            'title' => '2. What data we collect',
            'paragraphs' => [],
            'items' => [
                'Contact form: first name, last name, email, phone number (with country code), country and estimated project budget. We also receive your browser\'s time zone, used only to choose between "good morning", "good afternoon" or "good evening" in the automatic reply.',
                'Architectural Style Quiz: we do not ask for your name or email to take the quiz. Your answers are not stored on our server: they stay only in your browser (cleared when you close the tab) and in an encrypted link that only you have.',
                'Purchase of the Full Style Report: payment is processed by Stripe and we never receive your card details. Stripe only tells us that the payment was confirmed and the email entered at checkout, which we use to send you the link to your report.',
                'Technical data: when you visit the site, your IP address and browser information are processed temporarily for security (rate limiting and spam blocking) and to log errors. In these logs, email addresses are masked (for example, "pe***@gmail.com").',
            ],
        ],
        [
            'title' => '3. What we use your data for and on what legal basis',
            'paragraphs' => [],
            'items' => [
                'Replying to your enquiry, sending the automatic reply and preparing a project proposal: steps prior to entering into a contract, at your request (LGPD art. 7, V; GDPR art. 6(1)(b)).',
                'Processing the payment and delivering the purchased report: performance of a contract (LGPD art. 7, V; GDPR art. 6(1)(b)).',
                'Protecting the site against abuse, spam and fraud and fixing errors: legitimate interest (LGPD art. 7, IX; GDPR art. 6(1)(f)).',
                'Complying with legal and tax obligations related to payments: legal obligation (LGPD art. 7, II; GDPR art. 6(1)(c)).',
            ],
            'closing' => 'We do not use your data for advertising, we do not build behavioural profiles and we do not sell personal data.',
        ],
        [
            'title' => '4. Who we share it with',
            'paragraphs' => [
                'We only share data with the service providers needed to run the site, who process it on our behalf:',
            ],
            'items' => [
                'Resend: sending the site\'s emails (contact message, automatic reply and report link).',
                'Google (Gmail): the inbox where we receive contact messages.',
                'Stripe: payment processing.',
                'Render: website hosting.',
                'Google Fonts and Cloudflare (cdnjs): provide the site\'s fonts and icons and receive your IP address when the page loads.',
                'YouTube: videos embedded on some project pages, loaded in privacy-enhanced mode.',
            ],
            'closing' => 'We may also share data when required by law or by order of a competent authority.',
        ],
        [
            'title' => '5. International transfers',
            'paragraphs' => [
                'Some of these providers store data outside Brazil, mainly in the United States. These transfers follow article 33 of the LGPD and rely on the contractual and security safeguards offered by each provider.',
            ],
        ],
        [
            'title' => '6. Cookies and browser storage',
            'paragraphs' => [
                'We only use strictly necessary cookies: an encrypted session cookie and a cookie that protects forms against forged submissions (CSRF). The Style Quiz uses tab storage (sessionStorage) so you don\'t lose your progress if the page reloads. We do not use analytics, advertising or tracking cookies.',
            ],
        ],
        [
            'title' => '7. How long we keep it',
            'paragraphs' => [],
            'items' => [
                'Contact messages: for as long as needed to assist you and for any resulting project relationship, or until you ask us to delete them.',
                'Payment data: kept by Stripe for the period required by legal and tax obligations.',
                'Technical and security data: for short periods (abuse controls expire within 24 hours and error logs are discarded periodically).',
            ],
        ],
        [
            'title' => '8. Your rights',
            'paragraphs' => [
                'You may, at any time and free of charge, request:',
            ],
            'items' => [
                'confirmation that we process your data and access to it;',
                'correction of incomplete, inaccurate or outdated data;',
                'anonymisation, blocking or deletion of unnecessary data or data processed unlawfully;',
                'portability of your data to another provider;',
                'information about who we share your data with;',
                'deletion of your data and withdrawal of consent, where processing is based on it;',
                'objection to processing you consider unlawful.',
            ],
            'closing' => 'To exercise these rights, write to :email. We will reply within 15 days. You may also lodge a complaint with Brazil\'s National Data Protection Authority (ANPD) or, if you are in the European Union, with the data protection authority of your country.',
        ],
        [
            'title' => '9. Security',
            'paragraphs' => [
                'The site uses an encrypted connection (HTTPS), does not keep a customer database and protects Style Quiz links with encryption. No system is completely immune to failures, but we adopt reasonable technical and organisational measures to protect your data.',
            ],
        ],
        [
            'title' => '10. Minors',
            'paragraphs' => [
                'This website is not directed at anyone under 18 and we do not knowingly collect data from children or teenagers.',
            ],
        ],
        [
            'title' => '11. Changes to this policy',
            'paragraphs' => [
                'We may update this policy to reflect changes to the site or to the law. The date of the last update appears at the top of this page.',
            ],
        ],
    ],

    // Short notices with a link (:link = "Privacy Policy" already wrapped in <a>).
    'link_text' => 'Privacy Policy',
    'footer_link' => 'Privacy Policy',
    'contact_notice' => 'By submitting, you agree that your data will be used to reply to your enquiry, as described in our :link.',
    'checkout_notice' => 'Payment is securely processed by Stripe; we never receive your card details. Learn more in our :link.',
];
