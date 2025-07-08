import { Button } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import { Head, Link } from '@inertiajs/react';
import { useTranslation } from '@/hooks/useTranslation';
import LanguageSwitcher from '@/components/LanguageSwitcher';

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
    const { t, getArray } = useTranslation();
    
    return (
        <>
            <Head title="JobHunter - Swiss Job Search Support" />

            <div className="min-h-screen bg-white">
                {/* Navigation */}
                <nav className="absolute top-0 right-0 left-0 z-50 p-6">
                    <div className="mx-auto flex max-w-7xl items-center justify-between">
                        <div className="flex items-center space-x-8">
                            <Link href="/" className="text-xl font-bold text-white">JobHunter 🇨🇭</Link>
                            <Link href="/services" className="text-white transition-colors hover:text-gray-300">{t('common.navigation.services')}</Link>
                            <Link href="/pricing" className="text-white transition-colors hover:text-gray-300">{t('common.navigation.pricing')}</Link>
                            <Link href="/about" className="text-white transition-colors hover:text-gray-300">{t('common.navigation.about')}</Link>
                        </div>
                        <div className="flex items-center space-x-4">
                            <LanguageSwitcher />
                            <button className="text-white transition-colors hover:text-gray-300">{t('common.navigation.contact')}</button>
                            <Button variant="outline" className="border-white text-white hover:bg-white hover:text-black">
                                {t('common.buttons.free_consultation')}
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
                                {t('landing.hero.switzerland_service')}
                            </div>
                            <h1 className="mb-6 text-5xl leading-tight font-bold lg:text-6xl">{t('landing.hero.title')}</h1>
                            <p className="mb-8 max-w-lg text-xl text-gray-200">
                                {t('landing.hero.subtitle')}
                            </p>
                            <div className="flex flex-col gap-4 sm:flex-row">
                                <Link href="/pricing">
                                    <Button size="lg" className="bg-white text-blue-900 hover:bg-gray-100">
                                        {t('common.buttons.view_plans')} →
                                    </Button>
                                </Link>
                                <Button size="lg" variant="outline" className="border-white text-white hover:bg-white hover:text-blue-900">
                                    {t('common.buttons.get_started')}
                                </Button>
                            </div>
                            <p className="mt-4 text-sm text-gray-300">{t('landing.hero.pricing_info')}</p>
                        </div>

                        <div className="flex justify-center lg:justify-end">
                            <div className="rounded-2xl bg-white/10 p-8 backdrop-blur">
                                <div className="text-center">
                                    <div className="text-4xl font-bold text-white">100%</div>
                                    <div className="text-sm text-gray-200">{t('landing.hero.discreet_badge')}</div>
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
                                <h2 className="mb-4 text-sm font-semibold tracking-wide text-blue-600">{t('landing.about.section_title')}</h2>
                                <div className="text-lg leading-relaxed text-gray-800" dangerouslySetInnerHTML={{ __html: t('landing.about.description') }} />
                                <div className="mt-6 space-y-4">
                                    {getArray('landing.about.features').map((feature: string, index: number) => (
                                        <div key={index} className="flex items-center space-x-3">
                                            <div className="h-2 w-2 rounded-full bg-blue-600"></div>
                                            <span className="text-gray-700">{feature}</span>
                                        </div>
                                    ))}
                                </div>
                            </div>

                            {/* Stats */}
                            <div className="grid grid-cols-3 gap-8">
                                <div className="text-center">
                                    <div className="mb-2 text-4xl font-bold text-blue-900">{stats.plans}</div>
                                    <div className="text-sm text-gray-600">{t('common.service_plans')}</div>
                                </div>
                                <div className="text-center">
                                    <div className="mb-2 text-3xl font-bold text-blue-900">{stats.monthly_price}</div>
                                    <div className="text-sm text-gray-600">{t('common.monthly_pricing')}</div>
                                </div>
                                <div className="text-center">
                                    <div className="mb-2 text-4xl font-bold text-blue-900">{stats.success_rate}</div>
                                    <div className="text-sm text-gray-600">{t('common.discreet_service')}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {/* Services Section */}
                <section className="bg-gray-50 px-6 py-20">
                    <div className="mx-auto max-w-7xl">
                        <div className="mb-16 text-center">
                            <h2 className="mb-4 text-3xl font-bold text-gray-900">{t('landing.services.title')}</h2>
                            <p className="mx-auto max-w-2xl text-lg text-gray-600">
                                {t('landing.services.subtitle')}
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
                                        <Link href="/services">
                                            <Button variant="link" className="h-auto p-0 text-blue-600 hover:text-blue-800">
                                                {t('common.buttons.learn_more')} →
                                            </Button>
                                        </Link>
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
                            <h2 className="mb-4 text-3xl font-bold text-gray-900">{t('landing.pricing.title')}</h2>
                            <p className="text-lg text-gray-600">{t('landing.pricing.subtitle')}</p>
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
                                            {t('common.most_popular')}
                                        </div>
                                    )}
                                    <CardContent className={`p-6 ${plan.popular ? 'pt-12' : ''}`}>
                                        <div className="text-center">
                                            <div className="text-2xl mb-2">{plan.emoji}</div>
                                            <h3 className="mb-2 text-lg font-semibold text-gray-900">{plan.name}</h3>
                                            <div className="mb-4">
                                                <span className="text-2xl font-bold text-blue-900">{plan.price}</span>
                                                <span className="text-gray-600 text-sm">{t('common.per_month')}</span>
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
                                                {plan.popular ? t('common.buttons.get_started') : t('common.buttons.learn_more')}
                                            </Button>
                                        </div>
                                    </CardContent>
                                </Card>
                            ))}
                        </div>

                        <div className="mt-12 text-center">
                            <Link href="/pricing">
                                <Button variant="outline" size="lg" className="border-blue-600 text-blue-600 hover:bg-blue-50">
                                    {t('common.buttons.view_all_plans')} →
                                </Button>
                            </Link>
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
                            <h2 className="mb-6 text-4xl font-bold">{t('landing.cta.title')}</h2>
                            <p className="mb-8 text-xl text-gray-200">
                                {t('landing.cta.subtitle')}
                            </p>
                            <div className="flex flex-col gap-4 sm:flex-row sm:justify-center">
                                <Button size="lg" className="bg-white text-blue-900 hover:bg-gray-100">
                                    {t('common.buttons.book_consultation')}
                                </Button>
                                <Link href="/pricing">
                                    <Button size="lg" variant="outline" className="border-white text-white hover:bg-white hover:text-blue-900">
                                        {t('common.buttons.view_all_plans')}
                                    </Button>
                                </Link>
                            </div>
                            <p className="mt-6 text-sm text-gray-300">{t('landing.cta.footer_text')}</p>
                        </div>
                    </div>
                </section>
            </div>
        </>
    );
}
