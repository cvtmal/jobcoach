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

        @vite(['resources/css/app.css'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            <x-navigation style="landing" />

            {{-- Hero Section --}}
            <section class="relative flex h-screen items-center">
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
                            <a href="/pricing" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-blue-900 hover:bg-gray-100 h-11 px-8">
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

            {{-- Services Section --}}
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
                                    <a href="/services" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-blue-600 underline-offset-4 hover:underline h-auto p-0 hover:text-blue-800">
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
                        <a href="/pricing" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-blue-600 bg-transparent text-blue-600 hover:bg-blue-50 h-11 px-8">
                            {{ __('common.buttons.view_all_plans') }} →
                        </a>
                    </div>
                </div>
            </section>

            <x-cta />
        </div>
    </body>
</html>