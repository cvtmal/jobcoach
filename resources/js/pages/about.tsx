import { Button } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import { Head, Link } from '@inertiajs/react';

export default function About() {
    return (
        <>
            <Head title="About - JobHunter" />

            <div className="min-h-screen bg-white">
                {/* Navigation */}
                <nav className="bg-white border-b border-gray-200 sticky top-0 z-50">
                    <div className="mx-auto max-w-7xl px-6 py-4">
                        <div className="flex items-center justify-between">
                            <div className="flex items-center space-x-8">
                                <Link href="/" className="text-xl font-bold text-blue-900">JobHunter 🇨🇭</Link>
                                <Link href="/services" className="text-gray-600 hover:text-blue-600 transition-colors">Services</Link>
                                <Link href="/pricing" className="text-gray-600 hover:text-blue-600 transition-colors">Pricing</Link>
                                <Link href="/about" className="text-blue-600 font-medium">About</Link>
                            </div>
                            <div className="flex items-center space-x-4">
                                <Button variant="outline" className="border-blue-600 text-blue-600 hover:bg-blue-50">
                                    Free Consultation
                                </Button>
                            </div>
                        </div>
                    </div>
                </nav>

                {/* Hero Section */}
                <section className="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
                    <div className="mx-auto max-w-7xl px-6 text-center">
                        <h1 className="text-4xl lg:text-5xl font-bold mb-6">
                            About JobHunter
                        </h1>
                        <p className="text-xl text-blue-100 max-w-3xl mx-auto mb-8">
                            We're Switzerland's leading job search support service, helping professionals focus on what matters most - landing their dream job.
                        </p>
                        <div className="inline-flex items-center px-4 py-2 bg-white/20 rounded-full text-sm backdrop-blur">
                            🇨🇭 Founded in Switzerland • Serving professionals nationwide
                        </div>
                    </div>
                </section>

                {/* Mission Section */}
                <section className="py-20">
                    <div className="mx-auto max-w-7xl px-6">
                        <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                            <div>
                                <h2 className="text-3xl font-bold text-gray-900 mb-6">Our Mission</h2>
                                <p className="text-lg text-gray-600 mb-6 leading-relaxed">
                                    We believe that every professional deserves to focus on their strengths rather than getting bogged down by the administrative burden of job searching. Our mission is to handle the complex, time-consuming tasks of finding opportunities and crafting applications, so you can concentrate on what you do best.
                                </p>
                                <p className="text-lg text-gray-600 mb-8 leading-relaxed">
                                    We're not a recruitment agency - we're your personal job search team, working behind the scenes to give you an unfair advantage in the Swiss job market.
                                </p>
                                <div className="space-y-4">
                                    <div className="flex items-center space-x-3">
                                        <div className="w-2 h-2 bg-blue-600 rounded-full"></div>
                                        <span className="text-gray-700 font-medium">100% transparent process</span>
                                    </div>
                                    <div className="flex items-center space-x-3">
                                        <div className="w-2 h-2 bg-blue-600 rounded-full"></div>
                                        <span className="text-gray-700 font-medium">Completely invisible to employers</span>
                                    </div>
                                    <div className="flex items-center space-x-3">
                                        <div className="w-2 h-2 bg-blue-600 rounded-full"></div>
                                        <span className="text-gray-700 font-medium">Specialized in Swiss job market</span>
                                    </div>
                                </div>
                            </div>
                            <div className="relative">
                                <img
                                    src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                    alt="Team collaboration"
                                    className="rounded-lg shadow-xl"
                                />
                            </div>
                        </div>
                    </div>
                </section>

                {/* How We're Different */}
                <section className="bg-gray-50 py-20">
                    <div className="mx-auto max-w-7xl px-6">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl font-bold text-gray-900 mb-4">How We're Different</h2>
                            <p className="text-lg text-gray-600 max-w-2xl mx-auto">
                                We're not like other job search services. Here's what makes us unique.
                            </p>
                        </div>

                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <Card className="border-0 shadow-lg">
                                <CardContent className="p-8 text-center">
                                    <div className="text-4xl mb-4">🎯</div>
                                    <h3 className="text-xl font-semibold text-gray-900 mb-4">Swiss Market Expertise</h3>
                                    <p className="text-gray-600 leading-relaxed">
                                        We understand the unique requirements, cultural nuances, and application processes specific to the Swiss job market.
                                    </p>
                                </CardContent>
                            </Card>
                            
                            <Card className="border-0 shadow-lg">
                                <CardContent className="p-8 text-center">
                                    <div className="text-4xl mb-4">🔧</div>
                                    <h3 className="text-xl font-semibold text-gray-900 mb-4">Premium Tools</h3>
                                    <p className="text-gray-600 leading-relaxed">
                                        We use advanced recruiting software and databases that are typically only available to professional recruiters.
                                    </p>
                                </CardContent>
                            </Card>
                            
                            <Card className="border-0 shadow-lg">
                                <CardContent className="p-8 text-center">
                                    <div className="text-4xl mb-4">👤</div>
                                    <h3 className="text-xl font-semibold text-gray-900 mb-4">Complete Discretion</h3>
                                    <p className="text-gray-600 leading-relaxed">
                                        Employers never know we're involved. All applications appear to come directly from you, maintaining your personal brand.
                                    </p>
                                </CardContent>
                            </Card>
                            
                            <Card className="border-0 shadow-lg">
                                <CardContent className="p-8 text-center">
                                    <div className="text-4xl mb-4">🤝</div>
                                    <h3 className="text-xl font-semibold text-gray-900 mb-4">Personal Touch</h3>
                                    <p className="text-gray-600 leading-relaxed">
                                        Every client gets a dedicated consultant who understands their goals and manages their entire process.
                                    </p>
                                </CardContent>
                            </Card>
                            
                            <Card className="border-0 shadow-lg">
                                <CardContent className="p-8 text-center">
                                    <div className="text-4xl mb-4">📊</div>
                                    <h3 className="text-xl font-semibold text-gray-900 mb-4">Data-Driven</h3>
                                    <p className="text-gray-600 leading-relaxed">
                                        We track application success rates and continuously optimize our approach based on real market data.
                                    </p>
                                </CardContent>
                            </Card>
                            
                            <Card className="border-0 shadow-lg">
                                <CardContent className="p-8 text-center">
                                    <div className="text-4xl mb-4">⚡</div>
                                    <h3 className="text-xl font-semibold text-gray-900 mb-4">Fast Response</h3>
                                    <p className="text-gray-600 leading-relaxed">
                                        We act quickly on new opportunities and maintain responsive communication throughout the process.
                                    </p>
                                </CardContent>
                            </Card>
                        </div>
                    </div>
                </section>

                {/* Our Process */}
                <section className="py-20">
                    <div className="mx-auto max-w-7xl px-6">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl font-bold text-gray-900 mb-4">Our Process</h2>
                            <p className="text-lg text-gray-600 max-w-2xl mx-auto">
                                A transparent, step-by-step approach designed to get you results.
                            </p>
                        </div>

                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                            <div className="text-center">
                                <div className="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">1</div>
                                <h3 className="text-xl font-semibold text-gray-900 mb-4">Discovery Call</h3>
                                <p className="text-gray-600">We learn about your background, goals, and preferences in a detailed consultation.</p>
                            </div>
                            
                            <div className="text-center">
                                <div className="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">2</div>
                                <h3 className="text-xl font-semibold text-gray-900 mb-4">Market Research</h3>
                                <p className="text-gray-600">We identify opportunities using premium tools and our extensive network.</p>
                            </div>
                            
                            <div className="text-center">
                                <div className="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">3</div>
                                <h3 className="text-xl font-semibold text-gray-900 mb-4">Application Creation</h3>
                                <p className="text-gray-600">We craft tailored applications that highlight your unique value proposition.</p>
                            </div>
                            
                            <div className="text-center">
                                <div className="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">4</div>
                                <h3 className="text-xl font-semibold text-gray-900 mb-4">Interview Support</h3>
                                <p className="text-gray-600">We prepare you for success and provide ongoing support throughout the process.</p>
                            </div>
                        </div>
                    </div>
                </section>

                {/* Statistics */}
                <section className="bg-blue-50 py-20">
                    <div className="mx-auto max-w-7xl px-6">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl font-bold text-gray-900 mb-4">Our Track Record</h2>
                            <p className="text-lg text-gray-600">Numbers that speak for themselves</p>
                        </div>

                        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div className="text-center bg-white p-8 rounded-lg shadow-sm">
                                <div className="text-4xl font-bold text-blue-900 mb-2">500+</div>
                                <div className="text-gray-600">Successful Placements</div>
                            </div>
                            <div className="text-center bg-white p-8 rounded-lg shadow-sm">
                                <div className="text-4xl font-bold text-blue-900 mb-2">100%</div>
                                <div className="text-gray-600">Discreet Service</div>
                            </div>
                            <div className="text-center bg-white p-8 rounded-lg shadow-sm">
                                <div className="text-4xl font-bold text-blue-900 mb-2">24h</div>
                                <div className="text-gray-600">Average Response Time</div>
                            </div>
                        </div>
                    </div>
                </section>

                {/* Values */}
                <section className="py-20">
                    <div className="mx-auto max-w-7xl px-6">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl font-bold text-gray-900 mb-4">Our Values</h2>
                            <p className="text-lg text-gray-600 max-w-2xl mx-auto">
                                The principles that guide everything we do.
                            </p>
                        </div>

                        <div className="grid grid-cols-1 md:grid-cols-2 gap-12">
                            <div className="flex items-start space-x-4">
                                <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span className="text-blue-600 text-xl">🔒</span>
                                </div>
                                <div>
                                    <h3 className="text-xl font-semibold text-gray-900 mb-2">Confidentiality</h3>
                                    <p className="text-gray-600">Your privacy is paramount. We never reveal our involvement to employers or compromise your personal brand.</p>
                                </div>
                            </div>
                            
                            <div className="flex items-start space-x-4">
                                <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span className="text-blue-600 text-xl">🎯</span>
                                </div>
                                <div>
                                    <h3 className="text-xl font-semibold text-gray-900 mb-2">Excellence</h3>
                                    <p className="text-gray-600">We maintain the highest standards in everything we do, from document creation to client communication.</p>
                                </div>
                            </div>
                            
                            <div className="flex items-start space-x-4">
                                <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span className="text-blue-600 text-xl">🤝</span>
                                </div>
                                <div>
                                    <h3 className="text-xl font-semibold text-gray-900 mb-2">Partnership</h3>
                                    <p className="text-gray-600">We see ourselves as your partner in success, not just a service provider. Your goals become our goals.</p>
                                </div>
                            </div>
                            
                            <div className="flex items-start space-x-4">
                                <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span className="text-blue-600 text-xl">📈</span>
                                </div>
                                <div>
                                    <h3 className="text-xl font-semibold text-gray-900 mb-2">Results</h3>
                                    <p className="text-gray-600">We're committed to delivering measurable results and continuously improving our approach.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {/* CTA Section */}
                <section className="bg-blue-900 text-white py-20">
                    <div className="mx-auto max-w-4xl px-6 text-center">
                        <h2 className="text-3xl font-bold mb-6">Ready to Work Together?</h2>
                        <p className="text-xl text-blue-100 mb-8">
                            Book a free consultation call to learn how we can support your career goals.
                        </p>
                        <div className="flex flex-col gap-4 sm:flex-row sm:justify-center">
                            <Button size="lg" className="bg-white text-blue-900 hover:bg-gray-100">
                                Book Free Consultation
                            </Button>
                            <Button size="lg" variant="outline" className="border-white text-white hover:bg-white hover:text-blue-900">
                                View Our Services
                            </Button>
                        </div>
                    </div>
                </section>
            </div>
        </>
    );
}