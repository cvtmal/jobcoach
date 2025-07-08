@props(['currentPage' => '', 'style' => 'default'])

@php
    $isLandingStyle = $style === 'landing';
    $navClasses = $isLandingStyle 
        ? 'absolute top-0 right-0 left-0 z-50 p-6'
        : 'bg-white border-b border-gray-200 sticky top-0 z-50';
    $containerClasses = $isLandingStyle 
        ? 'mx-auto flex max-w-7xl items-center justify-between'
        : 'mx-auto max-w-7xl px-6 py-4';
    $logoClasses = $isLandingStyle 
        ? 'text-xl font-bold text-white'
        : 'text-xl font-bold text-blue-900';
    $linkBaseClasses = $isLandingStyle 
        ? 'text-white transition-colors hover:text-gray-300'
        : 'text-gray-600 hover:text-blue-600 transition-colors';
    $activeLinkClasses = $isLandingStyle 
        ? 'text-white transition-colors hover:text-gray-300'
        : 'text-blue-600 font-medium';
    $buttonClasses = $isLandingStyle 
        ? 'border border-white bg-transparent text-white hover:bg-white hover:text-black'
        : 'border border-blue-600 bg-transparent text-blue-600 hover:bg-blue-50';
@endphp

<nav class="{{ $navClasses }}">
    <div class="{{ $containerClasses }}">
        @if(!$isLandingStyle)
            <div class="flex items-center justify-between">
        @endif
        
        <div class="flex items-center space-x-8">
            <a href="/" class="{{ $logoClasses }}">JobHunter 🇨🇭</a>
            <a href="/services" class="{{ $currentPage === 'services' ? $activeLinkClasses : $linkBaseClasses }}">
                @if($isLandingStyle)
                    {{ __('common.navigation.services') }}
                @else
                    Services
                @endif
            </a>
            <a href="/pricing" class="{{ $currentPage === 'pricing' ? $activeLinkClasses : $linkBaseClasses }}">
                @if($isLandingStyle)
                    {{ __('common.navigation.pricing') }}
                @else
                    Pricing
                @endif
            </a>
            <a href="/about" class="{{ $currentPage === 'about' ? $activeLinkClasses : $linkBaseClasses }}">
                @if($isLandingStyle)
                    {{ __('common.navigation.about') }}
                @else
                    About
                @endif
            </a>
        </div>
        
        <div class="flex items-center space-x-4">
            @if($isLandingStyle)
                {{-- Language Switcher --}}
                <div class="relative inline-block text-left">
                    <div>
                        <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-white/20 hover:bg-white/20" id="language-menu-button" aria-expanded="true" aria-haspopup="true">
                            {{ strtoupper(app()->getLocale()) }}
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                <button class="text-white transition-colors hover:text-gray-300">{{ __('common.navigation.contact') }}</button>
            @endif
            
            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 {{ $buttonClasses }} h-10 px-4 py-2">
                @if($isLandingStyle)
                    {{ __('common.buttons.free_consultation') }}
                @else
                    Free Consultation
                @endif
            </button>
        </div>
        
        @if(!$isLandingStyle)
            </div>
        @endif
    </div>
</nav>