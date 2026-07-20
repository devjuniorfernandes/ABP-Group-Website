<x-layouts.app :solidHeader="true">
    <x-slot name="title">{{ $post->title }} | ABP Group</x-slot>

    <!-- Header Section -->
    <section class="pt-24 pb-12 bg-gray-50 border-b border-gray-100">
        <div class="container mx-auto px-6 max-w-[900px] text-left">
            <a href="{{ route('news') }}" class="inline-flex items-center text-sm font-bold text-[#e51718] hover:text-[#c41314] transition-colors mb-8">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Voltar para Notícias
            </a>
            
            <div class="flex items-center gap-3 mb-4">
                <span class="px-2.5 py-1 text-[11px] font-bold uppercase bg-red-50 text-[#e51718]">
                    {{ $post->category }}
                </span>
                <span class="font-primary text-xs font-bold uppercase tracking-widest text-gray-500 block">
                    {{ $post->published_at ? $post->published_at->format('d M Y') : $post->created_at->format('d M Y') }}
                </span>
            </div>
            
            <h1 class="font-primary text-3xl md:text-5xl font-extrabold text-[#1a2c42] leading-tight mb-8">
                {{ $post->title }}
            </h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16">
        <div class="container mx-auto px-6 max-w-[900px]">
            <!-- Cover Image 16:9 -->
            @if($post->cover_image)
                <img src="{{ asset('storage/' . $post->cover_image) }}" alt="{{ $post->title }}" class="w-full aspect-video object-cover rounded-xl mb-12 shadow-sm">
            @endif
            
            <div class="prose prose-lg max-w-none text-gray-600 font-secondary text-left">
                <!-- Summary block -->
                <p class="mb-6 font-bold text-xl text-gray-800 border-l-4 border-[#e51718] pl-4">
                    {{ $post->summary }}
                </p>

                <!-- Rich text content block -->
                <div class="rich-text-content">
                    {!! $post->content !!}
                </div>
                
                <!-- Author Footer info -->
                <div class="mt-12 pt-8 border-t border-gray-200 text-xs text-gray-500 font-medium">
                    Autor: <span class="font-bold text-[#1a2c42]">{{ $post->author_name ?? 'Equipa Editorial' }}</span>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
