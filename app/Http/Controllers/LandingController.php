<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class LandingController extends Controller
{
    public function index(): View
    {
        return view('landing', [
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
                    'details' => [
                        'Access to premium job boards and databases',
                        'Exclusive opportunities not posted publicly',
                        'Professional recruiting tool access',
                        'Hidden job market insights',
                        'Real-time job alerts and notifications',
                    ],
                    'price' => 'From CHF 49',
                ],
                [
                    'title' => 'Professional Documents',
                    'description' => 'Expertly crafted CVs and cover letters tailored to each application by our specialists.',
                    'image' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80',
                    'icon' => '💼',
                    'details' => [
                        'Swiss-format CV creation and optimization',
                        'Customized cover letters for each application',
                        'Professional document templates',
                        'ATS-optimized formatting',
                        'Ongoing document refinement',
                    ],
                    'price' => 'From CHF 89',
                ],
                [
                    'title' => 'Complete Application Management',
                    'description' => 'We handle all administrative work in your name while remaining completely invisible to employers.',
                    'image' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80',
                    'icon' => '🤝',
                    'details' => [
                        'Complete application submission process',
                        'Follow-up communication with employers',
                        'Interview scheduling coordination',
                        'Application tracking and reporting',
                        'Discreet service - invisible to employers',
                    ],
                    'price' => 'From CHF 169',
                ],
                [
                    'title' => 'Active Job Search',
                    'description' => 'Our team actively searches for opportunities on your behalf using advanced tools and networks.',
                    'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80',
                    'icon' => '🎯',
                    'details' => [
                        'Proactive job hunting by our team',
                        'Network-based opportunity discovery',
                        'Market research and analysis',
                        'Strategic approach to job targeting',
                        'Unlimited application submissions',
                    ],
                    'price' => 'From CHF 249',
                ],
                [
                    'title' => 'Full-Service Support',
                    'description' => 'Our premium end-to-end service includes everything from job search to interview preparation.',
                    'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80',
                    'icon' => '👑',
                    'details' => [
                        'Complete process ownership',
                        'Monthly interview training sessions',
                        'Priority support (<24h response)',
                        'Ongoing strategy optimization',
                        'Dedicated account management',
                    ],
                    'price' => 'CHF 399',
                ],
            ],
            'pricing_preview' => __('landing.pricing.plans'),
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
