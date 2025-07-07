<?php

declare(strict_types=1);

use Inertia\Testing\AssertableInertia as Assert;

test('landing page can be rendered', function (): void {
    $response = $this->get('/');

    $response->assertOk()
        ->assertInertia(fn (Assert $page) => $page
            ->component('landing')
            ->has('stats')
            ->has('stats.locations')
            ->has('stats.testimonials')
            ->has('stats.success_rate')
            ->has('services', 3)
            ->has('services.0.title')
            ->has('services.0.description')
            ->has('services.0.image')
        );
});

test('landing page contains expected data structure', function (): void {
    $response = $this->get('/');

    $response->assertInertia(fn (Assert $page) => $page
        ->component('landing')
        ->where('stats.locations', '25+')
        ->where('stats.testimonials', '50+')
        ->where('stats.success_rate', '100%')
        ->where('services.0.title', 'Expeditions + Retreats')
        ->where('services.1.title', 'Elevation Reset Retreat')
        ->where('services.2.title', 'Whistler Back Country')
    );
});
