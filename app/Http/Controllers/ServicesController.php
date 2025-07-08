<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class ServicesController extends Controller
{
    public function index(): View
    {
        return view('services', [
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
        ]);
    }
}
