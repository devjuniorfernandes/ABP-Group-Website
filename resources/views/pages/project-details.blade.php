<x-layouts.app :solidHeader="true">
    <x-slot name="title">{{ $project->title }} | ABP Group</x-slot>

    <!-- Hero Banner -->
    <div class="relative w-full h-[110px] flex items-center overflow-hidden bg-black">
        <div class="absolute inset-0 w-full h-full z-0">
            <img src="{{ $project->cover_image ? asset('storage/' . $project->cover_image) : asset('images/panther-build-hero.png') }}" alt="{{ $project->title }}" class="absolute inset-0 w-full h-full object-cover opacity-60">
        </div>
    </div>

    <!-- Project Info -->
    <section class="py-20">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-left">
                <!-- Description -->
                <div class="md:col-span-2">
                    <img src="{{ $project->cover_image ? asset('storage/' . $project->cover_image) : asset('images/panther-build-hero.png') }}" alt="{{ $project->title }}" class="w-full aspect-video object-cover rounded-xl mb-8 shadow-sm">
                    
                    <div class="mb-8 text-left">
                        <span class="font-primary text-sm font-bold uppercase tracking-widest text-[#e51718] mb-2 block">{{ $project->category }}</span>
                        <h1 class="font-primary text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#1a2c42] leading-tight">
                            {{ $project->title }}
                        </h1>
                    </div>

                    <h2 class="font-primary text-2xl font-bold text-[#1a2c42] mb-6 text-left">Sobre o Projecto</h2>
                    <div class="text-gray-600 leading-relaxed space-y-4">
                        {!! nl2br(e($project->description)) !!}
                    </div>
                </div>

                <!-- Details -->
                <div class="bg-gray-50 p-8 rounded-lg border border-gray-100 h-fit flex flex-col">
                    <h3 class="font-primary text-xl font-bold text-[#1a2c42] mb-6">Detalhes</h3>
                    <ul class="space-y-6">
                        <li>
                            <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Cliente</span>
                            <span class="text-gray-800 font-medium">{{ $project->client ?? 'N/A' }}</span>
                        </li>
                        <li>
                            <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Localização</span>
                            <span class="text-gray-800 font-medium">{{ $project->location ?? 'N/A' }}</span>
                        </li>
                        <li>
                            <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Data de Conclusão</span>
                            <span class="text-gray-800 font-medium">{{ $project->year ?? 'N/A' }}</span>
                        </li>
                        <li>
                            <span class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Área de Intervenção</span>
                            <span class="text-gray-800 font-medium">{{ $project->category }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Gallery -->
    @php $gallery = json_decode($project->gallery_images, true) ?: []; @endphp
    @if(!empty($gallery))
        <section class="pb-24">
            <div class="container mx-auto px-6 max-w-[1200px]">
                <h2 class="font-primary text-3xl font-bold text-[#1a2c42] mb-10 text-center">Galeria do Projecto</h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach($gallery as $img)
                        <a href="{{ asset('storage/' . $img) }}" class="gallery-link block overflow-hidden rounded-lg group aspect-video relative cursor-pointer">
                            <img src="{{ asset('storage/' . $img) }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Galeria Imagem {{ $loop->iteration }}">
                            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                                <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                            </div>
                        </a>
                    @endforeach
                </div>
                
                <div class="mt-16 text-center">
                    <a href="{{ route('projects') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-gray-100 text-gray-700 font-primary font-bold text-sm rounded-full transition-colors hover:bg-gray-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        Voltar aos Projectos
                    </a>
                </div>
            </div>
        </section>
    @else
        <section class="pb-24">
            <div class="container mx-auto px-6 max-w-[1200px] text-center">
                <a href="{{ route('projects') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-gray-100 text-gray-700 font-primary font-bold text-sm rounded-full transition-colors hover:bg-gray-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Voltar aos Projectos
                </a>
            </div>
        </section>
    @endif

    <!-- Lightbox -->
    <div id="lightbox" class="fixed inset-0 z-[100] bg-black/95 hidden flex-col justify-center items-center opacity-0 transition-opacity duration-300">
        <button id="lightbox-close" class="absolute top-6 right-6 text-white hover:text-[#e51718] z-50 p-2">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <button id="lightbox-prev" class="absolute left-4 top-1/2 -translate-y-1/2 text-white hover:text-[#e51718] z-50 p-2">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>
        <button id="lightbox-next" class="absolute right-4 top-1/2 -translate-y-1/2 text-white hover:text-[#e51718] z-50 p-2">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>
        
        <div class="relative w-full max-w-5xl h-[80vh] flex items-center justify-center px-16">
            <img id="lightbox-img" src="" alt="Lightbox" class="max-w-full max-h-full object-contain transition-opacity duration-300 opacity-0">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const galleryLinks = document.querySelectorAll('.gallery-link');
            const closeBtn = document.getElementById('lightbox-close');
            const prevBtn = document.getElementById('lightbox-prev');
            const nextBtn = document.getElementById('lightbox-next');

            let currentIndex = 0;
            const images = Array.from(galleryLinks).map(link => link.getAttribute('href'));

            function showLightbox() {
                lightbox.classList.remove('hidden');
                lightbox.classList.add('flex');
                setTimeout(() => {
                    lightbox.classList.remove('opacity-0');
                }, 10);
            }

            function hideLightbox() {
                lightbox.classList.add('opacity-0');
                setTimeout(() => {
                    lightbox.classList.add('hidden');
                    lightbox.classList.remove('flex');
                    lightboxImg.src = '';
                }, 300);
            }

            function updateImage(index) {
                lightboxImg.style.opacity = 0;
                setTimeout(() => {
                    lightboxImg.src = images[index];
                    lightboxImg.style.opacity = 1;
                }, 150);
            }

            galleryLinks.forEach((link, index) => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    currentIndex = index;
                    showLightbox();
                    updateImage(currentIndex);
                });
            });

            closeBtn.addEventListener('click', hideLightbox);
            
            lightbox.addEventListener('click', (e) => {
                if(e.target === lightbox) hideLightbox();
            });

            prevBtn.addEventListener('click', () => {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
                updateImage(currentIndex);
            });

            nextBtn.addEventListener('click', () => {
                currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
                updateImage(currentIndex);
            });
            
            document.addEventListener('keydown', (e) => {
                if (lightbox.classList.contains('hidden')) return;
                
                if (e.key === 'Escape') hideLightbox();
                if (e.key === 'ArrowLeft') {
                    currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
                    updateImage(currentIndex);
                }
                if (e.key === 'ArrowRight') {
                    currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
                    updateImage(currentIndex);
                }
            });
        });
    </script>
</x-layouts.app>
