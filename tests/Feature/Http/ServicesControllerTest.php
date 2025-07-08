<?php

declare(strict_types=1);

use function Pest\Laravel\get;

it('can access the services page', function (): void {
    $response = get('/services');

    $response
        ->assertOk()
        ->assertViewIs('services');
});

it('loads the services page with correct data structure', function (): void {
    $response = get('/services');

    $response
        ->assertOk()
        ->assertViewHas('services')
        ->assertViewHas('services', function (array $services): bool {
            // Check that services is an array and not empty
            expect($services)->toBeArray()->not->toBeEmpty();

            // Check that each service has the required structure
            foreach ($services as $service) {
                expect($service)->toBeArray()
                    ->toHaveKeys(['title', 'description', 'image', 'icon', 'details', 'price']);

                expect($service['title'])->toBeString()->not->toBeEmpty();
                expect($service['description'])->toBeString()->not->toBeEmpty();
                expect($service['image'])->toBeString()->not->toBeEmpty();
                expect($service['icon'])->toBeString()->not->toBeEmpty();
                expect($service['details'])->toBeArray()->not->toBeEmpty();
                expect($service['price'])->toBeString()->not->toBeEmpty();

                // Check that details array contains strings
                foreach ($service['details'] as $detail) {
                    expect($detail)->toBeString()->not->toBeEmpty();
                }
            }

            return true;
        });
});

it('displays the correct page title', function (): void {
    $response = get('/services');

    $response
        ->assertOk()
        ->assertSee('Services - JobHunter', false); // false for escaping
});

it('displays the hero section content', function (): void {
    $response = get('/services');

    $response
        ->assertOk()
        ->assertSee('Professional Job Search Services')
        ->assertSee('We combine premium recruiting technology with human expertise')
        ->assertSee('🇨🇭 Specialized in the Swiss job market');
});

it('displays all service cards with required elements', function (): void {
    $response = get('/services');

    $response
        ->assertOk()
        ->assertSee('Premium Job Access')
        ->assertSee('Professional Documents')
        ->assertSee('Complete Application Management')
        ->assertSee('Active Job Search')
        ->assertSee('Full-Service Support')
        ->assertSee('Learn More');
});

it('displays the how it works section', function (): void {
    $response = get('/services');

    $response
        ->assertOk()
        ->assertSee('How It Works')
        ->assertSee('Consultation Call')
        ->assertSee('We Take Action')
        ->assertSee('You Interview')
        ->assertSee('Our process is designed to be completely transparent');
});

it('displays the CTA section', function (): void {
    $response = get('/services');

    $response
        ->assertOk()
        ->assertSee('Book Consultation', false)
        ->assertSee('View All Plans &amp; Features', false);
});

it('has the correct navigation structure', function (): void {
    $response = get('/services');

    $response
        ->assertOk()
        ->assertSee('JobHunter 🇨🇭')
        ->assertSee('Services')
        ->assertSee('Pricing')
        ->assertSee('About')
        ->assertSee('Free Consultation');
});

it('renders the services page as a Blade view', function (): void {
    $response = get('/services');

    $response
        ->assertOk()
        ->assertViewIs('services')
        ->assertDontSee('data-page'); // Inertia pages have this attribute
});

it('contains all expected service data', function (): void {
    $response = get('/services');

    $response
        ->assertOk()
        ->assertViewHas('services', function (array $services): bool {
            expect($services)->toHaveCount(5);

            $expectedServices = [
                'Premium Job Access',
                'Professional Documents',
                'Complete Application Management',
                'Active Job Search',
                'Full-Service Support',
            ];

            $actualServiceTitles = array_column($services, 'title');

            foreach ($expectedServices as $expectedService) {
                expect($actualServiceTitles)->toContain($expectedService);
            }

            return true;
        });
});
