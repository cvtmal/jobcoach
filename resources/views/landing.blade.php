<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JobHunter - Swiss Job Search Support</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        
        <!-- Alpine.js -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @vite(['resources/css/app.css'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            <x-navigation style="landing" />

            {{-- Hero Section --}}
            <section class=" relative flex h-screen items-center">
                {{-- Background Image --}}
                <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-blue-700/60">
                    <img
                        src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                        alt="Rock climbing mountain adventure"
                        class="h-full w-full object-cover"
                    />
                </div>

                {{-- Hero Content --}}
                <div class="relative z-10 mx-auto grid max-w-7xl grid-cols-1 items-center gap-12 px-6 lg:grid-cols-2">
                    <div class="text-white">
                        <div class="mb-4 inline-flex items-center rounded-full bg-white/20 px-4 py-2 text-sm backdrop-blur">
                            {{ __('landing.hero.switzerland_service') }}
                        </div>
                        <h1 class="mb-6 text-5xl leading-tight font-bold lg:text-6xl">{{ __('landing.hero.title') }}</h1>
                        <p class="mb-8 max-w-lg text-xl text-gray-200">
                            {{ __('landing.hero.subtitle') }}
                        </p>
                        <div class="flex flex-col gap-4 sm:flex-row">
                            <a href="#pricing" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-blue-900 hover:bg-gray-100 h-11 px-8">
                                {{ __('common.buttons.view_plans') }} →
                            </a>
                            <a href="#" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-white bg-transparent text-white hover:bg-white hover:text-blue-900 h-11 px-8">
                                {{ __('common.buttons.get_started') }}
                            </a>
                        </div>
                        <p class="mt-4 text-sm text-gray-300">{{ __('landing.hero.pricing_info') }}</p>
                    </div>

                    <div class="flex justify-center lg:justify-end">
                        <div class="rounded-2xl bg-white/10 p-8 backdrop-blur">
                            <div class="text-center">
                                <div class="text-4xl font-bold text-white">100%</div>
                                <div class="text-sm text-gray-200">{{ __('landing.hero.discreet_badge') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- About Section --}}
            <section class="px-6 py-20">
                <div class="mx-auto max-w-7xl">
                    <div class="grid grid-cols-1 items-center gap-16 lg:grid-cols-2">
                        <div>
                            <h2 class="mb-4 text-sm font-semibold tracking-wide text-blue-600">{{ __('landing.about.section_title') }}</h2>
                            <div class="text-lg leading-relaxed text-gray-800">{!! __('landing.about.description') !!}</div>
                            <div class="mt-6 space-y-4">
                                @foreach(__('landing.about.features') as $feature)
                                    <div class="flex items-center space-x-3">
                                        <div class="h-2 w-2 rounded-full bg-blue-600"></div>
                                        <span class="text-gray-700">{{ $feature }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Stats --}}
                        <div class="grid grid-cols-3 gap-8">
                            <div class="text-center">
                                <div class="mb-2 text-4xl font-bold text-blue-900">{{ $stats['plans'] }}</div>
                                <div class="text-sm text-gray-600">{{ __('common.service_plans') }}</div>
                            </div>
                            <div class="text-center">
                                <div class="mb-2 text-3xl font-bold text-blue-900">{{ $stats['monthly_price'] }}</div>
                                <div class="text-sm text-gray-600">{{ __('common.monthly_pricing') }}</div>
                            </div>
                            <div class="text-center">
                                <div class="mb-2 text-4xl font-bold text-blue-900">{{ $stats['success_rate'] }}</div>
                                <div class="text-sm text-gray-600">{{ __('common.discreet_service') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Services Preview Section --}}
            <section class="bg-gray-50 px-6 py-20">
                <div class="mx-auto max-w-7xl">
                    <div class="mb-16 text-center">
                        <h2 class="mb-4 text-3xl font-bold text-gray-900">{{ __('landing.services.title') }}</h2>
                        <p class="mx-auto max-w-2xl text-lg text-gray-600">
                            {{ __('landing.services.subtitle') }}
                        </p>
                    </div>

                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                        @foreach($services as $service)
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden border-0 shadow-sm transition-shadow hover:shadow-lg">
                                <div class="relative aspect-[4/3] overflow-hidden">
                                    <img
                                        src="{{ $service['image'] }}"
                                        alt="{{ $service['title'] }}"
                                        class="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                                    />
                                    <div class="absolute top-4 left-4 text-4xl">{{ $service['icon'] }}</div>
                                </div>
                                <div class="p-6">
                                    <h3 class="mb-3 text-xl font-semibold text-gray-900">{{ $service['title'] }}</h3>
                                    <p class="mb-4 leading-relaxed text-gray-600">{{ $service['description'] }}</p>
                                    <a href="#services-detail" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-blue-600 underline-offset-4 hover:underline h-auto p-0 hover:text-blue-800">
                                        {{ __('common.buttons.learn_more') }} →
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- Pricing Preview Section --}}
            <section class="px-6 py-20">
                <div class="mx-auto max-w-7xl">
                    <div class="mb-16 text-center">
                        <h2 class="mb-4 text-3xl font-bold text-gray-900">{{ __('landing.pricing.title') }}</h2>
                        <p class="text-lg text-gray-600">{{ __('landing.pricing.subtitle') }}</p>
                    </div>

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
                        @foreach($pricing_preview as $plan)
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm relative overflow-hidden transition-all hover:shadow-xl {{ $plan['popular'] ? 'scale-105 border-2 border-blue-500' : 'border border-gray-200' }}">
                                @if($plan['popular'])
                                    <div class="absolute top-0 right-0 left-0 bg-blue-500 py-2 text-center text-sm font-semibold text-white">
                                        {{ __('common.most_popular') }}
                                    </div>
                                @endif
                                <div class="p-6 {{ $plan['popular'] ? 'pt-12' : '' }}">
                                    <div class="text-center">
                                        <div class="text-2xl mb-2">{{ $plan['emoji'] }}</div>
                                        <h3 class="mb-2 text-lg font-semibold text-gray-900">{{ $plan['name'] }}</h3>
                                        <div class="mb-4">
                                            <span class="text-2xl font-bold text-blue-900">{{ $plan['price'] }}</span>
                                            <span class="text-gray-600 text-sm">{{ __('common.per_month') }}</span>
                                        </div>
                                        <p class="mb-4 text-sm text-gray-600 leading-relaxed">{{ $plan['description'] }}</p>
                                        
                                        <div class="mb-6 text-left">
                                            <ul class="space-y-2">
                                                @foreach($plan['features'] as $feature)
                                                    <li class="flex items-start text-xs text-gray-600">
                                                        <span class="text-green-500 mr-2 mt-1">✓</span>
                                                        <span>{{ $feature }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        
                                        <button class="w-full text-sm inline-flex items-center justify-center whitespace-nowrap rounded-md font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2 {{ $plan['popular'] ? 'bg-blue-600 text-white hover:bg-blue-700' : 'bg-gray-100 text-gray-900 hover:bg-gray-200' }}">
                                            {{ $plan['popular'] ? __('common.buttons.get_started') : __('common.buttons.learn_more') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-12 text-center">
                        <a href="#pricing" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-blue-600 bg-transparent text-blue-600 hover:bg-blue-50 h-11 px-8">
                            {{ __('common.buttons.view_all_plans') }} →
                        </a>
                    </div>
                </div>
            </section>

            {{-- DETAILED SERVICES SECTION --}}
            <section id="services-detail" class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
                <div class="mx-auto max-w-7xl px-6 text-center">
                    <h1 class="text-4xl lg:text-5xl font-bold mb-6">
                        Professional Job Search Services
                    </h1>
                    <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-8">
                        We combine premium recruiting technology with human expertise to give you an unfair advantage in the Swiss job market.
                    </p>
                    <div class="inline-flex items-center px-4 py-2 bg-white/20 rounded-full text-sm backdrop-blur">
                        🇨🇭 Specialized in the Swiss job market
                    </div>
                </div>
            </section>

            {{-- Detailed Services Grid --}}
            <section class="py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3">
                        @foreach($services as $service)
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden border-0 shadow-lg hover:shadow-xl transition-shadow">
                                <div class="relative aspect-[4/3] overflow-hidden">
                                    <img
                                        src="{{ $service['image'] }}"
                                        alt="{{ $service['title'] }}"
                                        class="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                                    />
                                    <div class="absolute top-4 left-4 text-4xl">{{ $service['icon'] }}</div>
                                    @if(isset($service['price']))
                                        <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                            {{ $service['price'] }}
                                        </div>
                                    @endif
                                </div>
                                <div class="p-8">
                                    <h3 class="mb-4 text-2xl font-bold text-gray-900">{{ $service['title'] }}</h3>
                                    <p class="mb-6 text-gray-600 leading-relaxed">{{ $service['description'] }}</p>
                                    
                                    <div class="mb-6">
                                        <h4 class="text-sm font-semibold text-gray-900 mb-3 uppercase tracking-wide">What's included:</h4>
                                        <ul class="space-y-2">
                                            @foreach($service['details'] as $detail)
                                                <li class="flex items-start text-sm text-gray-600">
                                                    <span class="text-green-500 mr-2 mt-1">✓</span>
                                                    <span>{{ $detail }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                    <button class="w-full bg-blue-600 text-white hover:bg-blue-700 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2">
                                        Learn More
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- How It Works Section --}}
            <section class="bg-gray-50 py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">How It Works</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            Our process is designed to be completely transparent and stress-free for you.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">1</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Consultation Call</h3>
                            <p class="text-gray-600">We discuss your goals, experience, and preferences in a 30-minute call.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">2</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">We Take Action</h3>
                            <p class="text-gray-600">Our team finds opportunities, creates documents, and manages applications.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">3</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">You Interview</h3>
                            <p class="text-gray-600">Focus on what matters most - preparing for and attending interviews.</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- DETAILED PRICING SECTION --}}
            <section id="pricing" class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
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

            {{-- Full Pricing Plans --}}
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

            {{-- DETAILED ABOUT SECTION --}}
            <section id="about" class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
                <div class="mx-auto max-w-7xl px-6 text-center">
                    <h1 class="text-4xl lg:text-5xl font-bold mb-6">
                        About JobHunter
                    </h1>
                    <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-8">
                        We're Switzerland's leading job search support service, helping professionals focus on what matters most - landing their dream job.
                    </p>
                    <div class="inline-flex items-center px-4 py-2 bg-white/20 rounded-full text-sm backdrop-blur">
                        🇨🇭 Founded in Switzerland • Serving professionals nationwide
                    </div>
                </div>
            </section>

            {{-- Mission Section --}}
            <section class="py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Mission</h2>
                            <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                                We believe that every professional deserves to focus on their strengths rather than getting bogged down by the administrative burden of job searching. Our mission is to handle the complex, time-consuming tasks of finding opportunities and crafting applications, so you can concentrate on what you do best.
                            </p>
                            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                                We're not a recruitment agency - we're your personal job search team, working behind the scenes to give you an unfair advantage in the Swiss job market.
                            </p>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">100% transparent process</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">Completely invisible to employers</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">Specialized in Swiss job market</span>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <img
                                src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                alt="Team collaboration"
                                class="rounded-lg shadow-xl"
                            />
                        </div>
                    </div>
                </div>
            </section>

            {{-- How We're Different --}}
            <section class="bg-gray-50 py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">How We're Different</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            We're not like other job search services. Here's what makes us unique.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-0 shadow-lg">
                            <div class="p-8 text-center">
                                <div class="text-4xl mb-4">🎯</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Swiss Market Expertise</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    We understand the unique requirements, cultural nuances, and application processes specific to the Swiss job market.
                                </p>
                            </div>
                        </div>
                        
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-0 shadow-lg">
                            <div class="p-8 text-center">
                                <div class="text-4xl mb-4">🔧</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Premium Tools</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    We use advanced recruiting software and databases that are typically only available to professional recruiters.
                                </p>
                            </div>
                        </div>
                        
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-0 shadow-lg">
                            <div class="p-8 text-center">
                                <div class="text-4xl mb-4">👤</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Complete Discretion</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Employers never know we're involved. All applications appear to come directly from you, maintaining your personal brand.
                                </p>
                            </div>
                        </div>
                        
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-0 shadow-lg">
                            <div class="p-8 text-center">
                                <div class="text-4xl mb-4">🤝</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Personal Touch</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Every client gets a dedicated consultant who understands their goals and manages their entire process.
                                </p>
                            </div>
                        </div>
                        
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-0 shadow-lg">
                            <div class="p-8 text-center">
                                <div class="text-4xl mb-4">📊</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Data-Driven</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    We track application success rates and continuously optimize our approach based on real market data.
                                </p>
                            </div>
                        </div>
                        
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-0 shadow-lg">
                            <div class="p-8 text-center">
                                <div class="text-4xl mb-4">⚡</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Fast Response</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    We act quickly on new opportunities and maintain responsive communication throughout the process.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Our Process --}}
            <section class="py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Process</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            A transparent, step-by-step approach designed to get you results.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">1</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Discovery Call</h3>
                            <p class="text-gray-600">We learn about your background, goals, and preferences in a detailed consultation.</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">2</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Market Research</h3>
                            <p class="text-gray-600">We identify opportunities using premium tools and our extensive network.</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">3</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Application Creation</h3>
                            <p class="text-gray-600">We craft tailored applications that highlight your unique value proposition.</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">4</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Interview Support</h3>
                            <p class="text-gray-600">We prepare you for success and provide ongoing support throughout the process.</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Statistics --}}
            <section class="bg-blue-50 py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Track Record</h2>
                        <p class="text-lg text-gray-600">Numbers that speak for themselves</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center bg-white p-8 rounded-lg shadow-sm">
                            <div class="text-4xl font-bold text-blue-900 mb-2">500+</div>
                            <div class="text-gray-600">Successful Placements</div>
                        </div>
                        <div class="text-center bg-white p-8 rounded-lg shadow-sm">
                            <div class="text-4xl font-bold text-blue-900 mb-2">100%</div>
                            <div class="text-gray-600">Discreet Service</div>
                        </div>
                        <div class="text-center bg-white p-8 rounded-lg shadow-sm">
                            <div class="text-4xl font-bold text-blue-900 mb-2">24h</div>
                            <div class="text-gray-600">Average Response Time</div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Values --}}
            <section class="py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Values</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            The principles that guide everything we do.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 text-xl">🔒</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Confidentiality</h3>
                                <p class="text-gray-600">Your privacy is paramount. We never reveal our involvement to employers or compromise your personal brand.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 text-xl">🎯</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Excellence</h3>
                                <p class="text-gray-600">We maintain the highest standards in everything we do, from document creation to client communication.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 text-xl">🤝</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Partnership</h3>
                                <p class="text-gray-600">We see ourselves as your partner in success, not just a service provider. Your goals become our goals.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 text-xl">📈</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Results</h3>
                                <p class="text-gray-600">We're committed to delivering measurable results and continuously improving our approach.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <x-cta />
        </div>
    </body>
</html>