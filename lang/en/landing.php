<?php

declare(strict_types=1);

return [
    'hero' => [
        'title' => 'We handle the admin, you focus on the interviews.',
        'subtitle' => 'Professional job search support in Switzerland. We manage applications, craft documents, and find opportunities — all while staying completely invisible to employers.',
        'switzerland_service' => '🇨🇭 Switzerland\'s Job Search Support Service',
        'discreet_badge' => '100% Discreet Service',
        'pricing_info' => 'Starting from CHF 49/month • 100% discreet • Cancel anytime',
    ],

    'about' => [
        'section_title' => '[How we work]',
        'description' => 'We are <strong>not</strong> a recruitment agency. We handle the administrative burden of your job search in Switzerland — from finding opportunities to crafting applications — while remaining completely invisible to employers.',
        'features' => [
            '100% discreet service',
            'Professional recruiting tools',
            'Dedicated personal consultant',
        ],
    ],

    'services' => [
        'section_title' => 'What makes us different',
        'title' => 'Premium tools meets human expertise',
        'subtitle' => 'We combine premium recruiting technology with human expertise to give you an unfair advantage in the Swiss job market.',
        'items' => [
            [
                'title' => 'Premium Job Access',
                'description' => 'Access exclusive job opportunities through professional recruiting tools unavailable to individuals.',
                'icon' => '🔍',
            ],
            [
                'title' => 'Professional Documents',
                'description' => 'Expertly crafted CVs and cover letters tailored to each application by our specialists.',
                'icon' => '💼',
            ],
            [
                'title' => 'Discreet Management',
                'description' => 'We handle all administrative work in your name while remaining completely invisible to employers.',
                'icon' => '🤝',
            ],
        ],
    ],

    'pricing' => [
        'section_title' => 'Pricing',
        'title' => 'Choose your plan',
        'subtitle' => 'Transparent pricing with no hidden fees. Cancel anytime.',
        'plans' => [
            [
                'name' => 'JobRadar',
                'price' => 'CHF 49',
                'description' => 'For self-applicants who want access to exclusive job opportunities',
                'features' => ['Personal onboarding call (30 min)', 'Access to top job listings', 'Curated job suggestions', 'Web portal access'],
                'emoji' => '🟩',
                'popular' => false,
            ],
            [
                'name' => 'ApplicationDocs',
                'price' => 'CHF 89',
                'description' => 'For applicants who need professionally written documents but apply themselves',
                'features' => ['Everything from JobRadar', 'CV creation or optimization', 'General-purpose cover letter', 'Monthly feedback'],
                'emoji' => '🟦',
                'popular' => false,
            ],
            [
                'name' => 'SmartApply',
                'price' => 'CHF 169',
                'description' => 'For busy applicants who want us to handle document creation and submission',
                'features' => ['Everything from ApplicationDocs', 'CV tailoring per application', 'Custom cover letters', 'Submission on your behalf'],
                'emoji' => '🟧',
                'popular' => true,
            ],
            [
                'name' => 'ProActive',
                'price' => 'CHF 249',
                'description' => 'For applicants who want an actively managed job search with no stress',
                'features' => ['Everything from SmartApply', 'Active job search by our team', 'Unlimited applications', 'Monthly strategy call'],
                'emoji' => '🟨',
                'popular' => false,
            ],
            [
                'name' => 'FullApply',
                'price' => 'CHF 399',
                'description' => 'Our all-inclusive premium service – we handle everything end-to-end',
                'features' => ['Everything from ProActive', 'Complete process ownership', 'Monthly interview training', 'Priority support (<24h)'],
                'emoji' => '🟥',
                'popular' => false,
            ],
        ],
    ],

    'cta' => [
        'title' => 'Ready to land your dream job in Switzerland?',
        'subtitle' => 'Join hundreds of professionals who trust us with their job search. Get started with a free consultation call.',
        'footer_text' => '🇨🇭 Specialized in the Swiss job market • No commitment required',
    ],
];
