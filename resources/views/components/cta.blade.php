{{-- CTA Section --}}
<section class="relative text-white">
    <div class="absolute inset-0">
        <img
            src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
            alt="Coastal lighthouse mountain adventure"
            class="h-full w-full object-cover"
        />
        <div class="absolute inset-0 bg-black/50"></div>
    </div>
    <div class="relative px-6 py-20">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="mb-6 text-4xl font-bold">{{ __('landing.cta.title') }}</h2>
            <p class="mb-8 text-xl text-gray-200">
                {{ __('landing.cta.subtitle') }}
            </p>
            <div class="flex flex-col gap-4 sm:flex-row sm:justify-center">
                <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-blue-900 hover:bg-gray-100 h-11 px-8">
                    {{ __('common.buttons.book_consultation') }}
                </button>
                <a href="/pricing" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-white bg-transparent text-white hover:bg-white hover:text-blue-900 h-11 px-8">
                    {{ __('common.buttons.view_all_plans') }}
                </a>
            </div>
            <p class="mt-6 text-sm text-gray-300">{{ __('landing.cta.footer_text') }}</p>
        </div>
    </div>
</section>