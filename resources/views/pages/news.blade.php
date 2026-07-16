<x-layouts.app>
    <x-slot name="title">Notícias e Imprensa | ABP Group - Actualizações de Angola</x-slot>

    <!-- Hero Banner -->
    <x-hero title="" subtitle="" bgImage="{{ asset('images/corporate-hero.png') }}" theme="corporate"
        height="ultra-short" />

    <!-- News Grid Section -->
    <section class="section">
        <div class="container">
            <div class="mb-10 text-left">
                <h1 class="font-primary text-4xl md:text-5xl font-extrabold text-[#1a2c42] leading-tight mb-2">Notícias</h1>
                <div class="w-16 border-b-4 border-[#e51718]"></div>
            </div>

            <!-- Search Bar -->
            <form action="{{ route('news') }}" method="GET" class="mb-12 max-w-md">
                <div class="relative">
                    <input type="text" name="search" value="{{ $search }}" placeholder="Pesquisar notícias..."
                        class="w-full pl-12 pr-4 py-3 rounded-full border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-gray-700 bg-gray-50 shadow-sm transition-all placeholder:text-sm">
                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </form>

            @if($posts->isEmpty())
                <div class="py-12 text-center text-gray-500 font-secondary text-lg">
                    Nenhuma notícia encontrada para esta pesquisa.
                </div>
            @else
                <!-- Dynamic Magazine Layout Grid -->
                <div class="mt-8">
                    <!-- Featured Article (Top, Full Width) -->
                    @php $featured = $posts->first(); @endphp
                    @if($featured)
                        <div class="w-full flex flex-col md:flex-row mb-12 rounded-sm overflow-hidden bg-white shadow-sm border border-gray-100">
                            <div class="md:w-[55%] lg:w-[60%]">
                                <a href="{{ route('news.details', $featured->slug) }}" class="block h-full">
                                    <img src="{{ $featured->cover_image ? asset('storage/' . $featured->cover_image) : asset('images/corporate-hero.png') }}" alt="{{ $featured->title }}" class="w-full aspect-video object-cover">
                                </a>
                            </div>
                            <div class="md:w-[45%] lg:w-[40%] p-6 md:p-8 lg:p-10 flex flex-col justify-center">
                                <span class="text-[#e51718] font-bold text-xs uppercase tracking-widest mb-3">{{ $featured->category }}</span>
                                <a href="{{ route('news.details', $featured->slug) }}" class="block group">
                                    <h2 class="font-primary text-2xl md:text-3xl lg:text-3.5xl font-extrabold text-[#1a2c42] mb-3 leading-tight group-hover:text-[#e51718] transition-colors">
                                        {{ $featured->title }}
                                    </h2>
                                </a>
                                <p class="text-gray-600 font-secondary text-sm md:text-base leading-relaxed mb-6 line-clamp-3">
                                    {{ $featured->summary }}
                                </p>
                                <div class="text-sm font-primary border-t border-gray-200 pt-4 mt-auto">
                                    <span class="font-bold text-[#1a2c42]">Por {{ $featured->author_name ?? 'Equipa Editorial' }}</span><br>
                                    <span class="text-gray-500">{{ $featured->published_at ? $featured->published_at->format('d M Y') : $featured->created_at->format('d M Y') }}</span>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($posts->count() > 1)
                        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
                            <!-- Left Side: Grid of smaller cards -->
                            <div class="lg:col-span-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-12">
                                @foreach($posts->slice(1) as $post)
                                    <div class="group cursor-pointer flex flex-col bg-white p-4 border border-gray-100 shadow-sm">
                                        <a href="{{ route('news.details', $post->slug) }}" class="block w-full mb-4 overflow-hidden rounded-sm">
                                            <img src="{{ $post->cover_image ? asset('storage/' . $post->cover_image) : asset('images/corporate-hero.png') }}" alt="{{ $post->title }}" class="w-full aspect-[4/3] object-cover transition-transform duration-500 group-hover:scale-105">
                                        </a>
                                        <span class="text-[#e51718] font-bold text-[10px] uppercase tracking-widest mb-2">{{ $post->category }}</span>
                                        <a href="{{ route('news.details', $post->slug) }}" class="block flex-grow">
                                            <h3 class="font-primary text-lg font-bold text-[#1a2c42] mb-3 leading-snug group-hover:text-[#e51718] transition-colors line-clamp-3">
                                                {{ $post->title }}
                                            </h3>
                                        </a>
                                        <div class="text-xs font-primary mt-4 pt-3 border-t border-gray-100">
                                            <span class="font-bold text-[#1a2c42]">Por {{ $post->author_name ?? 'Equipa Editorial' }}</span><br>
                                            <span class="text-gray-500">{{ $post->published_at ? $post->published_at->format('d M Y') : $post->created_at->format('d M Y') }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Right Side: Sidebar -->
                            <div class="lg:col-span-1 flex flex-col">
                                <div class="border-t-4 border-[#1a2c42] pt-3 mb-6">
                                    <h3 class="font-primary text-xl font-extrabold text-[#1a2c42]">Mais Populares</h3>
                                </div>
                                <div class="flex flex-col">
                                    @foreach($popular_posts as $popular)
                                        <div class="group cursor-pointer {{ $loop->last ? '' : 'border-b border-gray-200' }} py-5 first:pt-0">
                                            <div class="flex gap-4">
                                                <div class="flex-1">
                                                    <a href="{{ route('news.details', $popular->slug) }}" class="block">
                                                        <h4 class="font-primary text-sm font-bold text-[#1a2c42] mb-2 leading-snug group-hover:text-[#e51718] transition-colors line-clamp-3">
                                                            {{ $popular->title }}
                                                        </h4>
                                                    </a>
                                                    <div class="text-[11px] font-primary text-gray-500">
                                                        {{ $popular->published_at ? $popular->published_at->format('d M Y') : $popular->created_at->format('d M Y') }}<br>
                                                        por <span class="font-bold text-[#1a2c42]">{{ $popular->author_name ?? 'Equipa Editorial' }}</span>
                                                    </div>
                                                </div>
                                                <div class="w-16 h-16 shrink-0 rounded-sm overflow-hidden bg-gray-100 border border-gray-200">
                                                    <img src="{{ $popular->cover_image ? asset('storage/' . $popular->cover_image) : asset('images/corporate-hero.png') }}" class="w-full h-full object-cover">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Pagination -->
                <div class="mt-16 flex justify-center">
                    {{ $posts->links() }}
                </div>
            @endif
        </div>
    </section>
</x-layouts.app>
