<x-layouts.app>
    <x-slot name="title">Sobre Nós | ABP Group - Compromisso e Crescimento em Angola</x-slot>

    <!-- Hero Banner -->
    <div class="relative w-full h-[250px] flex items-center bg-[#0d1e3d]">
        <div class="absolute inset-0 w-full h-full">
            <img src="{{ isset($contents['hero_image']) ? (str_starts_with($contents['hero_image'], 'http') ? $contents['hero_image'] : (str_starts_with($contents['hero_image'], 'images/') ? asset($contents['hero_image']) : asset('storage/' . $contents['hero_image']))) : 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80' }}"
                alt="About Us Background" class="w-full h-full object-cover opacity-80" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-black/40"></div>
        </div>
        <div class="relative z-10 container mx-auto px-6 max-w-[1200px]">
            <h1 class="font-primary text-4xl md:text-5xl lg:text-6xl font-extrabold text-white">
                {{ $contents['hero_title'] ?? 'About Us' }}</h1>
        </div>
    </div>

    <!-- Intro Text Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1000px]">
            <h2 class="text-[#1c3986] text-4xl md:text-5xl font-extrabold leading-tight mb-8">
                {!! $contents['intro_title'] ??
                    '<span class="text-[#3b4b8a]">Construímos soluções</span><br /><span class="text-[#3b4b8a]">que impulsionam o crescimento</span><br /><span class="text-[#3b4b8a]">e o </span><span class="text-[#cc1f26]">desenvolvimento sustentável</span>' !!}
            </h2>
            <p class="font-secondary text-xl text-gray-800 leading-relaxed font-medium">
                {{ $contents['intro_text'] ?? 'O ABP Group é um grupo empresarial angolano que actua em sectores estratégicos da economia, oferecendo soluções especializadas nas áreas de energia, engenharia, construção, gestão de infraestruturas, saúde e sustentabilidade.' }}
            </p>
        </div>
    </section>

    <!-- Team Image Section -->
    <section class="bg-[#3b4b8a] py-0 relative overflow-hidden">
        <div class="container mx-auto max-w-[1200px] px-0 lg:px-6">
            <img src="{{ isset($contents['team_image']) ? (str_starts_with($contents['team_image'], 'http') ? $contents['team_image'] : (str_starts_with($contents['team_image'], 'images/') ? asset($contents['team_image']) : asset('storage/' . $contents['team_image']))) : 'https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80' }}"
                alt="Equipa ABP Group" class="w-full aspect-video object-cover" />
        </div>
    </section>

    <!-- Legacy / History Text Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-[1000px]">
            <p class="font-secondary text-lg text-gray-800 leading-relaxed mb-8">
                {{ $contents['legacy_text_1'] ?? 'Ao longo da nossa trajectória, consolidámos uma posição de referência através da prestação de serviços especializados e da capacidade de responder aos desafios dos sectores mais exigentes. Acreditamos que o sucesso sustentável é construído através da qualidade, da confiança e da criação de soluções que geram impacto positivo.' }}
            </p>
            <p class="font-secondary text-lg text-gray-800 leading-relaxed">
                {{ $contents['legacy_text_2'] ?? 'Com uma abordagem integrada e uma equipa multidisciplinar, desenvolvemos projectos que combinam conhecimento técnico, inovação e excelência operacional. O nosso compromisso é criar valor duradouro para clientes, parceiros e comunidades, contribuindo activamente para o desenvolvimento económico e social de Angola.' }}
            </p>
        </div>
    </section>

    <!-- Mission, Vision, Values Grid -->
    <section class="pb-12 bg-white">
        <div class="container mx-auto px-6 max-w-[1000px]">
            <div class="grid grid-cols-1 md:grid-cols-3 bg-[#f5f5f5] min-h-[400px]">

                <!-- Missão -->
                <div class="p-10 group hover:bg-[#1c3986] transition-colors duration-300 flex flex-col cursor-default">
                    <h3
                        class="font-primary text-xl font-bold mb-6 text-[#1a2c42] group-hover:text-white uppercase tracking-wide">
                        Missão</h3>
                    <p class="font-secondary text-base leading-relaxed text-gray-700 group-hover:text-white/90">
                        {{ $contents['mission_text'] ?? 'Contribuir para o desenvolvimento sustentável de Angola através da prestação de serviços especializados e soluções integradas, criando valor para clientes, parceiros e comunidades com elevados padrões de qualidade, segurança e excelência operacional.' }}
                    </p>
                </div>

                <!-- Visão -->
                <div
                    class="p-10 group hover:bg-[#1c3986] transition-colors duration-300 flex flex-col cursor-default border-t md:border-t-0 md:border-l border-gray-200 group-hover:border-transparent">
                    <h3
                        class="font-primary text-xl font-bold mb-6 text-[#1a2c42] group-hover:text-white uppercase tracking-wide">
                        Visão</h3>
                    <p class="font-secondary text-base leading-relaxed text-gray-700 group-hover:text-white/90">
                        {{ $contents['vision_text'] ?? 'Ser a referência em Angola na entrega de soluções inovadoras de engenharia, construção e sustentabilidade, promovendo parcerias sólidas de longo prazo.' }}
                    </p>
                </div>

                <!-- Valor -->
                <div
                    class="p-10 group hover:bg-[#1c3986] transition-colors duration-300 flex flex-col cursor-default border-t md:border-t-0 md:border-l border-gray-200 group-hover:border-transparent">
                    <h3
                        class="font-primary text-xl font-bold mb-6 text-[#1a2c42] group-hover:text-white uppercase tracking-wide">
                        Valor</h3>
                    <p class="font-secondary text-base leading-relaxed text-gray-700 group-hover:text-white/90">
                        {{ $contents['values_text'] ?? 'Os nossos valores orientam cada decisão e cada projecto que desenvolvemos. Acreditamos na excelência, na integridade, na inovação e na segurança como pilares fundamentais para construir relações de confiança e gerar impacto positivo e sustentável.' }}
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Stats Grid Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-[1000px]">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 text-center" id="stats-container">
                <!-- Stat 1 -->
                <div>
                    <h3 class="font-primary text-5xl md:text-6xl text-[#3b4b8a] mb-2 font-light">
                        <span class="counter"
                            data-target="{{ $contents['stat1_number'] ?? '150' }}">0</span>{{ $contents['stat1_suffix'] ?? '+' }}
                    </h3>
                    <p class="font-secondary text-sm text-gray-500">
                        {{ $contents['stat1_label'] ?? 'Projetos Concluídos' }}</p>
                </div>
                <!-- Stat 2 -->
                <div>
                    <h3 class="font-primary text-5xl md:text-6xl text-[#3b4b8a] mb-2 font-light">
                        <span class="counter"
                            data-target="{{ $contents['stat2_number'] ?? '450' }}">0</span>{{ $contents['stat2_suffix'] ?? '+' }}
                    </h3>
                    <p class="font-secondary text-sm text-gray-500">
                        {{ $contents['stat2_label'] ?? 'Colaboradores Diretos' }}</p>
                </div>
                <!-- Stat 3 -->
                <div>
                    <h3 class="font-primary text-5xl md:text-6xl text-[#3b4b8a] mb-2 font-light">
                        <span class="counter"
                            data-target="{{ $contents['stat3_number'] ?? '4' }}">0</span>{{ $contents['stat3_suffix'] ?? '' }}
                    </h3>
                    <p class="font-secondary text-sm text-gray-500">
                        {{ $contents['stat3_label'] ?? 'Áreas de Negócio' }}</p>
                </div>
                <!-- Stat 4 -->
                <div>
                    <h3 class="font-primary text-5xl md:text-6xl text-[#3b4b8a] mb-2 font-light">
                        <span class="counter"
                            data-target="{{ $contents['stat4_number'] ?? '15' }}">0</span>{{ $contents['stat4_suffix'] ?? '+' }}
                    </h3>
                    <p class="font-secondary text-sm text-gray-500">
                        {{ $contents['stat4_label'] ?? 'Anos de Experiência' }}</p>
                </div>
                <!-- Stat 5 -->
                <div>
                    <h3 class="font-primary text-5xl md:text-6xl text-[#3b4b8a] mb-2 font-light">
                        <span class="counter"
                            data-target="{{ $contents['stat5_number'] ?? '18' }}">0</span>{{ $contents['stat5_suffix'] ?? '' }}
                    </h3>
                    <p class="font-secondary text-sm text-gray-500">
                        {{ $contents['stat5_label'] ?? 'Províncias Alcançadas' }}</p>
                </div>
                <!-- Stat 6 -->
                <div>
                    <h3 class="font-primary text-5xl md:text-6xl text-[#3b4b8a] mb-2 font-light">
                        <span class="counter"
                            data-target="{{ $contents['stat6_number'] ?? '100' }}">0</span>{{ $contents['stat6_suffix'] ?? '%' }}
                    </h3>
                    <p class="font-secondary text-sm text-gray-500">
                        {{ $contents['stat6_label'] ?? 'Cumprimento e Segurança' }}</p>
                </div>
                <!-- Stat 7 -->
                <div>
                    <h3 class="font-primary text-5xl md:text-6xl text-[#3b4b8a] mb-2 font-light">
                        <span class="counter"
                            data-target="{{ $contents['stat7_number'] ?? '20' }}">0</span>{{ $contents['stat7_suffix'] ?? '+' }}
                    </h3>
                    <p class="font-secondary text-sm text-gray-500">
                        {{ $contents['stat7_label'] ?? 'Parceiros Estratégicos' }}</p>
                </div>
                <!-- Stat 8 -->
                <div>
                    <h3 class="font-primary text-5xl md:text-6xl text-[#3b4b8a] mb-2 font-light">
                        <span class="counter"
                            data-target="{{ $contents['stat8_number'] ?? '50' }}">0</span>{{ $contents['stat8_suffix'] ?? 'k' }}
                    </h3>
                    <p class="font-secondary text-sm text-gray-500">
                        {{ $contents['stat8_label'] ?? 'Horas de Formação' }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Director Message Section -->
    <section class="py-12 bg-white overflow-hidden relative">
        <div class="container mx-auto px-6 max-w-[1100px] relative">
            <div class="relative flex flex-col md:flex-row items-center">
                <!-- Background Blue Box -->
                <div class="absolute top-[8%] bottom-[8%] left-0 right-0 bg-[#1c3986] z-0 hidden md:block"></div>

                <!-- Image -->
                <div class="w-full md:w-5/12 flex-shrink-0 relative z-20 pt-8 pb-8 pl-0 md:pl-10 lg:pl-16">
                    <!-- Mobile blue background wrapper -->
                    <div class="bg-[#1c3986] p-4 md:bg-transparent md:p-0">
                        <img src="{{ isset($contents['director_image']) ? (str_starts_with($contents['director_image'], 'http') ? $contents['director_image'] : (str_starts_with($contents['director_image'], 'images/') ? asset($contents['director_image']) : asset('storage/' . $contents['director_image']))) : asset('images/abp_ceo.webp') }}"
                            alt="Mensagem do PCA" class="w-full h-auto object-cover relative z-20" />
                    </div>
                </div>
                <!-- Text -->
                <div
                    class="w-full md:w-7/12 bg-[#1c3986] md:bg-transparent p-8 md:p-12 lg:p-16 text-white relative z-10">
                    <h2 class="font-primary text-3xl md:text-4xl font-extrabold mb-6 leading-tight">
                        {{ $contents['director_title'] ?? 'Compromisso com a Excelência e Sustentabilidade em Angola' }}
                    </h2>
                    <p class="font-secondary text-base leading-relaxed text-white/90 mb-4">
                        {{ $contents['director_text_1'] ?? 'A nossa trajectória é marcada por uma procura incessante de soluções que combinam conhecimento técnico com as melhores práticas internacionais. Ao longo dos anos, o ABP Group solidificou a sua presença através de um crescimento estratégico, apoiado numa equipa extraordinária e na confiança dos nossos parceiros.' }}
                    </p>
                    <p class="font-secondary text-base leading-relaxed text-white/90">
                        {{ $contents['director_text_2'] ?? 'O nosso maior orgulho não são apenas os projectos que entregamos, mas o impacto positivo e duradouro que deixamos nas comunidades. Continuaremos a liderar com integridade e inovação para o futuro do nosso país.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-[1100px]">
            <div class="relative w-full aspect-video cursor-pointer group"
                onclick="const v = this.querySelector('video'); const btn = this.querySelector('.play-overlay'); if(v.paused){v.play(); btn.style.opacity='0';}else{v.pause(); btn.style.opacity='1';}">
                <video class="w-full h-full object-cover"
                    poster="{{ isset($contents['director_video_poster']) ? (str_starts_with($contents['director_video_poster'], 'http') ? $contents['director_video_poster'] : (str_starts_with($contents['director_video_poster'], 'images/') ? asset($contents['director_video_poster']) : asset('storage/' . $contents['director_video_poster']))) : asset('images/home-hero-new.png') }}"
                    loop>
                    <source
                        src="{{ isset($contents['director_video']) ? (str_starts_with($contents['director_video'], 'http') ? $contents['director_video'] : (str_starts_with($contents['director_video'], 'images/') || !str_contains($contents['director_video'], '/') ? asset($contents['director_video']) : asset('storage/' . $contents['director_video']))) : asset('hero_video.mp4') }}"
                        type="video/mp4">
                    Seu navegador não suporta vídeos.
                </video>

                <!-- Play Button Overlay -->
                <div
                    class="play-overlay absolute inset-0 flex items-center justify-center bg-black/20 transition-all duration-300 group-hover:bg-black/10">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center transition-transform duration-300 group-hover:scale-110">
                        <svg class="w-8 h-8 md:w-10 md:h-10 text-white ml-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counting Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter');
            const speed = 200; // O tempo que demora a animação

            const startCounting = (counter) => {
                const target = +counter.getAttribute('data-target');
                const updateCount = () => {
                    const count = +counter.innerText;
                    const inc = target / speed;
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 15);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            };

            const observerOptions = {
                threshold: 0.5
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        startCounting(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            counters.forEach(counter => {
                observer.observe(counter);
            });
        });
    </script>
</x-layouts.app>
