<x-layouts.app>
    <x-slot name="title">Projectos | ABP Group - Portfólio de Referência em Angola</x-slot>

    <!-- Hero Banner -->
    <x-hero title="{{ $contents['hero_title'] ?? 'Projectos' }}" subtitle="{{ $contents['hero_subtitle'] ?? '' }}"
        bgImage="{{ isset($contents['hero_image']) ? (str_starts_with($contents['hero_image'], 'http') ? $contents['hero_image'] : (str_starts_with($contents['hero_image'], 'images/') ? asset($contents['hero_image']) : asset('storage/' . $contents['hero_image']))) : asset('images/corporate-hero.png') }}"
        theme="corporate" />

    <!-- Portfolio Grid Section -->
    <section class="section">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <!-- Header aligned to left -->
            <div class="mb-10 text-left">
                <span
                    class="font-primary text-xs font-bold uppercase tracking-widest text-[#e51718] mb-2 block">Realizações do Grupo</span>
                <h2 class="font-primary text-4xl md:text-5xl font-extrabold text-[#1a2c42] leading-tight max-w-3xl">
                    Projectos de Engenharia, Energia e Consultoria
                </h2>
            </div>

            <!-- Search & Filters -->
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6 mb-12">
                <!-- Filters -->
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('projects', ['search' => $search]) }}"
                        class="px-6 py-2.5 font-primary font-medium text-sm rounded-full transition-colors {{ !$category || $category === 'Todos' ? 'bg-[#e51718] text-white shadow-sm hover:bg-red-700' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">Todos</a>
                    <a href="{{ route('projects', ['category' => 'PantherBUILD', 'search' => $search]) }}"
                        class="px-6 py-2.5 font-primary font-medium text-sm rounded-full transition-colors {{ $category === 'PantherBUILD' ? 'bg-[#e51718] text-white shadow-sm hover:bg-red-700' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">PantherBUILD</a>
                    <a href="{{ route('projects', ['category' => 'PantherMAT', 'search' => $search]) }}"
                        class="px-6 py-2.5 font-primary font-medium text-sm rounded-full transition-colors {{ $category === 'PantherMAT' ? 'bg-[#e51718] text-white shadow-sm hover:bg-red-700' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">PantherMAT</a>
                    <a href="{{ route('projects', ['category' => 'PantherOIL', 'search' => $search]) }}"
                        class="px-6 py-2.5 font-primary font-medium text-sm rounded-full transition-colors {{ $category === 'PantherOIL' ? 'bg-[#e51718] text-white shadow-sm hover:bg-red-700' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">PantherOIL</a>
                    <a href="{{ route('projects', ['category' => 'Enviro.AO', 'search' => $search]) }}"
                        class="px-6 py-2.5 font-primary font-medium text-sm rounded-full transition-colors {{ $category === 'Enviro.AO' ? 'bg-[#99c24d] text-white shadow-sm hover:bg-[#86ad3f]' : 'bg-[#99c24d]/20 text-[#3b6b35] hover:bg-[#99c24d]/30' }}">Enviro.AO</a>
                </div>

                <!-- Search Bar -->
                <form action="{{ route('projects') }}" method="GET" class="relative w-full lg:w-80">
                    @if($category)
                        <input type="hidden" name="category" value="{{ $category }}">
                    @endif
                    <input type="text" name="search" value="{{ $search }}" placeholder="Pesquisar projeto..."
                        class="w-full pl-12 pr-4 py-3 bg-white border border-gray-200 rounded-full font-secondary text-sm focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] transition-all shadow-sm">
                    <button type="submit" class="absolute left-4 top-1/2 -translate-y-1/2">
                        <svg class="w-5 h-5 text-gray-400 hover:text-[#e51718]" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>

            @if($projects->isEmpty())
                <div class="py-12 text-center text-gray-500 font-secondary text-lg">
                    Nenhum projeto encontrado para os filtros selecionados.
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($projects as $project)
                        <x-project-card 
                            title="{{ $project->title }}"
                            description="{{ $project->description }}"
                            image="{{ $project->cover_image ? asset('storage/' . $project->cover_image) : asset('images/corporate-hero.png') }}" 
                            category="{{ $project->category }}"
                            link="{{ route('project.details', $project->slug) }}" />
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-20 flex justify-center">
                    {{ $projects->appends(request()->query())->links() }}
                </div>
            @endif
        </div>
    </section>
</x-layouts.app>
