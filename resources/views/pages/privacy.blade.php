<x-layouts.app>
    <x-slot name="title">{{ $contents['hero_title'] ?? 'Política de Privacidade' }} | ABP Group</x-slot>

    <!-- Hero Banner -->
    <x-hero title="{{ $contents['hero_title'] ?? 'Política de Privacidade' }}"
        subtitle="{{ $contents['hero_subtitle'] ?? 'A sua privacidade é importante para nós. Saiba como recolhemos, utilizamos e protegemos os seus dados.' }}"
        bgImage="https://images.unsplash.com/photo-1450101499163-c8848c66cb85?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80"
        theme="corporate" height="short" />

    <!-- Content Section -->
    <section class="py-24 bg-white text-left">
        <div class="container mx-auto px-6 max-w-[800px]">
            <div class="prose max-w-none font-secondary text-gray-800 leading-relaxed">
                {!! $contents['content'] ?? '' !!}
            </div>
        </div>
    </section>
</x-layouts.app>
