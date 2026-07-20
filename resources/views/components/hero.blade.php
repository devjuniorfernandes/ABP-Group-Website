@props([
    'title' => '',
    'subtitle' => '',
    'bgImage' => '',
    'bgVideo' => '',
    'theme' => 'corporate' /* options: corporate, enviro, oil, mat, build */,
    'height' => 'medium',
])

@php
    $heightClass = $height === 'screen' 
        ? 'h-screen min-h-screen flex items-center' 
        : 'h-[250px] flex items-end pb-8';

    $overlayClass =
        [
            'corporate' => 'bg-gradient-to-r from-black/85 via-black/50 to-transparent',
            'about' => 'bg-gradient-to-r from-black/85 via-black/50 to-transparent',
            'enviro' => 'bg-[#1a3317]/75',
            'oil' => 'bg-[#061127]/80',
            'mat' => 'bg-[#1a2c42]/75',
            'build' => 'bg-[#1d1510]/75',
        ][$theme] ?? 'bg-corporate-primary/75';

    $badgeClass =
        [
            'enviro' => 'bg-enviro-accent text-enviro-primary',
            'oil' => 'bg-oil-accent text-oil-primary',
            'mat' => 'bg-mat-accent text-mat-primary',
            'build' => 'bg-build-primary text-white',
        ][$theme] ?? 'bg-corporate-accent text-corporate-primary';
@endphp

<section
    class="relative w-full {{ $heightClass }} bg-cover bg-center bg-no-repeat text-white overflow-hidden"
    style="background-image: url('{{ $bgImage }}');">
    @if ($bgVideo)
        <video autoplay loop muted playsinline
            class="absolute inset-0 w-full h-full object-cover pointer-events-none z-0">
            <source src="{{ $bgVideo }}" type="video/mp4">
        </video>
    @endif
    <div class="absolute inset-0 z-10 {{ $overlayClass }}"></div>
    <div class="container mx-auto px-6 max-w-[1200px] relative z-20 w-full">
        @if ($title)
            <div class="max-w-[800px] text-left animate-fade-in">
                @if ($theme !== 'corporate' && $theme !== 'about')
                    <span
                        class="inline-block px-3 py-1 text-xs font-extrabold uppercase tracking-widest rounded mb-2 {{ $badgeClass }}">
                        {{ strtoupper($theme) }}
                    </span>
                @endif
                <h1 class="font-primary text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight">
                    {{ $title }}
                </h1>
                @if ($subtitle)
                    <p class="font-secondary text-sm md:text-base opacity-90 leading-relaxed max-w-[650px] mt-2">
                        {{ $subtitle }}
                    </p>
                @endif
                @if ($height === 'screen')
                    <div class="mt-6">
                        <a href="{{ route('about') }}"
                            class="inline-flex items-center justify-center px-8 py-3 bg-[#2d4b8e] hover:bg-[#20376d] text-white font-primary font-bold text-sm uppercase tracking-wider transition-all duration-300 shadow-md">
                            SAIBA MAIS
                        </a>
                    </div>
                @endif
            </div>
        @endif
    </div>
</section>
