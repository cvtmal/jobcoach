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
            'services' => __('landing.services.items'),
            'pricing_preview' => __('landing.pricing.plans'),
            'plans' => __('landing.pricing.plans'),
        ]);
    }
}
