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
            'services' => array_map(function ($service) {
                return [
                    'title' => $service['title'],
                    'description' => $service['description'],
                    'image' => match ($service['icon']) {
                        '🔍' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80',
                        '💼' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80',
                        '🤝' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80',
                        default => '',
                    },
                    'icon' => $service['icon'],
                ];
            }, __('landing.services.items')),
            'pricing_preview' => __('landing.pricing.plans'),
        ]);
    }
}
