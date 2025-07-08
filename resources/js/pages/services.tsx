import { Button } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import { Head, Link } from '@inertiajs/react';

interface Service {
    title: string;
    description: string;
    image: string;
    icon: string;
    details: string[];
    price?: string;
}

interface ServicesProps {
    services: Service[];
}

export default function Services({ services }: ServicesProps) {
    return (
        <>
            <Head title="Services - JobHunter" />

            <div className="min-h-screen bg-white">
                {/* Navigation */}
                <nav className="bg-white border-b border-gray-200 sticky top-0 z-50">
                    <div className="mx-auto max-w-7xl px-6 py-4">
                        <div className="flex items-center justify-between">
                            <div className="flex items-center space-x-8">
                                <Link href="/" className="text-xl font-bold text-blue-900">JobHunter 🇨🇭</Link>
                                <Link href="/services" className="text-blue-600 font-medium">Services</Link>
                                <Link href="/pricing" className="text-gray-600 hover:text-blue-600 transition-colors">Pricing</Link>
                                <Link href="/about" className="text-gray-600 hover:text-blue-600 transition-colors">About</Link>
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
                            Professional Job Search Services
                        </h1>
                        <p className="text-xl text-blue-100 max-w-3xl mx-auto mb-8">
                            We combine premium recruiting technology with human expertise to give you an unfair advantage in the Swiss job market.
                        </p>
                        <div className="inline-flex items-center px-4 py-2 bg-white/20 rounded-full text-sm backdrop-blur">
                            🇨🇭 Specialized in the Swiss job market
                        </div>
                    </div>
                </section>

                {/* Services Grid */}
                <section className="py-20">
                    <div className="mx-auto max-w-7xl px-6">
                        <div className="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3">
                            {services.map((service, index) => (
                                <Card key={index} className="overflow-hidden border-0 shadow-lg hover:shadow-xl transition-shadow">
                                    <div className="relative aspect-[4/3] overflow-hidden">
                                        <img
                                            src={service.image}
                                            alt={service.title}
                                            className="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                                        />
                                        <div className="absolute top-4 left-4 text-4xl">{service.icon}</div>
                                        {service.price && (
                                            <div className="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                                {service.price}
                                            </div>
                                        )}
                                    </div>
                                    <CardContent className="p-8">
                                        <h3 className="mb-4 text-2xl font-bold text-gray-900">{service.title}</h3>
                                        <p className="mb-6 text-gray-600 leading-relaxed">{service.description}</p>
                                        
                                        <div className="mb-6">
                                            <h4 className="text-sm font-semibold text-gray-900 mb-3 uppercase tracking-wide">What's included:</h4>
                                            <ul className="space-y-2">
                                                {service.details.map((detail, detailIndex) => (
                                                    <li key={detailIndex} className="flex items-start text-sm text-gray-600">
                                                        <span className="text-green-500 mr-2 mt-1">✓</span>
                                                        <span>{detail}</span>
                                                    </li>
                                                ))}
                                            </ul>
                                        </div>
                                        
                                        <Button className="w-full bg-blue-600 text-white hover:bg-blue-700">
                                            Learn More
                                        </Button>
                                    </CardContent>
                                </Card>
                            ))}
                        </div>
                    </div>
                </section>

                {/* How It Works Section */}
                <section className="bg-gray-50 py-20">
                    <div className="mx-auto max-w-7xl px-6">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl font-bold text-gray-900 mb-4">How It Works</h2>
                            <p className="text-lg text-gray-600 max-w-2xl mx-auto">
                                Our process is designed to be completely transparent and stress-free for you.
                            </p>
                        </div>

                        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div className="text-center">
                                <div className="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">1</div>
                                <h3 className="text-xl font-semibold text-gray-900 mb-2">Consultation Call</h3>
                                <p className="text-gray-600">We discuss your goals, experience, and preferences in a 30-minute call.</p>
                            </div>
                            <div className="text-center">
                                <div className="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">2</div>
                                <h3 className="text-xl font-semibold text-gray-900 mb-2">We Take Action</h3>
                                <p className="text-gray-600">Our team finds opportunities, creates documents, and manages applications.</p>
                            </div>
                            <div className="text-center">
                                <div className="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">3</div>
                                <h3 className="text-xl font-semibold text-gray-900 mb-2">You Interview</h3>
                                <p className="text-gray-600">Focus on what matters most - preparing for and attending interviews.</p>
                            </div>
                        </div>
                    </div>
                </section>

                {/* CTA Section */}
                <section className="bg-blue-900 text-white py-20">
                    <div className="mx-auto max-w-4xl px-6 text-center">
                        <h2 className="text-3xl font-bold mb-6">Ready to Get Started?</h2>
                        <p className="text-xl text-blue-100 mb-8">
                            Book a free consultation call to discuss your specific needs and goals.
                        </p>
                        <div className="flex flex-col gap-4 sm:flex-row sm:justify-center">
                            <Button size="lg" className="bg-white text-blue-900 hover:bg-gray-100">
                                Book Free Consultation
                            </Button>
                            <Button size="lg" variant="outline" className="border-white text-white hover:bg-white hover:text-blue-900">
                                View Pricing
                            </Button>
                        </div>
                    </div>
                </section>
            </div>
        </>
    );
}