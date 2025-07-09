<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('common.app_title', ['app' => 'JobHunter']) }}</title>

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
                        {{ __('landing.detailed_services.title') }}
                    </h1>
                    <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-8">
                        {{ __('landing.detailed_services.subtitle') }}
                    </p>
                    <div class="inline-flex items-center px-4 py-2 bg-white/20 rounded-full text-sm backdrop-blur">
                        {{ __('landing.detailed_services.swiss_market_badge') }}
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
                                        <h4 class="text-sm font-semibold text-gray-900 mb-3 uppercase tracking-wide">{{ __('landing.detailed_services.whats_included') }}</h4>
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
                                        {{ __('landing.detailed_services.learn_more_button') }}
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
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('landing.how_it_works.title') }}</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            {{ __('landing.how_it_works.subtitle') }}
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">1</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('landing.how_it_works.consultation_call') }}</h3>
                            <p class="text-gray-600">{{ __('landing.how_it_works.consultation_description') }}</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">2</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('landing.how_it_works.we_take_action') }}</h3>
                            <p class="text-gray-600">{{ __('landing.how_it_works.we_take_action_description') }}</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">3</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('landing.how_it_works.you_interview') }}</h3>
                            <p class="text-gray-600">{{ __('landing.how_it_works.you_interview_description') }}</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- DETAILED PRICING SECTION --}}
            <section id="pricing" class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
                <div class="mx-auto max-w-7xl px-6 text-center">
                    <h1 class="text-4xl lg:text-5xl font-bold mb-6">
                        {{ __('landing.detailed_pricing.title') }}
                    </h1>
                    <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-8">
                        {{ __('landing.detailed_pricing.subtitle') }}
                    </p>
                    <div class="inline-flex items-center px-4 py-2 bg-white/20 rounded-full text-sm backdrop-blur">
                        {{ __('landing.detailed_pricing.pricing_badge') }}
                    </div>
                </div>
            </section>

            {{-- Full Pricing Plans --}}
            <section class="py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('landing.detailed_pricing.monthly_plans_title') }}</h2>
                        <p class="text-lg text-gray-600">{{ __('landing.detailed_pricing.monthly_plans_subtitle') }}</p>
                    </div>

                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
                        @foreach($plans as $plan)
                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm relative overflow-hidden transition-all hover:shadow-xl {{ $plan['popular'] ? 'scale-105 border-2 border-blue-500 shadow-lg' : 'border border-gray-200' }}">
                                @if($plan['popular'])
                                    <div class="absolute top-0 right-0 left-0 bg-blue-500 py-2 text-center text-sm font-semibold text-white">
                                        {{ __('landing.detailed_pricing.most_popular') }}
                                    </div>
                                @endif
                                <div class="p-8 {{ $plan['popular'] ? 'pt-12' : '' }}">
                                    <div class="text-center">
                                        <div class="text-4xl mb-4">{{ $plan['emoji'] }}</div>
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $plan['name'] }}</h3>
                                        <div class="mb-6">
                                            <span class="text-4xl font-bold text-blue-900">{{ $plan['price'] }}</span>
                                            <span class="text-gray-600 text-lg">{{ __('landing.detailed_pricing.per_month') }}</span>
                                        </div>
                                        <p class="text-gray-600 mb-8 leading-relaxed">{{ $plan['description'] }}</p>
                                        
                                        <div class="mb-8 text-left">
                                            <h4 class="text-sm font-semibold text-gray-900 mb-4 uppercase tracking-wide">{{ __('landing.detailed_pricing.includes') }}</h4>
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
                                            {{ $plan['popular'] ? __('landing.detailed_pricing.get_started') : __('landing.detailed_pricing.choose_plan') }}
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
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ __('landing.important_info.title') }}</h2>
                        <p class="text-gray-600">{{ __('landing.important_info.subtitle') }}</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <div class="text-2xl mb-4">🚫</div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ __('landing.important_info.not_recruitment_title') }}</h3>
                            <p class="text-gray-600 text-sm">{{ __('landing.important_info.not_recruitment_description') }}</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <div class="text-2xl mb-4">👤</div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ __('landing.important_info.discreet_title') }}</h3>
                            <p class="text-gray-600 text-sm">{{ __('landing.important_info.discreet_description') }}</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <div class="text-2xl mb-4">🛠️</div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ __('landing.important_info.premium_tools_title') }}</h3>
                            <p class="text-gray-600 text-sm">{{ __('landing.important_info.premium_tools_description') }}</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Add-On Services --}}
            <section class="py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('landing.addons.title') }}</h2>
                        <p class="text-lg text-gray-600">{{ __('landing.addons.subtitle') }}</p>
                    </div>

                    <div class="max-w-4xl mx-auto">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">{{ __('landing.addons.service_header') }}</th>
                                            <th class="px-6 py-4 text-right text-sm font-semibold text-gray-900">{{ __('landing.addons.price_header') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 text-sm text-gray-900">{{ __('landing.addons.interview_coaching') }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-900 text-right font-semibold">120.–</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 text-sm text-gray-900">{{ __('landing.addons.express_application') }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-900 text-right font-semibold">59.– {{ __('landing.addons.per_application') }}</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 text-sm text-gray-900">{{ __('landing.addons.cv_review') }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-900 text-right font-semibold">49.–</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 text-sm text-gray-900">{{ __('landing.addons.linkedin_optimization') }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-900 text-right font-semibold">89.–</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 text-sm text-gray-900">{{ __('landing.addons.reference_check') }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-900 text-right font-semibold">59.–</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 text-sm text-gray-900">{{ __('landing.addons.personal_coaching') }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-900 text-right font-semibold">120.– {{ __('landing.addons.per_hour') }}</td>
                                        </tr>
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
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('landing.faq.title') }}</h2>
                        <p class="text-lg text-gray-600">{{ __('landing.faq.subtitle') }}</p>
                    </div>

                    <div class="space-y-8">
                        <div class="bg-white p-8 rounded-lg shadow-sm">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">{{ __('landing.faq.cancel_anytime_q') }}</h3>
                            <p class="text-gray-600">{{ __('landing.faq.cancel_anytime_a') }}</p>
                        </div>
                        <div class="bg-white p-8 rounded-lg shadow-sm">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">{{ __('landing.faq.employers_know_q') }}</h3>
                            <p class="text-gray-600">{{ __('landing.faq.employers_know_a') }}</p>
                        </div>
                        <div class="bg-white p-8 rounded-lg shadow-sm">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">{{ __('landing.faq.hidden_fees_q') }}</h3>
                            <p class="text-gray-600">{{ __('landing.faq.hidden_fees_a') }}</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- DETAILED ABOUT SECTION --}}
            <section id="about" class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
                <div class="mx-auto max-w-7xl px-6 text-center">
                    <h1 class="text-4xl lg:text-5xl font-bold mb-6">
                        {{ __('landing.about_detailed.title') }}
                    </h1>
                    <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-8">
                        {{ __('landing.about_detailed.subtitle') }}
                    </p>
                    <div class="inline-flex items-center px-4 py-2 bg-white/20 rounded-full text-sm backdrop-blur">
                        {{ __('landing.about_detailed.founded_badge') }}
                    </div>
                </div>
            </section>

            {{-- Mission Section --}}
            <section class="py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ __('landing.about_detailed.mission_title') }}</h2>
                            <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                                {{ __('landing.about_detailed.mission_text_1') }}
                            </p>
                            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                                {{ __('landing.about_detailed.mission_text_2') }}
                            </p>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">{{ __('landing.about_detailed.mission_feature_1') }}</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">{{ __('landing.about_detailed.mission_feature_2') }}</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">{{ __('landing.about_detailed.mission_feature_3') }}</span>
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
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('landing.about_detailed.different_title') }}</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            {{ __('landing.about_detailed.different_subtitle') }}
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-0 shadow-lg">
                            <div class="p-8 text-center">
                                <div class="text-4xl mb-4">🎯</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('landing.about_detailed.swiss_expertise_title') }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ __('landing.about_detailed.swiss_expertise_description') }}
                                </p>
                            </div>
                        </div>
                        
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-0 shadow-lg">
                            <div class="p-8 text-center">
                                <div class="text-4xl mb-4">🔧</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('landing.about_detailed.premium_tools_title') }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ __('landing.about_detailed.premium_tools_description') }}
                                </p>
                            </div>
                        </div>
                        
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-0 shadow-lg">
                            <div class="p-8 text-center">
                                <div class="text-4xl mb-4">👤</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('landing.about_detailed.complete_discretion_title') }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ __('landing.about_detailed.complete_discretion_description') }}
                                </p>
                            </div>
                        </div>
                        
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-0 shadow-lg">
                            <div class="p-8 text-center">
                                <div class="text-4xl mb-4">🤝</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('landing.about_detailed.personal_touch_title') }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ __('landing.about_detailed.personal_touch_description') }}
                                </p>
                            </div>
                        </div>
                        
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-0 shadow-lg">
                            <div class="p-8 text-center">
                                <div class="text-4xl mb-4">📊</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('landing.about_detailed.data_driven_title') }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ __('landing.about_detailed.data_driven_description') }}
                                </p>
                            </div>
                        </div>
                        
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-0 shadow-lg">
                            <div class="p-8 text-center">
                                <div class="text-4xl mb-4">⚡</div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('landing.about_detailed.fast_response_title') }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ __('landing.about_detailed.fast_response_description') }}
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
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('landing.about_detailed.process_title') }}</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            {{ __('landing.about_detailed.process_subtitle') }}
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">1</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('landing.about_detailed.discovery_call') }}</h3>
                            <p class="text-gray-600">{{ __('landing.about_detailed.discovery_call_description') }}</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">2</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('landing.about_detailed.market_research') }}</h3>
                            <p class="text-gray-600">{{ __('landing.about_detailed.market_research_description') }}</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">3</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('landing.about_detailed.application_creation') }}</h3>
                            <p class="text-gray-600">{{ __('landing.about_detailed.application_creation_description') }}</p>
                        </div>
                        
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">4</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('landing.about_detailed.interview_support') }}</h3>
                            <p class="text-gray-600">{{ __('landing.about_detailed.interview_support_description') }}</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Statistics --}}
            <section class="bg-blue-50 py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('landing.about_detailed.track_record_title') }}</h2>
                        <p class="text-lg text-gray-600">{{ __('landing.about_detailed.track_record_subtitle') }}</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center bg-white p-8 rounded-lg shadow-sm">
                            <div class="text-4xl font-bold text-blue-900 mb-2">500+</div>
                            <div class="text-gray-600">{{ __('landing.about_detailed.successful_placements') }}</div>
                        </div>
                        <div class="text-center bg-white p-8 rounded-lg shadow-sm">
                            <div class="text-4xl font-bold text-blue-900 mb-2">100%</div>
                            <div class="text-gray-600">{{ __('landing.about_detailed.discreet_service') }}</div>
                        </div>
                        <div class="text-center bg-white p-8 rounded-lg shadow-sm">
                            <div class="text-4xl font-bold text-blue-900 mb-2">24h</div>
                            <div class="text-gray-600">{{ __('landing.about_detailed.response_time') }}</div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Values --}}
            <section class="py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('landing.about_detailed.values_title') }}</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            {{ __('landing.about_detailed.values_subtitle') }}
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 text-xl">🔒</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('landing.about_detailed.confidentiality_title') }}</h3>
                                <p class="text-gray-600">{{ __('landing.about_detailed.confidentiality_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 text-xl">🎯</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('landing.about_detailed.excellence_title') }}</h3>
                                <p class="text-gray-600">{{ __('landing.about_detailed.excellence_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 text-xl">🤝</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('landing.about_detailed.partnership_title') }}</h3>
                                <p class="text-gray-600">{{ __('landing.about_detailed.partnership_description') }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-blue-600 text-xl">📈</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ __('landing.about_detailed.results_title') }}</h3>
                                <p class="text-gray-600">{{ __('landing.about_detailed.results_description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <x-cta />
        </div>
    </body>
</html>