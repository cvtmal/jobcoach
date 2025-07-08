<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Services - JobHunter</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            <x-navigation currentPage="services" />

            {{-- Hero Section --}}
            <section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
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

            {{-- Services Grid --}}
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

            <x-cta />
        </div>
    </body>
</html>