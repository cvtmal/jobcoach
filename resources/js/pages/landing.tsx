import { Button } from '@/components/ui/button';
import { Card, CardContent } from '@/components/ui/card';
import { Head } from '@inertiajs/react';

interface LandingProps {
    stats: {
        locations: string;
        testimonials: string;
        success_rate: string;
    };
    services: Array<{
        title: string;
        description: string;
        image: string;
    }>;
}

export default function Landing({ stats, services }: LandingProps) {
    return (
        <>
            <Head title="Adventure Leadership Coaching" />

            <div className="min-h-screen bg-white">
                {/* Navigation */}
                <nav className="absolute top-0 right-0 left-0 z-50 p-6">
                    <div className="mx-auto flex max-w-7xl items-center justify-between">
                        <div className="flex space-x-8">
                            <button className="text-white transition-colors hover:text-gray-300">Experience</button>
                            <button className="text-white transition-colors hover:text-gray-300">Coaching</button>
                            <button className="text-white transition-colors hover:text-gray-300">About</button>
                        </div>
                        <div className="flex items-center space-x-4">
                            <button className="text-white transition-colors hover:text-gray-300">Point of Contact</button>
                            <Button variant="outline" className="border-white text-white hover:bg-white hover:text-black">
                                Discover
                            </Button>
                        </div>
                    </div>
                </nav>

                {/* Hero Section */}
                <section className="relative flex h-screen items-center">
                    {/* Background Image */}
                    <div className="absolute inset-0 bg-gradient-to-r from-black/70 to-black/30">
                        <img
                            src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                            alt="Rock climbing adventure"
                            className="h-full w-full object-cover"
                        />
                    </div>

                    {/* Hero Content */}
                    <div className="relative z-10 mx-auto grid max-w-7xl grid-cols-1 items-center gap-12 px-6 lg:grid-cols-2">
                        <div className="text-white">
                            <h1 className="mb-6 text-5xl leading-tight font-bold lg:text-6xl">Get ready for the journey of a lifetime.</h1>
                            <p className="mb-8 max-w-lg text-xl text-gray-200">
                                World-class leadership coaching with stunning retreats & badass expeditions to fill in the gaps.
                            </p>
                            <div className="flex flex-col gap-4 sm:flex-row">
                                <Button size="lg" className="bg-white text-black hover:bg-gray-100">
                                    Discover →
                                </Button>
                                <p className="self-center text-sm text-gray-300">
                                    We believe that every journey should be extraordinary, every life well-travelled.
                                </p>
                            </div>
                        </div>

                        <div className="flex justify-end">
                            <Button variant="outline" className="border-white text-white hover:bg-white hover:text-black">
                                Learn More →
                            </Button>
                        </div>
                    </div>
                </section>

                {/* About Section */}
                <section className="px-6 py-20">
                    <div className="mx-auto max-w-7xl">
                        <div className="grid grid-cols-1 items-center gap-16 lg:grid-cols-2">
                            <div>
                                <h2 className="mb-4 text-sm font-semibold tracking-wide text-gray-600">[About us]</h2>
                                <p className="text-lg leading-relaxed text-gray-800">
                                    We provide elite leadership coaching for high performance individuals. Our coaching is reinforced with world team
                                    retreats & expeditions in epic locations.
                                </p>
                            </div>

                            {/* Stats */}
                            <div className="grid grid-cols-3 gap-8">
                                <div className="text-center">
                                    <div className="mb-2 text-4xl font-bold text-gray-900">{stats.locations}</div>
                                    <div className="text-sm text-gray-600">Locations Travelled</div>
                                </div>
                                <div className="text-center">
                                    <div className="mb-2 text-4xl font-bold text-gray-900">{stats.testimonials}</div>
                                    <div className="text-sm text-gray-600">Client Testimonials</div>
                                </div>
                                <div className="text-center">
                                    <div className="mb-2 text-4xl font-bold text-gray-900">{stats.success_rate}</div>
                                    <div className="text-sm text-gray-600">Client Success</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {/* Services Section */}
                <section className="bg-gray-50 px-6 py-20">
                    <div className="mx-auto max-w-7xl">
                        <h2 className="mb-12 text-3xl font-bold text-gray-900">What we do</h2>

                        <div className="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                            {services.map((service, index) => (
                                <Card key={index} className="overflow-hidden transition-shadow hover:shadow-lg">
                                    <div className="aspect-[4/3] overflow-hidden">
                                        <img
                                            src={service.image}
                                            alt={service.title}
                                            className="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                                        />
                                    </div>
                                    <CardContent className="p-6">
                                        <h3 className="mb-3 text-xl font-semibold text-gray-900">{service.title}</h3>
                                        <p className="mb-4 leading-relaxed text-gray-600">{service.description}</p>
                                        <Button variant="link" className="h-auto p-0 text-blue-600 hover:text-blue-800">
                                            Discover More →
                                        </Button>
                                    </CardContent>
                                </Card>
                            ))}
                        </div>
                    </div>
                </section>

                {/* Large Image Section */}
                <section className="relative h-96 lg:h-[60vh]">
                    <img
                        src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                        alt="Coastal lighthouse adventure"
                        className="h-full w-full object-cover"
                    />
                    <div className="absolute inset-0 bg-black/20" />
                </section>
            </div>
        </>
    );
}
