import { Button } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import { Head, Link } from '@inertiajs/react';

interface PricingPlan {
    name: string;
    price: string;
    description: string;
    features: string[];
    emoji: string;
    popular: boolean;
}

interface AddOnService {
    service: string;
    price: string;
}

interface PricingProps {
    plans: PricingPlan[];
    addOns: AddOnService[];
}

export default function Pricing({ plans, addOns }: PricingProps) {
    return (
        <>
            <Head title="Pricing - JobHunter" />

            <div className="min-h-screen bg-white">
                {/* Navigation */}
                <nav className="bg-white border-b border-gray-200 sticky top-0 z-50">
                    <div className="mx-auto max-w-7xl px-6 py-4">
                        <div className="flex items-center justify-between">
                            <div className="flex items-center space-x-8">
                                <Link href="/" className="text-xl font-bold text-blue-900">JobHunter 🇨🇭</Link>
                                <Link href="/services" className="text-gray-600 hover:text-blue-600 transition-colors">Services</Link>
                                <Link href="/pricing" className="text-blue-600 font-medium">Pricing</Link>
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
                            Transparent Pricing
                        </h1>
                        <p className="text-xl text-blue-100 max-w-3xl mx-auto mb-8">
                            Choose the plan that fits your needs. All plans include our 100% discreet service and can be cancelled anytime.
                        </p>
                        <div className="inline-flex items-center px-4 py-2 bg-white/20 rounded-full text-sm backdrop-blur">
                            🇨🇭 CHF 49-399/month • No hidden fees • Cancel anytime
                        </div>
                    </div>
                </section>

                {/* Pricing Plans */}
                <section className="py-20">
                    <div className="mx-auto max-w-7xl px-6">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl font-bold text-gray-900 mb-4">Monthly Subscription Plans</h2>
                            <p className="text-lg text-gray-600">All plans include personal onboarding call and dedicated consultant</p>
                        </div>

                        <div className="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
                            {plans.map((plan, index) => (
                                <Card
                                    key={index}
                                    className={`relative overflow-hidden transition-all hover:shadow-xl ${
                                        plan.popular ? 'scale-105 border-2 border-blue-500 shadow-lg' : 'border border-gray-200'
                                    }`}
                                >
                                    {plan.popular && (
                                        <div className="absolute top-0 right-0 left-0 bg-blue-500 py-2 text-center text-sm font-semibold text-white">
                                            Most Popular
                                        </div>
                                    )}
                                    <CardContent className={`p-8 ${plan.popular ? 'pt-12' : ''}`}>
                                        <div className="text-center">
                                            <div className="text-4xl mb-4">{plan.emoji}</div>
                                            <h3 className="text-2xl font-bold text-gray-900 mb-2">{plan.name}</h3>
                                            <div className="mb-6">
                                                <span className="text-4xl font-bold text-blue-900">{plan.price}</span>
                                                <span className="text-gray-600 text-lg">/month</span>
                                            </div>
                                            <p className="text-gray-600 mb-8 leading-relaxed">{plan.description}</p>
                                            
                                            <div className="mb-8 text-left">
                                                <h4 className="text-sm font-semibold text-gray-900 mb-4 uppercase tracking-wide">Includes:</h4>
                                                <ul className="space-y-3">
                                                    {plan.features.map((feature, featureIndex) => (
                                                        <li key={featureIndex} className="flex items-start text-sm text-gray-600">
                                                            <span className="text-green-500 mr-3 mt-1">✓</span>
                                                            <span>{feature}</span>
                                                        </li>
                                                    ))}
                                                </ul>
                                            </div>
                                            
                                            <Button
                                                className={`w-full text-lg py-3 ${
                                                    plan.popular
                                                        ? 'bg-blue-600 text-white hover:bg-blue-700'
                                                        : 'bg-gray-100 text-gray-900 hover:bg-gray-200'
                                                }`}
                                            >
                                                {plan.popular ? 'Get Started' : 'Choose Plan'}
                                            </Button>
                                        </div>
                                    </CardContent>
                                </Card>
                            ))}
                        </div>
                    </div>
                </section>

                {/* Important Information */}
                <section className="bg-blue-50 py-16">
                    <div className="mx-auto max-w-7xl px-6">
                        <div className="text-center mb-12">
                            <h2 className="text-2xl font-bold text-gray-900 mb-4">🔐 Important Information</h2>
                            <p className="text-gray-600">Applies to all plans</p>
                        </div>

                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <div className="bg-white p-6 rounded-lg shadow-sm">
                                <div className="text-2xl mb-4">🚫</div>
                                <h3 className="text-lg font-semibold text-gray-900 mb-2">Not a recruitment agency</h3>
                                <p className="text-gray-600 text-sm">We solely handle the administrative work of your job search – job research, application document creation, submission, and follow-ups.</p>
                            </div>
                            <div className="bg-white p-6 rounded-lg shadow-sm">
                                <div className="text-2xl mb-4">👤</div>
                                <h3 className="text-lg font-semibold text-gray-900 mb-2">100% Discreet</h3>
                                <p className="text-gray-600 text-sm">You remain the visible applicant. We act in your name but are never visible to employers. All applications are sent as if you wrote them yourself.</p>
                            </div>
                            <div className="bg-white p-6 rounded-lg shadow-sm">
                                <div className="text-2xl mb-4">🛠️</div>
                                <h3 className="text-lg font-semibold text-gray-900 mb-2">Premium Tools</h3>
                                <p className="text-gray-600 text-sm">We use advanced recruiting software (normally unavailable to individuals) combined with manual search by our team.</p>
                            </div>
                        </div>
                    </div>
                </section>

                {/* Add-On Services */}
                <section className="py-20">
                    <div className="mx-auto max-w-7xl px-6">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl font-bold text-gray-900 mb-4">Add-On Services</h2>
                            <p className="text-lg text-gray-600">Additional services available for any plan</p>
                        </div>

                        <div className="max-w-4xl mx-auto">
                            <div className="bg-white rounded-lg shadow-lg overflow-hidden">
                                <div className="overflow-x-auto">
                                    <table className="w-full">
                                        <thead className="bg-gray-50">
                                            <tr>
                                                <th className="px-6 py-4 text-left text-sm font-semibold text-gray-900">Service</th>
                                                <th className="px-6 py-4 text-right text-sm font-semibold text-gray-900">Price (CHF)</th>
                                            </tr>
                                        </thead>
                                        <tbody className="divide-y divide-gray-200">
                                            {addOns.map((addOn, index) => (
                                                <tr key={index} className="hover:bg-gray-50">
                                                    <td className="px-6 py-4 text-sm text-gray-900">{addOn.service}</td>
                                                    <td className="px-6 py-4 text-sm text-gray-900 text-right font-semibold">{addOn.price}</td>
                                                </tr>
                                            ))}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {/* FAQ Section */}
                <section className="bg-gray-50 py-20">
                    <div className="mx-auto max-w-4xl px-6">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                            <p className="text-lg text-gray-600">Everything you need to know about our pricing</p>
                        </div>

                        <div className="space-y-8">
                            <div className="bg-white p-8 rounded-lg shadow-sm">
                                <h3 className="text-lg font-semibold text-gray-900 mb-3">Can I cancel anytime?</h3>
                                <p className="text-gray-600">Yes, all subscriptions can be cancelled at any time with no penalties or fees.</p>
                            </div>
                            <div className="bg-white p-8 rounded-lg shadow-sm">
                                <h3 className="text-lg font-semibold text-gray-900 mb-3">Will employers know you're helping me?</h3>
                                <p className="text-gray-600">No, we are completely invisible to employers. All applications are sent as if you wrote them yourself.</p>
                            </div>
                            <div className="bg-white p-8 rounded-lg shadow-sm">
                                <h3 className="text-lg font-semibold text-gray-900 mb-3">Are there any hidden fees?</h3>
                                <p className="text-gray-600">No, our pricing is completely transparent. The only additional costs are optional add-on services.</p>
                            </div>
                        </div>
                    </div>
                </section>

                {/* CTA Section */}
                <section className="bg-blue-900 text-white py-20">
                    <div className="mx-auto max-w-4xl px-6 text-center">
                        <h2 className="text-3xl font-bold mb-6">Ready to Get Started?</h2>
                        <p className="text-xl text-blue-100 mb-8">
                            Book a free consultation call to discuss which plan is right for you.
                        </p>
                        <div className="flex flex-col gap-4 sm:flex-row sm:justify-center">
                            <Button size="lg" className="bg-white text-blue-900 hover:bg-gray-100">
                                Book Free Consultation
                            </Button>
                            <Button size="lg" variant="outline" className="border-white text-white hover:bg-white hover:text-blue-900">
                                Contact Us
                            </Button>
                        </div>
                    </div>
                </section>
            </div>
        </>
    );
}