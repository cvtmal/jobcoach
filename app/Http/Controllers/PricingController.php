<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

final class PricingController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('pricing', [
            'locale' => app()->getLocale(),
            'translations' => [
                'common' => __('common'),
                'pricing' => __('pricing'),
            ],
            'plans' => [
                [
                    'name' => 'JobRadar',
                    'price' => 'CHF 49',
                    'description' => 'For self-applicants who want access to exclusive job opportunities',
                    'features' => [
                        'Personal onboarding call (30 min)',
                        'Access to top job listings',
                        'Curated job suggestions',
                        'Web portal access',
                        'Email support',
                    ],
                    'emoji' => '🟩',
                    'popular' => false,
                ],
                [
                    'name' => 'ApplicationDocs',
                    'price' => 'CHF 89',
                    'description' => 'For applicants who need professionally written documents but apply themselves',
                    'features' => [
                        'Everything from JobRadar',
                        'CV creation or optimization',
                        'General-purpose cover letter',
                        'Monthly feedback',
                        'Document templates',
                    ],
                    'emoji' => '🟦',
                    'popular' => false,
                ],
                [
                    'name' => 'SmartApply',
                    'price' => 'CHF 169',
                    'description' => 'For busy applicants who want us to handle document creation and submission',
                    'features' => [
                        'Everything from ApplicationDocs',
                        'CV tailoring per application',
                        'Custom cover letters',
                        'Submission on your behalf',
                        'Application tracking dashboard',
                    ],
                    'emoji' => '🟧',
                    'popular' => true,
                ],
                [
                    'name' => 'ProActive',
                    'price' => 'CHF 249',
                    'description' => 'For applicants who want an actively managed job search with no stress',
                    'features' => [
                        'Everything from SmartApply',
                        'Active job search by our team',
                        'Unlimited applications',
                        'Monthly strategy call',
                        'Proactive follow-ups',
                    ],
                    'emoji' => '🟨',
                    'popular' => false,
                ],
                [
                    'name' => 'FullApply',
                    'price' => 'CHF 399',
                    'description' => 'Our all-inclusive premium service – we handle everything end-to-end',
                    'features' => [
                        'Everything from ProActive',
                        'Complete process ownership',
                        'Monthly interview training',
                        'Priority support (<24h)',
                        'Ongoing strategy optimization',
                    ],
                    'emoji' => '🟥',
                    'popular' => false,
                ],
            ],
            'addOns' => [
                [
                    'service' => 'Interview coaching (60 min, online)',
                    'price' => '120.–',
                ],
                [
                    'service' => 'Express application (within 24h)',
                    'price' => '59.– / application',
                ],
                [
                    'service' => 'CV review + feedback',
                    'price' => '49.–',
                ],
                [
                    'service' => 'LinkedIn/Xing profile optimization',
                    'price' => '89.–',
                ],
                [
                    'service' => 'Employment reference check & review',
                    'price' => '59.–',
                ],
                [
                    'service' => 'Personalized 1:1 coaching',
                    'price' => '120.– / hour',
                ],
            ],
        ]);
    }
}
