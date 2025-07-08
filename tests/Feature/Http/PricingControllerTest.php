<?php

declare(strict_types=1);

use function Pest\Laravel\get;

it('can access the pricing page', function (): void {
    $response = get('/pricing');

    $response
        ->assertOk()
        ->assertViewIs('pricing');
});

it('displays pricing plans and add-ons', function (): void {
    $response = get('/pricing');

    $response
        ->assertOk()
        ->assertViewHas('plans')
        ->assertViewHas('addOns')
        ->assertViewHas('plans', function (array $plans): bool {
            expect($plans)->toHaveCount(5);
            return true;
        })
        ->assertViewHas('addOns', function (array $addOns): bool {
            expect($addOns)->toHaveCount(6);
            return true;
        });
});

it('displays correct page content', function (): void {
    $response = get('/pricing');

    $response
        ->assertOk()
        ->assertSee('Pricing - JobHunter', false)
        ->assertSee('Transparent Pricing')
        ->assertSee('Monthly Subscription Plans')
        ->assertSee('Add-On Services')
        ->assertSee('Frequently Asked Questions');
});

it('displays all pricing plans', function (): void {
    $response = get('/pricing');

    $response
        ->assertOk()
        ->assertSee('JobRadar')
        ->assertSee('ApplicationDocs')
        ->assertSee('SmartApply')
        ->assertSee('ProActive')
        ->assertSee('FullApply')
        ->assertSee('Most Popular');
});

it('renders as a Blade view', function (): void {
    $response = get('/pricing');

    $response
        ->assertOk()
        ->assertViewIs('pricing')
        ->assertDontSee('data-page'); // Inertia pages have this attribute
});