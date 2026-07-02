@props([
    'title' => '',
    'description' => '',
    'image' => '',
    'link' => '#',
    'category' => '',
    'accentColor' => 'brand-red',
])

<a href="{{ $link }}">
    <div
        class="bg-white overflow-hidden border border-gray-100 transition-all duration-300 transform hover:-translate-y-2 group">
        <div class="relative overflow-hidden aspect-[16/10]">
            <img src="{{ $image }}" alt="{{ $title }}"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
            @if ($category)
                <span
                    class="absolute top-4 left-4 px-3 py-1.5 bg-corporate-primary/85 text-white text-[11px] font-bold uppercase rounded z-10">
                    {{ $category }}
                </span>
            @endif

        </div>
        <div class="p-6">
            <h3
                class="font-primary text-lg font-bold text-corporate-primary mb-2 transition-colors group-hover:text-corporate-secondary">
                {{ $title }}</h3>
            <p class="font-secondary text-sm text-gray-500 leading-relaxed">{{ $description }}</p>
            <span class="inline-flex items-center gap-1.5 text-xs font-bold text-{{ $accentColor }} mt-4 ">
                Ver mais
                <svg width="14" height="14"
                    class="transform group-hover:translate-x-1 transition-transform"
                    fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </span>
        </div>
    </div>
</a>
