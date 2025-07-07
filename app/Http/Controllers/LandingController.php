<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

final class LandingController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('landing', [
            'stats' => [
                'plans' => '5',
                'monthly_price' => 'CHF 49-399',
                'success_rate' => '100%',
            ],
            'services' => [
                [
                    'title' => 'Premium Job Access',
                    'description' => 'Access exclusive job opportunities through professional recruiting tools unavailable to individuals.',
                    'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80',
                    'icon' => '🔍',
                ],
                [
                    'title' => 'Professional Documents',
                    'description' => 'Expertly crafted CVs and cover letters tailored to each application by our specialists.',
                    'image' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80',
                    'icon' => '💼',
                ],
                [
                    'title' => 'Discreet Management',
                    'description' => 'We handle all administrative work in your name while remaining completely invisible to employers.',
                    'image' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80',
                    'icon' => '🤝',
                ],
            ],
            'pricing_preview' => [
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
        ]);
    }
}
