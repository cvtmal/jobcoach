<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pricing - JobHunter</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            <x-navigation currentPage="pricing" />

            {{-- Hero Section --}}
            <section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
                <div class="mx-auto max-w-7xl px-6 text-center">
                    <h1 class="text-4xl lg:text-5xl font-bold mb-6">
                        Transparent Pricing
                    </h1>
                    <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-8">
                        Choose the plan that fits your needs. All plans include our 100% discreet service and can be cancelled anytime.
                    </p>
                    <div class="inline-flex items-center px-4 py-2 bg-white/20 rounded-full text-sm backdrop-blur">
                        🇨🇭 CHF 49-399/month • No hidden fees • Cancel anytime
                    </div>
                </div>
            </section>

            {{-- Pricing Plans --}}
            <section class="py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Monthly Subscription Plans</h2>
                        <p class="text-lg text-gray-600">All plans include personal onboarding call and dedicated consultant</p>
                    </div>

                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
                        @foreach($plans as $plan)
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm relative overflow-hidden transition-all hover:shadow-xl {{ $plan['popular'] ? 'scale-105 border-2 border-blue-500 shadow-lg' : 'border border-gray-200' }}">
                                @if($plan['popular'])
                                    <div class="absolute top-0 right-0 left-0 bg-blue-500 py-2 text-center text-sm font-semibold text-white">
                                        Most Popular
                                    </div>
                                @endif
                                <div class="p-8 {{ $plan['popular'] ? 'pt-12' : '' }}">
                                    <div class="text-center">
                                        <div class="text-4xl mb-4">{{ $plan['emoji'] }}</div>
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $plan['name'] }}</h3>
                                        <div class="mb-6">
                                            <span class="text-4xl font-bold text-blue-900">{{ $plan['price'] }}</span>
                                            <span class="text-gray-600 text-lg">/month</span>
                                        </div>
                                        <p class="text-gray-600 mb-8 leading-relaxed">{{ $plan['description'] }}</p>
                                        
                                        <div class="mb-8 text-left">
                                            <h4 class="text-sm font-semibold text-gray-900 mb-4 uppercase tracking-wide">Includes:</h4>
                                            <ul class="space-y-3">
                                                @foreach($plan['features'] as $feature)
                                                    <li class="flex items-start text-sm text-gray-600">
                                                        <span class="text-green-500 mr-3 mt-1">✓</span>
                                                        <span>{{ $feature }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        
                                        <button class="w-full text-lg py-3 inline-flex items-center justify-center whitespace-nowrap rounded-md font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 {{ $plan['popular'] ? 'bg-blue-600 text-white hover:bg-blue-700' : 'bg-gray-100 text-gray-900 hover:bg-gray-200' }}">
                                            {{ $plan['popular'] ? 'Get Started' : 'Choose Plan' }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- Important Information --}}
            <section class="bg-blue-50 py-16">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">🔐 Important Information</h2>
                        <p class="text-gray-600">Applies to all plans</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <div class="text-2xl mb-4">🚫</div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Not a recruitment agency</h3>
                            <p class="text-gray-600 text-sm">We solely handle the administrative work of your job search – job research, application document creation, submission, and follow-ups.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <div class="text-2xl mb-4">👤</div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">100% Discreet</h3>
                            <p class="text-gray-600 text-sm">You remain the visible applicant. We act in your name but are never visible to employers. All applications are sent as if you wrote them yourself.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <div class="text-2xl mb-4">🛠️</div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Premium Tools</h3>
                            <p class="text-gray-600 text-sm">We use advanced recruiting software (normally unavailable to individuals) combined with manual search by our team.</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Add-On Services --}}
            <section class="py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Add-On Services</h2>
                        <p class="text-lg text-gray-600">Additional services available for any plan</p>
                    </div>

                    <div class="max-w-4xl mx-auto">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Service</th>
                                            <th class="px-6 py-4 text-right text-sm font-semibold text-gray-900">Price (CHF)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        @foreach($addOns as $addOn)
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-6 py-4 text-sm text-gray-900">{{ $addOn['service'] }}</td>
                                                <td class="px-6 py-4 text-sm text-gray-900 text-right font-semibold">{{ $addOn['price'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- FAQ Section --}}
            <section class="bg-gray-50 py-20">
                <div class="mx-auto max-w-4xl px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                        <p class="text-lg text-gray-600">Everything you need to know about our pricing</p>
                    </div>

                    <div class="space-y-8">
                        <div class="bg-white p-8 rounded-lg shadow-sm">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Can I cancel anytime?</h3>
                            <p class="text-gray-600">Yes, all subscriptions can be cancelled at any time with no penalties or fees.</p>
                        </div>
                        <div class="bg-white p-8 rounded-lg shadow-sm">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Will employers know you're helping me?</h3>
                            <p class="text-gray-600">No, we are completely invisible to employers. All applications are sent as if you wrote them yourself.</p>
                        </div>
                        <div class="bg-white p-8 rounded-lg shadow-sm">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Are there any hidden fees?</h3>
                            <p class="text-gray-600">No, our pricing is completely transparent. The only additional costs are optional add-on services.</p>
                        </div>
                    </div>
                </div>
            </section>

            <x-cta />
        </div>
    </body>
</html>