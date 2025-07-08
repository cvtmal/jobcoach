@props(['currentPage' => '', 'style' => 'default'])

@php
    $isLandingStyle = $style === 'landing';
    $navClasses = $isLandingStyle 
        ? 'fixed top-0 right-0 left-0 z-50 p-5 transition-all duration-300'
        : 'bg-white/80 backdrop-blur-md border-b border-gray-200/50 sticky top-0 z-50';
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

<nav class="{{ $navClasses }}" x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)" :class="scrolled ? '{{ $isLandingStyle ? "bg-black/10 backdrop-blur-md" : "" }}' : ''">
    <div class="{{ $containerClasses }}">
        @if(!$isLandingStyle)
            <div class="flex items-center justify-between">
        @endif
        
        {{-- Logo --}}
        <div class="flex items-center">
            <a href="/" class="{{ $logoClasses }}">JobHunter 🇨🇭</a>
        </div>
        
        {{-- Hamburger Menu Button --}}
        <div class="flex items-center">
            <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md transition-colors z-[60]" :class="open ? 'text-white hover:text-gray-300' : '{{ $isLandingStyle ? 'text-white hover:text-gray-300' : 'text-gray-600 hover:text-blue-600' }}'">
                <span class="sr-only" x-text="open ? 'Close main menu' : 'Open main menu'">Open main menu</span>
                {{-- Hamburger icon --}}
                <svg x-show="!open" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                {{-- Close icon --}}
                <svg x-show="open" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        @if(!$isLandingStyle)
            </div>
        @endif
    </div>
    
    {{-- Mobile Menu --}}
    <div x-show="open" x-cloak @click.away="open = false" @keydown.escape.window="open = false" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 min-h-screen bg-black/80 backdrop-blur-lg">
        <div class="flex flex-col justify-center items-end h-full px-8 py-16" role="menu" aria-orientation="vertical">
            <div class="flex flex-col space-y-6 items-end">
                <a href="#services-detail" @click="open = false" class="px-4 py-3 text-right text-3xl hover:font-bold font-medium text-white hover:text-gray-300 transition-colors" role="menuitem">
                    @if($isLandingStyle)
                        {{ __('common.navigation.services') }}
                    @else
                        Services
                    @endif
                </a>
                <a href="#pricing" @click="open = false" class="px-4 py-3 text-right text-3xl hover:font-bold font-medium text-white hover:text-gray-300 transition-colors" role="menuitem">
                    @if($isLandingStyle)
                        {{ __('common.navigation.pricing') }}
                    @else
                        Pricing
                    @endif
                </a>
                <a href="#about" @click="open = false" class="px-4 py-3 text-right text-3xl hover:font-bold font-medium text-white hover:text-gray-300 transition-colors" role="menuitem">
                    @if($isLandingStyle)
                        {{ __('common.navigation.about') }}
                    @else
                        About
                    @endif
                </a>
            </div>
            
            @if($isLandingStyle)
                {{-- Language Switcher --}}
                <div class="mt-12 flex flex-col items-end space-y-8">
                    {{-- Language Switcher --}}
                    <div class="flex items-center space-x-6 px-4">
                        <button @click="open = false" class="text-xl text-white hover:text-gray-300 transition-colors {{ app()->getLocale() === 'de' ? 'font-semibold' : '' }}">DE</button>
                        <button @click="open = false" class="text-xl text-white hover:text-gray-300 transition-colors {{ app()->getLocale() === 'en' ? 'font-semibold' : '' }}">EN</button>
                    </div>
                </div>
            @endif
        </div>
    </div>
</nav>