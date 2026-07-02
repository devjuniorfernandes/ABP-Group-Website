@props([
    'title' => '',
    'subtitle' => '',
    'bgImage' => '',
    'bgVideo' => '',
    'theme' => 'corporate' /* options: corporate, enviro, oil, mat, build */,
    'height' => 'medium' /* options: tall, medium, short */,
])

@php
    $heightClass =
        [
            'tall' => 'min-h-[80vh] md:min-h-[85vh]',
            'medium' => 'min-h-[55vh] md:min-h-[60vh]',
            'short' => 'min-h-[35vh] md:min-h-[40vh]',
            'ultra-short' => 'min-h-[15vh] md:min-h-[20vh] h-[15vh] md:h-[20vh]',
        ][$height] ?? 'min-h-[60vh]';

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

    $paddingClass = $height === 'ultra-short' ? 'py-4' : 'py-16 md:py-24';
@endphp

<section
    class="relative bg-cover bg-center bg-no-repeat flex items-center text-white pt-20 {{ $heightClass }} overflow-hidden"
    style="background-image: url('{{ $bgImage }}');">
    @if ($bgVideo)
        <video autoplay loop muted playsinline
            class="absolute inset-0 w-full h-full object-cover pointer-events-none z-0">
            <source src="{{ $bgVideo }}" type="video/mp4">
        </video>
    @endif
    <div class="absolute inset-0 z-10 {{ $overlayClass }}"></div>
    <div class="container mx-auto px-6 max-w-[1200px] relative z-20 w-full {{ $paddingClass }}">
        @if ($title)
            <div class="max-w-[800px] text-left animate-fade-in">
                @if ($theme !== 'corporate' && $theme !== 'about')
                    <span
                        class="inline-block px-4 py-1.5 text-xs font-extrabold uppercase tracking-widest rounded mb-6 {{ $badgeClass }}">
                        {{ strtoupper($theme) }}
                    </span>
                @endif
                <h1 class="font-primary text-4xl md:text-5xl lg:text-6.5xl font-extrabold mb-6">
                    {{ $title }}
                </h1>
                @if ($subtitle)
                    <p class="font-secondary text-base md:text-base opacity-90 leading-relaxed max-w-[650px] mb-10">
                        {{ $subtitle }}
                    </p>
                @endif

                @if ($theme === 'corporate')
                    <div class="flex flex-wrap gap-4 justify-start">
                        <a href="{{ route('about') }}"
                            class="inline-flex items-center justify-center px-8 py-3 bg-[#2d4b8e] hover:bg-[#20376d] text-white font-primary font-bold text-sm uppercase tracking-wider transition-all duration-300">
                            SAIBA MAIS
                        </a>
                    </div>
                @endif
            </div>
        @endif
    </div>
</section>
