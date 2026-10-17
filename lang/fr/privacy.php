<?php

// Politique de confidentialité (resources/views/privacy.blade.php) et les
// courts avis qui y renvoient sur le formulaire de contact et le paiement du quiz.
// Traduit de l'original portugais (lang/pt/privacy.php).
// :email = canal de contact pour la confidentialité (config mail.contact_to).
return [
    'meta_title' => 'Politique de confidentialité | Larissa Vasconcellos Architecture',
    'meta_description' => 'Comment Larissa Vasconcellos Architecture collecte, utilise et protège vos données personnelles, et comment exercer vos droits.',
    'heading' => 'Politique de confidentialité',
    'updated' => 'Dernière mise à jour : 17 octobre 2026',
    'intro' => 'Cette politique explique quelles données personnelles nous collectons lorsque vous utilisez ce site, à quelles fins, avec qui nous les partageons et comment exercer vos droits, conformément à la loi générale brésilienne sur la protection des données (LGPD, loi nº 13.709/2018) et, le cas échéant, au Règlement général sur la protection des données de l\'Union européenne (RGPD).',

    'sections' => [
        [
            'title' => '1. Responsable du traitement',
            'paragraphs' => [
                'Le responsable du traitement est Larissa Vasconcellos Arquitetura, établie à Belo Horizonte, MG, Brésil. Pour toute question relative à la confidentialité, écrivez à :email.',
            ],
        ],
        [
            'title' => '2. Données collectées',
            'paragraphs' => [],
            'items' => [
                'Formulaire de contact : prénom, nom, e-mail, téléphone (avec indicatif du pays), pays et budget estimé du projet. Nous recevons aussi le fuseau horaire de votre navigateur, utilisé uniquement pour choisir entre « bonjour » et « bonsoir » dans la réponse automatique.',
                'Test de style architectural : nous ne demandons ni nom ni e-mail pour faire le test. Vos réponses ne sont pas conservées sur notre serveur : elles restent uniquement dans votre navigateur (effacées à la fermeture de l\'onglet) et dans un lien chiffré que vous seul possédez.',
                'Achat du Rapport de style complet : le paiement est traité par Stripe et nous ne recevons jamais les données de votre carte. Stripe nous communique uniquement la confirmation du paiement et l\'e-mail saisi lors du paiement, que nous utilisons pour vous envoyer le lien de votre rapport.',
                'Données techniques : lors de votre visite, votre adresse IP et les informations de votre navigateur sont traitées temporairement pour la sécurité (limitation des tentatives et blocage du spam) et pour enregistrer les erreurs. Dans ces journaux, les e-mails apparaissent masqués (par exemple « pe***@gmail.com »).',
            ],
        ],
        [
            'title' => '3. Finalités et bases légales',
            'paragraphs' => [],
            'items' => [
                'Répondre à votre demande, envoyer la réponse automatique et préparer une proposition de projet : mesures précontractuelles prises à votre demande (art. 7, V, LGPD ; art. 6(1)(b) RGPD).',
                'Traiter le paiement et livrer le rapport acheté : exécution d\'un contrat (art. 7, V, LGPD ; art. 6(1)(b) RGPD).',
                'Protéger le site contre les abus, le spam et la fraude et corriger les erreurs : intérêt légitime (art. 7, IX, LGPD ; art. 6(1)(f) RGPD).',
                'Respecter les obligations légales et fiscales liées aux paiements : obligation légale (art. 7, II, LGPD ; art. 6(1)(c) RGPD).',
            ],
            'closing' => 'Nous n\'utilisons pas vos données à des fins publicitaires, ne créons pas de profils comportementaux et ne vendons pas de données personnelles.',
        ],
        [
            'title' => '4. Destinataires des données',
            'paragraphs' => [
                'Nous partageons les données uniquement avec les prestataires nécessaires au fonctionnement du site, qui les traitent pour notre compte :',
            ],
            'items' => [
                'Resend : envoi des e-mails du site (message de contact, réponse automatique et lien du rapport).',
                'Google (Gmail) : boîte de réception où nous recevons les messages de contact.',
                'Stripe : traitement des paiements.',
                'Render : hébergement du site.',
                'Google Fonts et Cloudflare (cdnjs) : fournissent les polices et les icônes du site et reçoivent votre adresse IP lors du chargement de la page.',
                'YouTube : vidéos intégrées sur certaines pages de projet, chargées en mode de confidentialité renforcée.',
            ],
            'closing' => 'Nous pouvons également partager des données lorsque la loi ou une autorité compétente l\'exige.',
        ],
        [
            'title' => '5. Transferts internationaux',
            'paragraphs' => [
                'Certains de ces prestataires stockent des données hors du Brésil, principalement aux États-Unis. Ces transferts respectent l\'article 33 de la LGPD et reposent sur les garanties contractuelles et de sécurité offertes par chaque prestataire.',
            ],
        ],
        [
            'title' => '6. Cookies et stockage dans le navigateur',
            'paragraphs' => [
                'Nous utilisons uniquement des cookies strictement nécessaires : un cookie de session chiffré et un cookie de protection des formulaires contre les envois falsifiés (CSRF). Le Test de style utilise le stockage de l\'onglet (sessionStorage) pour ne pas perdre votre progression si la page est rechargée. Nous n\'utilisons aucun cookie d\'analyse, de publicité ou de suivi.',
            ],
        ],
        [
            'title' => '7. Durée de conservation',
            'paragraphs' => [],
            'items' => [
                'Messages de contact : aussi longtemps que nécessaire pour vous répondre et pour une éventuelle relation de projet, ou jusqu\'à ce que vous en demandiez la suppression.',
                'Données de paiement : conservées par Stripe pendant la durée imposée par les obligations légales et fiscales.',
                'Données techniques et de sécurité : pendant de courtes périodes (les contrôles anti-abus expirent sous 24 heures et les journaux d\'erreurs sont supprimés périodiquement).',
            ],
        ],
        [
            'title' => '8. Vos droits',
            'paragraphs' => [
                'Vous pouvez, à tout moment et gratuitement, demander :',
            ],
            'items' => [
                'la confirmation que nous traitons vos données et l\'accès à celles-ci ;',
                'la rectification de données incomplètes, inexactes ou obsolètes ;',
                'l\'anonymisation, le blocage ou la suppression de données inutiles ou traitées de manière illicite ;',
                'la portabilité de vos données vers un autre prestataire ;',
                'des informations sur les destinataires de vos données ;',
                'la suppression de vos données et le retrait de votre consentement, lorsque le traitement repose sur celui-ci ;',
                'l\'opposition à un traitement que vous estimez irrégulier.',
            ],
            'closing' => 'Pour exercer ces droits, écrivez à :email. Nous répondrons sous 15 jours. Vous pouvez également introduire une réclamation auprès de l\'Autorité nationale brésilienne de protection des données (ANPD) ou, si vous résidez dans l\'Union européenne, auprès de l\'autorité de protection des données de votre pays (en France, la CNIL).',
        ],
        [
            'title' => '9. Sécurité',
            'paragraphs' => [
                'Le site utilise une connexion chiffrée (HTTPS), ne conserve pas de base de données clients et protège les liens du Test de style par chiffrement. Aucun système n\'est totalement à l\'abri des défaillances, mais nous adoptons des mesures techniques et organisationnelles raisonnables pour protéger vos données.',
            ],
        ],
        [
            'title' => '10. Mineurs',
            'paragraphs' => [
                'Ce site ne s\'adresse pas aux personnes de moins de 18 ans et nous ne collectons pas sciemment de données d\'enfants ou d\'adolescents.',
            ],
        ],
        [
            'title' => '11. Modifications de cette politique',
            'paragraphs' => [
                'Nous pouvons mettre à jour cette politique pour refléter des changements du site ou de la législation. La date de la dernière mise à jour figure en haut de cette page.',
            ],
        ],
    ],

    'link_text' => 'Politique de confidentialité',
    'footer_link' => 'Politique de confidentialité',
    'contact_notice' => 'En envoyant ce formulaire, vous acceptez que vos données soient utilisées pour répondre à votre demande, conformément à notre :link.',
    'checkout_notice' => 'Le paiement est traité de manière sécurisée par Stripe ; nous ne recevons jamais les données de votre carte. En savoir plus dans notre :link.',
];
