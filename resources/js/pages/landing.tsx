import { Button } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import { Head } from '@inertiajs/react';

interface LandingProps {
    stats: {
        plans: string;
        monthly_price: string;
        success_rate: string;
    };
    services: Array<{
        title: string;
        description: string;
        image: string;
        icon: string;
    }>;
    pricing_preview: Array<{
        name: string;
        price: string;
        description: string;
        features: string[];
        emoji: string;
        popular: boolean;
    }>;
}

export default function Landing({ stats, services, pricing_preview }: LandingProps) {
    return (
        <>
            <Head title="JobHunter - Swiss Job Search Support" />

            <div className="min-h-screen bg-white">
                {/* Navigation */}
                <nav className="absolute top-0 right-0 left-0 z-50 p-6">
                    <div className="mx-auto flex max-w-7xl items-center justify-between">
                        <div className="flex items-center space-x-8">
                            <div className="text-xl font-bold text-white">JobHunter 🇨🇭</div>
                            <button className="text-white transition-colors hover:text-gray-300">Services</button>
                            <button className="text-white transition-colors hover:text-gray-300">Pricing</button>
                            <button className="text-white transition-colors hover:text-gray-300">About</button>
                        </div>
                        <div className="flex items-center space-x-4">
                            <button className="text-white transition-colors hover:text-gray-300">Contact</button>
                            <Button variant="outline" className="border-white text-white hover:bg-white hover:text-black">
                                Free Consultation
                            </Button>
                        </div>
                    </div>
                </nav>

                {/* Hero Section */}
                <section className="relative flex h-screen items-center">
                    {/* Background Image */}
                    <div className="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-blue-700/60">
                        <img
                            src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                            alt="Rock climbing mountain adventure"
                            className="h-full w-full object-cover"
                        />
                    </div>

                    {/* Hero Content */}
                    <div className="relative z-10 mx-auto grid max-w-7xl grid-cols-1 items-center gap-12 px-6 lg:grid-cols-2">
                        <div className="text-white">
                            <div className="mb-4 inline-flex items-center rounded-full bg-white/20 px-4 py-2 text-sm backdrop-blur">
                                🇨🇭 Switzerland's Job Search Support Service
                            </div>
                            <h1 className="mb-6 text-5xl leading-tight font-bold lg:text-6xl">We handle the admin, you focus on the interviews.</h1>
                            <p className="mb-8 max-w-lg text-xl text-gray-200">
                                Professional job search support in Switzerland. We manage applications, craft documents, and find opportunities — all
                                while staying completely invisible to employers.
                            </p>
                            <div className="flex flex-col gap-4 sm:flex-row">
                                <Button size="lg" className="bg-white text-blue-900 hover:bg-gray-100">
                                    View Plans →
                                </Button>
                                <Button size="lg" variant="outline" className="border-white text-white hover:bg-white hover:text-blue-900">
                                    Get Started
                                </Button>
                            </div>
                            <p className="mt-4 text-sm text-gray-300">Starting from CHF 49/month • 100% discreet • Cancel anytime</p>
                        </div>

                        <div className="flex justify-center lg:justify-end">
                            <div className="rounded-2xl bg-white/10 p-8 backdrop-blur">
                                <div className="text-center">
                                    <div className="text-4xl font-bold text-white">100%</div>
                                    <div className="text-sm text-gray-200">Discreet Service</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {/* About Section */}
                <section className="px-6 py-20">
                    <div className="mx-auto max-w-7xl">
                        <div className="grid grid-cols-1 items-center gap-16 lg:grid-cols-2">
                            <div>
                                <h2 className="mb-4 text-sm font-semibold tracking-wide text-blue-600">[How we work]</h2>
                                <p className="text-lg leading-relaxed text-gray-800">
                                    We are <strong>not</strong> a recruitment agency. We handle the administrative burden of your job search in
                                    Switzerland — from finding opportunities to crafting applications — while remaining completely invisible to
                                    employers.
                                </p>
                                <div className="mt-6 space-y-4">
                                    <div className="flex items-center space-x-3">
                                        <div className="h-2 w-2 rounded-full bg-blue-600"></div>
                                        <span className="text-gray-700">100% discreet service</span>
                                    </div>
                                    <div className="flex items-center space-x-3">
                                        <div className="h-2 w-2 rounded-full bg-blue-600"></div>
                                        <span className="text-gray-700">Professional recruiting tools</span>
                                    </div>
                                    <div className="flex items-center space-x-3">
                                        <div className="h-2 w-2 rounded-full bg-blue-600"></div>
                                        <span className="text-gray-700">Dedicated personal consultant</span>
                                    </div>
                                </div>
                            </div>

                            {/* Stats */}
                            <div className="grid grid-cols-3 gap-8">
                                <div className="text-center">
                                    <div className="mb-2 text-4xl font-bold text-blue-900">{stats.plans}</div>
                                    <div className="text-sm text-gray-600">Service Plans</div>
                                </div>
                                <div className="text-center">
                                    <div className="mb-2 text-3xl font-bold text-blue-900">{stats.monthly_price}</div>
                                    <div className="text-sm text-gray-600">Monthly Pricing</div>
                                </div>
                                <div className="text-center">
                                    <div className="mb-2 text-4xl font-bold text-blue-900">{stats.success_rate}</div>
                                    <div className="text-sm text-gray-600">Discreet Service</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {/* Services Section */}
                <section className="bg-gray-50 px-6 py-20">
                    <div className="mx-auto max-w-7xl">
                        <div className="mb-16 text-center">
                            <h2 className="mb-4 text-3xl font-bold text-gray-900">What makes us different</h2>
                            <p className="mx-auto max-w-2xl text-lg text-gray-600">
                                We combine premium recruiting technology with human expertise to give you an unfair advantage in the Swiss job market.
                            </p>
                        </div>

                        <div className="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                            {services.map((service, index) => (
                                <Card key={index} className="overflow-hidden border-0 shadow-sm transition-shadow hover:shadow-lg">
                                    <div className="relative aspect-[4/3] overflow-hidden">
                                        <img
                                            src={service.image}
                                            alt={service.title}
                                            className="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                                        />
                                        <div className="absolute top-4 left-4 text-4xl">{service.icon}</div>
                                    </div>
                                    <CardContent className="p-6">
                                        <h3 className="mb-3 text-xl font-semibold text-gray-900">{service.title}</h3>
                                        <p className="mb-4 leading-relaxed text-gray-600">{service.description}</p>
                                        <Button variant="link" className="h-auto p-0 text-blue-600 hover:text-blue-800">
                                            Learn More →
                                        </Button>
                                    </CardContent>
                                </Card>
                            ))}
                        </div>
                    </div>
                </section>

                {/* Pricing Preview Section */}
                <section className="px-6 py-20">
                    <div className="mx-auto max-w-7xl">
                        <div className="mb-16 text-center">
                            <h2 className="mb-4 text-3xl font-bold text-gray-900">Choose your plan</h2>
                            <p className="text-lg text-gray-600">Transparent pricing with no hidden fees. Cancel anytime.</p>
                        </div>

                        <div className="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
                            {pricing_preview.map((plan, index) => (
                                <Card
                                    key={index}
                                    className={`relative overflow-hidden transition-all hover:shadow-xl ${
                                        plan.popular ? 'scale-105 border-2 border-blue-500' : 'border border-gray-200'
                                    }`}
                                >
                                    {plan.popular && (
                                        <div className="absolute top-0 right-0 left-0 bg-blue-500 py-2 text-center text-sm font-semibold text-white">
                                            Most Popular
                                        </div>
                                    )}
                                    <CardContent className={`p-6 ${plan.popular ? 'pt-12' : ''}`}>
                                        <div className="text-center">
                                            <div className="text-2xl mb-2">{plan.emoji}</div>
                                            <h3 className="mb-2 text-lg font-semibold text-gray-900">{plan.name}</h3>
                                            <div className="mb-4">
                                                <span className="text-2xl font-bold text-blue-900">{plan.price}</span>
                                                <span className="text-gray-600 text-sm">/month</span>
                                            </div>
                                            <p className="mb-4 text-sm text-gray-600 leading-relaxed">{plan.description}</p>
                                            
                                            <div className="mb-6 text-left">
                                                <ul className="space-y-2">
                                                    {plan.features.map((feature, featureIndex) => (
                                                        <li key={featureIndex} className="flex items-start text-xs text-gray-600">
                                                            <span className="text-green-500 mr-2 mt-1">✓</span>
                                                            <span>{feature}</span>
                                                        </li>
                                                    ))}
                                                </ul>
                                            </div>
                                            
                                            <Button
                                                className={`w-full text-sm ${
                                                    plan.popular
                                                        ? 'bg-blue-600 text-white hover:bg-blue-700'
                                                        : 'bg-gray-100 text-gray-900 hover:bg-gray-200'
                                                }`}
                                            >
                                                {plan.popular ? 'Get Started' : 'Learn More'}
                                            </Button>
                                        </div>
                                    </CardContent>
                                </Card>
                            ))}
                        </div>

                        <div className="mt-12 text-center">
                            <Button variant="outline" size="lg" className="border-blue-600 text-blue-600 hover:bg-blue-50">
                                View All Plans & Features →
                            </Button>
                        </div>
                    </div>
                </section>

                {/* CTA Section */}
                <section className="relative text-white">
                    <div className="absolute inset-0">
                        <img
                            src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                            alt="Coastal lighthouse mountain adventure"
                            className="h-full w-full object-cover"
                        />
                        <div className="absolute inset-0 bg-black/50"></div>
                    </div>
                    <div className="relative px-6 py-20">
                        <div className="mx-auto max-w-4xl text-center">
                            <h2 className="mb-6 text-4xl font-bold">Ready to land your dream job in Switzerland?</h2>
                            <p className="mb-8 text-xl text-gray-200">
                                Join hundreds of professionals who trust us with their job search. Get started with a free consultation call.
                            </p>
                            <div className="flex flex-col gap-4 sm:flex-row sm:justify-center">
                                <Button size="lg" className="bg-white text-blue-900 hover:bg-gray-100">
                                    Book Free Consultation
                                </Button>
                                <Button size="lg" variant="outline" className="border-white text-white hover:bg-white hover:text-blue-900">
                                    View All Plans
                                </Button>
                            </div>
                            <p className="mt-6 text-sm text-gray-300">🇨🇭 Specialized in the Swiss job market • No commitment required</p>
                        </div>
                    </div>
                </section>
            </div>
        </>
    );
}
