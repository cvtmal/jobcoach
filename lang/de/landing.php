<?php

declare(strict_types=1);

return [
    'hero' => [
        'title' => 'Wir übernehmen die Verwaltung, Sie konzentrieren sich auf die Vorstellungsgespräche.',
        'subtitle' => 'Professionelle Jobsuche-Unterstützung in der Schweiz. Wir verwalten Bewerbungen, erstellen Dokumente und finden Gelegenheiten — komplett unsichtbar für Arbeitgeber.',
        'switzerland_service' => '🇨🇭 Schweizer Jobsuche-Support-Service',
        'discreet_badge' => '100% Diskreter Service',
        'pricing_info' => 'Ab CHF 49/Monat • 100% diskret • Jederzeit kündbar',
    ],

    'about' => [
        'section_title' => '[Wie wir arbeiten]',
        'description' => 'Wir sind <strong>keine</strong> Personalvermittlung. Wir übernehmen die administrative Last Ihrer Jobsuche in der Schweiz — vom Finden von Gelegenheiten bis zur Erstellung von Bewerbungen — während wir für Arbeitgeber völlig unsichtbar bleiben.',
        'features' => [
            '100% diskreter Service',
            'Professionelle Recruiting-Tools',
            'Persönlicher Berater',
        ],
    ],

    'services' => [
        'section_title' => 'Was uns unterscheidet',
        'title' => 'Premium-Tools trifft auf menschliche Expertise',
        'subtitle' => 'Wir kombinieren Premium-Recruiting-Technologie mit menschlicher Expertise, um Ihnen einen unfairen Vorteil auf dem Schweizer Arbeitsmarkt zu verschaffen.',
        'items' => [
            [
                'title' => 'Premium Job Zugang',
                'description' => 'Zugang zu exklusiven Stellenangeboten durch professionelle Recruiting-Tools, die Einzelpersonen nicht zur Verfügung stehen.',
                'icon' => '🔍',
            ],
            [
                'title' => 'Professionelle Dokumente',
                'description' => 'Fachmännisch erstellte Lebensläufe und Anschreiben, die von unseren Spezialisten für jede Bewerbung maßgeschneidert werden.',
                'icon' => '💼',
            ],
            [
                'title' => 'Diskrete Verwaltung',
                'description' => 'Wir übernehmen alle administrativen Arbeiten in Ihrem Namen und bleiben dabei völlig unsichtbar für Arbeitgeber.',
                'icon' => '🤝',
            ],
        ],
    ],

    'pricing' => [
        'section_title' => 'Preise',
        'title' => 'Wählen Sie Ihren Plan',
        'subtitle' => 'Transparente Preise ohne versteckte Gebühren. Jederzeit kündbar.',
        'plans' => [
            [
                'name' => 'JobRadar',
                'price' => 'CHF 49',
                'description' => 'Für Selbstbewerber, die Zugang zu exklusiven Stellenangeboten wollen',
                'features' => ['Persönliches Onboarding-Gespräch (30 Min)', 'Zugang zu Top-Stellenanzeigen', 'Kuratierte Stellenvorschläge', 'Web-Portal-Zugang'],
                'emoji' => '🟩',
                'popular' => false,
            ],
            [
                'name' => 'ApplicationDocs',
                'price' => 'CHF 89',
                'description' => 'Für Bewerber, die professionell geschriebene Dokumente benötigen, aber selbst bewerben',
                'features' => ['Alles aus JobRadar', 'CV-Erstellung oder -Optimierung', 'Allgemeines Anschreiben', 'Monatliches Feedback'],
                'emoji' => '🟦',
                'popular' => false,
            ],
            [
                'name' => 'SmartApply',
                'price' => 'CHF 169',
                'description' => 'Für beschäftigte Bewerber, die uns die Dokumentenerstellung und -einreichung überlassen wollen',
                'features' => ['Alles aus ApplicationDocs', 'CV-Anpassung pro Bewerbung', 'Individuelle Anschreiben', 'Einreichung in Ihrem Namen'],
                'emoji' => '🟧',
                'popular' => true,
            ],
            [
                'name' => 'ProActive',
                'price' => 'CHF 249',
                'description' => 'Für Bewerber, die eine aktiv verwaltete Jobsuche ohne Stress wollen',
                'features' => ['Alles aus SmartApply', 'Aktive Jobsuche durch unser Team', 'Unbegrenzte Bewerbungen', 'Monatliches Strategiegespräch'],
                'emoji' => '🟨',
                'popular' => false,
            ],
            [
                'name' => 'FullApply',
                'price' => 'CHF 399',
                'description' => 'Unser all-inclusive Premium-Service – wir übernehmen alles von A bis Z',
                'features' => ['Alles aus ProActive', 'Vollständige Prozessverantwortung', 'Monatliches Vorstellungstraining', 'Prioritätssupport (<24h)'],
                'emoji' => '🟥',
                'popular' => false,
            ],
        ],
    ],

    'cta' => [
        'title' => 'Bereit, Ihren Traumjob in der Schweiz zu finden?',
        'subtitle' => 'Schließen Sie sich Hunderten von Fachkräften an, die uns ihre Jobsuche anvertrauen. Beginnen Sie mit einem kostenlosen Beratungsgespräch.',
        'footer_text' => '🇨🇭 Spezialisiert auf den Schweizer Arbeitsmarkt • Keine Verpflichtung erforderlich',
    ],
];
