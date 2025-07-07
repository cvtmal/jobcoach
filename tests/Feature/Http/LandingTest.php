<?php

declare(strict_types=1);

use Inertia\Testing\AssertableInertia as Assert;

test('landing page can be rendered', function (): void {
    $response = $this->get('/');

    $response->assertOk()
        ->assertInertia(fn (Assert $page) => $page
            ->component('landing')
            ->has('stats')
            ->has('stats.plans')
            ->has('stats.monthly_price')
            ->has('stats.success_rate')
            ->has('services', 3)
            ->has('services.0.title')
            ->has('services.0.description')
            ->has('services.0.image')
            ->has('services.0.icon')
            ->has('pricing_preview', 3)
            ->has('pricing_preview.0.name')
            ->has('pricing_preview.0.price')
            ->has('pricing_preview.0.description')
            ->has('pricing_preview.0.popular')
        );
});

test('landing page contains expected JobCoach data', function (): void {
    $response = $this->get('/');

    $response->assertInertia(fn (Assert $page) => $page
        ->component('landing')
        ->where('stats.plans', '5')
        ->where('stats.monthly_price', 'CHF 49-399')
        ->where('stats.success_rate', '100%')
        ->where('services.0.title', 'Premium Job Access')
        ->where('services.1.title', 'Professional Documents')
        ->where('services.2.title', 'Discreet Management')
        ->where('pricing_preview.0.name', 'JobRadar')
        ->where('pricing_preview.0.price', 'CHF 49')
        ->where('pricing_preview.1.name', 'SmartApply')
        ->where('pricing_preview.1.popular', true)
        ->where('pricing_preview.2.name', 'FullApply')
    );
});
