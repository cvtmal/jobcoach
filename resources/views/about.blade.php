<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About - JobHunter</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            <x-navigation currentPage="about" />

            {{-- Hero Section --}}
            <section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
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