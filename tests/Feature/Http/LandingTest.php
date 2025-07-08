<?php

declare(strict_types=1);

use function Pest\Laravel\get;

it('can access the landing page', function (): void {
    $response = get('/');

    $response
        ->assertOk()
        ->assertViewIs('landing');
});

it('loads the landing page with correct data structure', function (): void {
    $response = get('/');

    $response
        ->assertOk()
        ->assertViewHas('stats')
        ->assertViewHas('services')
        ->assertViewHas('pricing_preview')
        ->assertViewHas('stats', function (array $stats): bool {
            expect($stats)->toBeArray()
                ->toHaveKeys(['plans', 'monthly_price', 'success_rate']);

            expect($stats['plans'])->toBeString()->not->toBeEmpty();
            expect($stats['monthly_price'])->toBeString()->not->toBeEmpty();
            expect($stats['success_rate'])->toBeString()->not->toBeEmpty();

            return true;
        })
        ->assertViewHas('services', function (array $services): bool {
            expect($services)->toBeArray()->not->toBeEmpty();

            // Check that each service has the required structure
            foreach ($services as $service) {
                expect($service)->toBeArray()
                    ->toHaveKeys(['title', 'description', 'image', 'icon']);

                expect($service['title'])->toBeString()->not->toBeEmpty();
                expect($service['description'])->toBeString()->not->toBeEmpty();
                expect($service['image'])->toBeString()->not->toBeEmpty();
                expect($service['icon'])->toBeString()->not->toBeEmpty();
            }

            return true;
        })
        ->assertViewHas('pricing_preview', function (array $pricing_preview): bool {
            expect($pricing_preview)->toBeArray()->not->toBeEmpty();

            // Check that each pricing plan has the required structure
            foreach ($pricing_preview as $plan) {
                expect($plan)->toBeArray()
                    ->toHaveKeys(['name', 'price', 'description', 'popular']);

                expect($plan['name'])->toBeString()->not->toBeEmpty();
                expect($plan['price'])->toBeString()->not->toBeEmpty();
                expect($plan['description'])->toBeString()->not->toBeEmpty();
                expect($plan['popular'])->toBeBool();
            }

            return true;
        });
});

it('displays content correctly in English locale', function (): void {
    app()->setLocale('en');
    
    $response = get('/');

    $response
        ->assertOk()
        ->assertSee('We handle the admin, you focus on the interviews.') // English hero title
        ->assertSee('Services') // English navigation
        ->assertSee('Pricing') // English navigation
        ->assertSee('About') // English navigation
        ->assertSee('Free Consultation') // English button
        ->assertSee('Premium Job Access') // English service title
        ->assertSee('Professional Documents') // English service title
        ->assertSee('Discreet Management') // English service title
        ->assertSee('Ready to land your dream job in Switzerland?') // English CTA title
        ->assertSee('Switzerland\'s Job Search Support Service'); // English badge
});

it('displays content correctly in German locale', function (): void {
    app()->setLocale('de');
    
    $response = get('/');

    $response
        ->assertOk()
        ->assertSee('Wir übernehmen die Verwaltung, Sie konzentrieren sich auf die Vorstellungsgespräche.') // German hero title
        ->assertSee('Dienstleistungen') // German navigation
        ->assertSee('Preise') // German navigation  
        ->assertSee('Über uns') // German navigation
        ->assertSee('Kostenlose Beratung') // German button
        ->assertSee('Premium Job Zugang') // German service title
        ->assertSee('Professionelle Dokumente') // German service title
        ->assertSee('Diskrete Verwaltung') // German service title
        ->assertSee('Bereit, Ihren Traumjob in der Schweiz zu finden?') // German CTA title
        ->assertSee('Schweizer Jobsuche-Support-Service'); // German badge
});

it('switches language content correctly', function (): void {
    // Test English first
    app()->setLocale('en');
    $englishResponse = get('/');
    
    $englishResponse
        ->assertOk()
        ->assertSee('We handle the admin, you focus on the interviews.')
        ->assertDontSee('Wir übernehmen die Verwaltung');

    // Test German
    app()->setLocale('de');
    $germanResponse = get('/');
    
    $germanResponse
        ->assertOk()
        ->assertSee('Wir übernehmen die Verwaltung')
        ->assertDontSee('We handle the admin, you focus on the interviews.');
});

it('displays correct pricing content in both languages', function (): void {
    // Test English pricing
    app()->setLocale('en');
    $englishResponse = get('/');
    
    $englishResponse
        ->assertOk()
        ->assertSee('For self-applicants who want access to exclusive job opportunities') // JobRadar description
        ->assertSee('/month') // English per month
        ->assertSee('Most Popular'); // English popular badge

    // Test German pricing
    app()->setLocale('de');
    $germanResponse = get('/');
    
    $germanResponse
        ->assertOk()
        ->assertSee('Für Selbstbewerber, die Zugang zu exklusiven Stellenangeboten wollen') // JobRadar German description
        ->assertSee('/Monat') // German per month
        ->assertSee('Beliebtester'); // German popular badge
});

it('maintains data consistency across locales', function (): void {
    // Test English data structure
    app()->setLocale('en');
    $englishResponse = get('/');
    
    $englishResponse
        ->assertOk()
        ->assertViewHas('services', function (array $services): bool {
            expect($services)->toHaveCount(3);
            return true;
        })
        ->assertViewHas('pricing_preview', function (array $pricing_preview): bool {
            expect($pricing_preview)->toHaveCount(5);
            
            // Check that prices remain the same across languages
            $jobRadarPlan = collect($pricing_preview)->firstWhere('name', 'JobRadar');
            expect($jobRadarPlan['price'])->toBe('CHF 49');
            
            return true;
        });

    // Test German data structure
    app()->setLocale('de');
    $germanResponse = get('/');
    
    $germanResponse
        ->assertOk()
        ->assertViewHas('services', function (array $services): bool {
            expect($services)->toHaveCount(3);
            return true;
        })
        ->assertViewHas('pricing_preview', function (array $pricing_preview): bool {
            expect($pricing_preview)->toHaveCount(5);
            
            // Check that prices remain the same across languages
            $jobRadarPlan = collect($pricing_preview)->firstWhere('name', 'JobRadar');
            expect($jobRadarPlan['price'])->toBe('CHF 49');
            
            return true;
        });
});
