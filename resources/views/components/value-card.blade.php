@props([
    'title' => '',
    'description' => '',
    'theme' => 'corporate', /* options: corporate, enviro, oil, mat, build */
    'icon' => '' /* SVG path string or key */
])

@php
    $cardClass = [
        'corporate' => 'bg-white text-corporate-primary border border-gray-100 hover:shadow-xl',
        'enviro' => 'bg-white text-enviro-primary border border-enviro-accent/30 hover:shadow-xl',
        'oil' => 'bg-white text-oil-primary border border-oil-primary/10 hover:shadow-xl',
        'mat' => 'bg-white text-mat-primary border border-mat-primary/10 hover:shadow-xl',
        'build' => 'bg-white text-build-primary border border-build-primary/10 hover:shadow-xl',
    ][$theme] ?? 'bg-white text-corporate-primary border border-gray-100';

    $iconWrapperClass = [
        'corporate' => 'text-corporate-accent bg-corporate-primary/5',
        'enviro' => 'text-enviro-secondary bg-enviro-primary/5',
        'oil' => 'text-oil-accent bg-oil-primary/5',
        'mat' => 'text-mat-accent bg-mat-primary/5',
        'build' => 'text-build-primary bg-build-primary/5',
    ][$theme] ?? 'text-corporate-accent bg-corporate-primary/5';
@endphp

<div class="p-8 rounded-2xl shadow-sm transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col items-start {{ $cardClass }}">
    @if($icon)
        <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 shrink-0 {{ $iconWrapperClass }}">
            {!! $icon !!}
        </div>
    @endif
    <h3 class="font-primary text-xl font-bold tracking-tight mb-3 uppercase">{{ $title }}</h3>
    <p class="font-secondary text-sm text-gray-500 leading-relaxed">{{ $description }}</p>
</div>
