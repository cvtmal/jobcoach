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
                'locations' => '25+',
                'testimonials' => '50+',
                'success_rate' => '100%',
            ],
            'services' => [
                [
                    'title' => 'Expeditions + Retreats',
                    'description' => 'Breathtaking experiences across the globe to challenge your perspectives.',
                    'image' => 'https://images.unsplash.com/photo-1464822759844-d150baec66b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80',
                ],
                [
                    'title' => 'Elevation Reset Retreat',
                    'description' => 'Evolve at the most beautiful destinations to reset your purpose.',
                    'image' => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80',
                ],
                [
                    'title' => 'Whistler Back Country',
                    'description' => 'Visit some of the most beautiful destinations to find your paradise.',
                    'image' => 'https://images.unsplash.com/photo-1551524164-6cf2ac154e15?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80',
                ],
            ],
        ]);
    }
}
