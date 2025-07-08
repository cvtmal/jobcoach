<?php

declare(strict_types=1);

use function Pest\Laravel\get;

it('can access the about page', function (): void {
    $response = get('/about');

    $response
        ->assertOk()
        ->assertViewIs('about');
});

it('displays correct page content', function (): void {
    $response = get('/about');

    $response
        ->assertOk()
        ->assertSee('About - JobHunter', false)
        ->assertSee('About JobHunter')
        ->assertSee('Our Mission')
        ->assertSee('Different')
        ->assertSee('Our Process')
        ->assertSee('Our Track Record')
        ->assertSee('Our Values');
});

it('displays mission and company description', function (): void {
    $response = get('/about');

    $response
        ->assertOk()
        ->assertSee('leading job search support service')
        ->assertSee('not a recruitment agency')
        ->assertSee('100% transparent process')
        ->assertSee('Completely invisible to employers')
        ->assertSee('Specialized in Swiss job market');
});

it('displays the six differentiator cards', function (): void {
    $response = get('/about');

    $response
        ->assertOk()
        ->assertSee('Swiss Market Expertise')
        ->assertSee('Premium Tools')
        ->assertSee('Complete Discretion')
        ->assertSee('Personal Touch')
        ->assertSee('Data-Driven')
        ->assertSee('Fast Response');
});

it('displays statistics and values', function (): void {
    $response = get('/about');

    $response
        ->assertOk()
        ->assertSee('500+')
        ->assertSee('Successful Placements')
        ->assertSee('100%')
        ->assertSee('Discreet Service')
        ->assertSee('24h')
        ->assertSee('Average Response Time')
        ->assertSee('Confidentiality')
        ->assertSee('Excellence')
        ->assertSee('Partnership')
        ->assertSee('Results');
});

it('renders as a Blade view', function (): void {
    $response = get('/about');

    $response
        ->assertOk()
        ->assertViewIs('about')
        ->assertDontSee('data-page'); // Inertia pages have this attribute
});