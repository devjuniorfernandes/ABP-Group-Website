<x-layouts.app>
    <x-slot name="title">ABP Group | Soluções Integradas para Energia, Petróleo e Infraestruturas</x-slot>

    <!-- Hero Banner (Exactly matching the mockup text & styles) -->
    <x-hero title="Soluções Integradas para os Sectores de Energia, Petróleo e Infraestruturas"
        subtitle="Prestamos serviços especializados com elevados padrões de segurança, qualidade e eficiência, contribuindo."
        bgImage="{{ asset('images/home-hero-new.png') }}" bgVideo="{{ asset('hero_video.mp4') }}" theme="corporate"
        height="tall" />

    <!-- Stats Bar (Underneath the Hero) -->
    <section class="bg-[#334494] text-white py-12 relative z-20">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 justify-items-center">
                <div class="flex flex-col">
                    <span class="font-primary text-7xl text-white mb-2 leading-none" data-counter>+10</span>
                    <span class="font-secondary text-sm max-w-[150px] leading-relaxed">Anos
                        de experiência consolidada no mercado de Angola.</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-primary text-7xl text-white mb-2 leading-none" data-counter>+150</span>
                    <span class="font-secondary text-sm max-w-[150px] leading-relaxed">Projectos
                        civis e industriais executados com excelência.</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-primary text-7xl text-white mb-2 leading-none" data-counter>450</span>
                    <span class="font-secondary text-sm max-w-[150px] leading-relaxed">Profissionais
                        qualificados nas equipas operacionais.</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-primary text-7xl text-white mb-2 leading-none" data-counter>4</span>
                    <span class="font-secondary text-sm max-w-[150px] leading-relaxed">Unidades
                        de negócio integradas e complementares.</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-primary text-7xl text-white mb-2 leading-none" data-counter>18</span>
                    <span class="font-secondary text-sm max-w-[150px] leading-relaxed">Províncias
                        cobertas com serviços de infraestruturas.</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Business Areas Section (Exactly matching mockup layout style) -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-start">

                <!-- Left Column (Spans 5 cols on lg) -->
                <div class="lg:col-span-5 flex flex-col justify-start">
                    <span class="font-primary text-xs font-bold uppercase tracking-widest text-gray-400 mb-4 block">ABP
                        GROUP</span>
                    <h2
                        class="font-primary text-4xl md:text-5xl lg:text-5.5xl font-extrabold leading-[1.1] tracking-tight">
                        <span class="text-brand-red block mb-2">Soluções</span>
                        <span class="text-corporate-primary">industriais<br class="hidden md:inline"> integradas</span>
                    </h2>
                </div>

                <!-- Right Column (Spans 7 cols on lg) -->
                <div class="lg:col-span-7 flex flex-col justify-start pt-2 lg:pt-8">
                    <p class="font-primary text-xl md:text-2xl text-corporate-primary mb-6 leading-relaxed">
                        A nossa <strong class="font-extrabold text-brand-red">visão</strong> — ser o principal parceiro
                        na execução de projectos complexos e sustentáveis de energia, engenharia e ambiente em Angola.
                    </p>

                    <p class="font-secondary text-sm md:text-base text-gray-500 mb-10 leading-relaxed">
                        A excelência operacional e o rigor na segurança são os fundamentos de todas as nossas
                        intervenções. Colaboramos estreitamente com os nossos clientes e parceiros para ir além do
                        convencional, superando desafios técnicos e logísticos e implementando soluções que acrescentam
                        valor real e promovem o desenvolvimento industrial do país.
                    </p>

                    <div>
                        <a href="{{ route('services') }}"
                            class="inline-flex items-center gap-3 text-corporate-primary font-primary font-extrabold text-xs uppercase tracking-widest hover:text-brand-red transition-all duration-300 group">
                            VER ÁREAS DE NEGÓCIO
                            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- O Nosso Grupo Section (Mockup layout flow) -->
    <section class="bg-[#304595] text-white py-24 relative overflow-hidden parallax-section parallax-section-timeline">
        <!-- Background Parallax Shapes -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
            <!-- Glowing background orbs -->
            <div
                class="parallax-layer-left absolute left-[15%] top-[15%] w-[350px] h-[350px] md:w-[500px] md:h-[500px] bg-white/10 rounded-full blur-[80px] pointer-events-none">
            </div>
            <div
                class="parallax-layer-right absolute right-[20%] bottom-[10%] w-[400px] h-[400px] md:w-[600px] md:h-[600px] bg-white/15 rounded-full blur-[100px] pointer-events-none">
            </div>

            <!-- Visible circular shapes with different transparency levels based on brand colors -->
            <div
                class="parallax-layer-left absolute left-[28%] bottom-[20%] w-[160px] h-[160px] md:w-[240px] md:h-[240px] bg-white/5 border-2 border-white/20 rounded-full pointer-events-none flex items-center justify-center">
                <div class="w-4/5 h-4/5 border border-white/10 rounded-full"></div>
            </div>
            <div
                class="parallax-layer-right absolute right-[30%] top-[20%] w-[200px] h-[200px] md:w-[300px] md:h-[300px] bg-white/10 border border-white/15 rounded-full pointer-events-none flex items-center justify-center">
                <div class="w-2/3 h-2/3 border border-white/10 rounded-full"></div>
            </div>
        </div>

        <div class="container mx-auto px-6 max-w-[1200px] relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="flex flex-col justify-start">
                    <span class="font-primary text-xs font-extrabold uppercase tracking-widest text-brand-red">O NOSSO
                        GRUPO</span>
                    <h2 class="font-primary text-4xl font-extrabold text-white leading-tight mt-3 mb-6">
                        Um Grupo, Múltiplas Competências, Um Só Compromisso com a Excelência
                    </h2>
                    <p class="font-secondary text-sm text-white/70 leading-relaxed">
                        O ABP Group reúne empresas especializadas que actuam em sectores estratégicos da economia,
                        offerecendo soluções integradas em energia, engenharia, construção, gestão de infraestruturas,
                        saúde e consultoria ambiental. Através da complementaridade das nossas áreas de negócio,
                        entregamos valor, inovação e resultados sustentáveis aos nossos clientes.
                    </p>
                </div>

                <!-- Flowchart Diagram Box with styled logos inside nodes -->
                <div
                    class="w-full rounded-2xl p-4 md:p-8 flex flex-col items-center justify-center relative overflow-hidden">
                    <!-- Mobile Layout: Clean vertical stack -->
                    <div class="flex md:hidden flex-col items-center w-full">
                        <!-- Top Node -->
                        <a href="{{ route('home') }}"
                            class="bg-white rounded-xl p-3  z-10 w-[150px] h-[60px] text-center flex items-center justify-center transition-all duration-300 hover:scale-105 ">
                            <img src="{{ asset('images/logos/groupabp_.png') }}" alt="ABP Group"
                                class="h-8 w-auto object-contain">
                        </a>

                        <!-- Connector -->
                        <div class="w-0.5 h-6 bg-white/20"></div>

                        <!-- PantherBUILD -->
                        <a href="{{ route('panther-build') }}"
                            class="bg-white rounded-xl p-3  text-center z-10 flex items-center justify-center w-[150px] h-[60px] transition-all duration-300 hover:scale-105 ">
                            <img src="{{ asset('images/logos/abp_panthrtbuildabp_.png') }}" alt="PantherBUILD"
                                class="h-7 w-auto object-contain">
                        </a>

                        <!-- Connector -->
                        <div class="w-0.5 h-6 bg-white/20"></div>

                        <!-- PantherOIL -->
                        <a href="{{ route('panther-oil') }}"
                            class="bg-white rounded-xl p-3  text-center z-10 flex items-center justify-center w-[150px] h-[60px] transition-all duration-300 hover:scale-105 ">
                            <img src="{{ asset('images/logos/patheroilabp_.png') }}" alt="PantherOIL"
                                class="h-7 w-auto object-contain">
                        </a>

                        <!-- Connector -->
                        <div class="w-0.5 h-6 bg-white/20"></div>

                        <!-- PantherMAT -->
                        <a href="{{ route('panther-mat') }}"
                            class="bg-white rounded-xl p-3  text-center z-10 flex items-center justify-center w-[150px] h-[60px] transition-all duration-300 hover:scale-105 ">
                            <img src="{{ asset('images/logos/panthermatabp_.png') }}" alt="PantherMAT"
                                class="h-7 w-auto object-contain">
                        </a>

                        <!-- Connector -->
                        <div class="w-0.5 h-6 bg-white/20"></div>

                        <!-- Bottom Node -->
                        <a href="{{ route('enviro') }}"
                            class="bg-white rounded-xl p-3  text-center z-10 flex items-center justify-center w-[150px] h-[60px] transition-all duration-300 hover:scale-105 ">
                            <img src="{{ asset('images/logos/enviro_ao.png') }}" alt="Enviro.ao"
                                class="h-7 w-auto object-contain">
                        </a>
                    </div>

                    <!-- Desktop Layout: Flowchart diagram -->
                    <div class="hidden md:flex flex-col items-center w-full">
                        <!-- Top Node -->
                        <a href="{{ route('home') }}"
                            class="bg-white rounded-xl p-3  z-10 w-[170px] h-[70px] text-center flex items-center justify-center transition-all duration-300 hover:scale-105 ">
                            <img src="{{ asset('images/logos/groupabp_.png') }}" alt="ABP Group"
                                class="h-9 w-auto object-contain">
                        </a>

                        <!-- Connector -->
                        <div class="w-0.5 h-8 bg-white/20"></div>

                        <!-- Middle Row Nodes -->
                        <div class="flex justify-between items-center w-full gap-4 relative py-2">
                            <!-- Horizontal connection line under nodes -->
                            <div class="absolute top-1/2 left-0 w-full h-0.5 bg-white/20 -translate-y-1/2 -z-10"></div>

                            <!-- PantherBUILD -->
                            <a href="{{ route('panther-build') }}"
                                class="bg-white rounded-xl p-3  text-center z-10 flex items-center justify-center w-[170px] h-[70px] shrink-0 transition-all duration-300 hover:scale-105 ">
                                <img src="{{ asset('images/logos/abp_panthrtbuildabp_.png') }}" alt="PantherBUILD"
                                    class="h-7 w-auto object-contain">
                            </a>

                            <!-- PantherOIL -->
                            <a href="{{ route('panther-oil') }}"
                                class="bg-white rounded-xl p-3  text-center z-10 flex items-center justify-center w-[170px] h-[70px] shrink-0 transition-all duration-300 hover:scale-105 ">
                                <img src="{{ asset('images/logos/patheroilabp_.png') }}" alt="PantherOIL"
                                    class="h-7 w-auto object-contain">
                            </a>

                            <!-- PantherMAT -->
                            <a href="{{ route('panther-mat') }}"
                                class="bg-white rounded-xl p-3  text-center z-10 flex items-center justify-center w-[170px] h-[70px] shrink-0 transition-all duration-300 hover:scale-105 ">
                                <img src="{{ asset('images/logos/panthermatabp_.png') }}" alt="PantherMAT"
                                    class="h-7 w-auto object-contain">
                            </a>
                        </div>

                        <!-- Connector -->
                        <div class="w-0.5 h-8 bg-white/20"></div>

                        <!-- Bottom Node -->
                        <a href="{{ route('enviro') }}"
                            class="bg-white rounded-xl p-3  text-center z-10 flex items-center justify-center w-[170px] h-[70px] shrink-0 transition-all duration-300 hover:scale-105 ">
                            <img src="{{ asset('images/logos/enviro_ao.png') }}" alt="Enviro.ao"
                                class="h-7 w-auto object-contain">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nossos Projectos Section (Mockup layout & names) -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-12">
                <div class="max-w-[700px]">
                    <span
                        class="font-primary text-xs font-bold uppercase tracking-widest text-brand-red mb-2 block">NOSSOS
                        PROJECTOS</span>
                    <h2
                        class="font-primary text-3xl md:text-3.5xl lg:text-4xl font-extrabold text-corporate-primary leading-[1.15] mt-3">
                        Projectos que reflectem a nossa<br>
                        <span class="text-brand-red">experiência, qualidade e compromisso</span>
                    </h2>
                </div>
                <a href="{{ route('projects') }}"
                    class="inline-flex items-center gap-2 text-brand-red font-primary font-bold text-sm hover:text-corporate-primary transition-all duration-300 group">
                    Ver mais
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

            <!-- Grid displaying customized projects cards to match mockup exactly -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <x-project-card title="Complexo Empresarial de Referência"
                    description="Desenvolvimento de uma infraestrutura moderna concebida para responder às exigências do ambiente corporativo contemporâneo."
                    image="{{ asset('images/panther-build-hero.png') }}" category="Construção Comercial"
                    link="{{ route('projects') }}" />

                <!-- Project 2 -->
                <x-project-card title="Edifício Multifuncional de Alta Performance"
                    description="Desenvolvimento de uma infraestrutura moderna concebida para responder às exigências do ambiente corporativo contemporâneo."
                    image="{{ asset('images/panther-mat-hero.png') }}" category="Engenharia & Arquitectura"
                    link="{{ route('projects') }}" />

                <!-- Project 3 -->
                <x-project-card title="Empreendimento Habitacional Premium"
                    description="Conjunto residencial desenvolvido para proporcionar segurança, conforto e qualidade de vida, aliado a elevados padrões de construção."
                    image="{{ asset('images/corporate-hero.png') }}" category="Construção Residencial"
                    link="{{ route('projects') }}" />
            </div>
        </div>
    </section>

    <!-- Partners Logos Section -->
    <section class="py-20 bg-gray-50 border-y border-gray-100">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-10">
                <div>
                    <span
                        class="font-primary text-xs font-bold uppercase tracking-widest text-brand-red mb-2 block">CLIENTES</span>
                    <h2
                        class="font-primary text-3xl md:text-3.5xl lg:text-4xl font-extrabold text-corporate-primary leading-[1.15] mt-3">
                        Parcerias estratégicas que reforçam<br>
                        a nossa <span class="text-brand-red">capacidade de entrega</span>
                    </h2>
                </div>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 text-brand-red font-primary font-bold text-sm hover:text-corporate-primary transition-all duration-300 group">
                    Ver mais
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

            @php
                $logoFiles = glob(public_path('images/logos_clients/*.{png,jpg,jpeg,svg,webp}'), GLOB_BRACE);
                $logos = array_map(function ($file) {
                    return 'images/logos_clients/' . basename($file);
                }, $logoFiles);

                // Sort logos alphabetically
                sort($logos);

                // Filter out non-logo files and specific duplicates
                $logos = array_filter($logos, function ($path) {
                    $name = basename($path);
                    return !in_array($name, ['150.png', '1080-x-1080-2025-1.png', 'LOGO-MERCONS-1000PX-BRANCO.png']);
                });
            @endphp

            <!-- Infinite Autoplay Logo Carousel -->
            <div class="relative w-full overflow-hidden mt-12 py-6 border border-gray-100/50">
                <!-- Left/Right soft fade overlays -->
                <div
                    class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-gray-50 to-transparent z-10 pointer-events-none">
                </div>
                <div
                    class="absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-gray-50 to-transparent z-10 pointer-events-none">
                </div>

                <div class="flex gap-16 items-center w-max animate-marquee py-2">
                    <!-- Set 1 -->
                    <div class="flex shrink-0 gap-16 items-center">
                        @foreach ($logos as $logo)
                            <div class="flex items-center justify-center h-16 w-36 px-2">
                                <img src="{{ asset($logo) }}" alt="Logo Cliente"
                                    class="max-h-12 max-w-full object-contain filter grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-default"
                                    loading="lazy">
                            </div>
                        @endforeach
                    </div>
                    <!-- Set 2 (Duplicate for infinite seamless loop) -->
                    <div class="flex shrink-0 gap-16 items-center" aria-hidden="true">
                        @foreach ($logos as $logo)
                            <div class="flex items-center justify-center h-16 w-36 px-2">
                                <img src="{{ asset($logo) }}" alt="Logo Cliente"
                                    class="max-h-12 max-w-full object-contain filter grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300 cursor-default"
                                    loading="lazy">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sustainability Green Banner (Forest background matching mockup exactly) -->
    <section class="relative py-24 overflow-hidden sustainability-section">
        <!-- Parallax Background Image -->
        <div class="absolute inset-0 bg-cover bg-center sustainability-bg"
            style="background-image: url('{{ asset('images/forest-canopy.png') }}'); transform: translate3d(0px, 0px, 0px) scale(1.15);">
        </div>
        <!-- Dark green overlay to match mockup -->
        <div class="absolute inset-0 bg-[#000000]/70 z-10"></div>

        <div class="container mx-auto px-6 max-w-[1200px] relative z-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="flex flex-col justify-start">
                    <h2 class="font-primary text-4xl font-extrabold text-white mb-6 leading-tight">Comprometidos com um
                        Futuro Mais Sustentável</h2>
                    <p class="font-secondary text-base text-white/80 leading-relaxed max-w-[550px]">
                        Desenvolvemos as nossas actividades com responsabilidade, promovendo práticas sustentáveis que
                        geram valor para as comunidades, protegem o ambiente e contribuem para o desenvolvimento das
                        gerações futuras.
                    </p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-5 gap-6 text-center">
                    <div class="flex flex-col items-center gap-3">
                        <div class="w-20 h-20 flex items-center justify-center text-white cursor-default">
                            <img class="inline" src="{{ asset('images/svg/ambient_1.svg') }}"
                                alt="Gestão Ambiental" />
                        </div>
                        <span class="font-secondary text-base text-white/95 font-semibold leading-snug">Gestão
                            Ambiental</span>
                    </div>

                    <div class="flex flex-col items-center gap-3">
                        <div class="w-20 h-20 flex items-center justify-center text-white cursor-default">
                            <img class="inline" src="{{ asset('images/svg/ambient_2.svg') }}"
                                alt="Carbono e Clima" />
                        </div>
                        <span class="font-secondary text-base text-white/95 font-semibold leading-snug">Carbono e
                            Clima</span>
                    </div>

                    <div class="flex flex-col items-center gap-3">
                        <div class="w-20 h-20 flex items-center justify-center text-white cursor-default">
                            <img class="inline" src="{{ asset('images/svg/ambient_3.svg') }}"
                                alt="Biodiversidade" />
                        </div>
                        <span
                            class="font-secondary text-base text-white/95 font-semibold leading-snug">Biodiversidade</span>
                    </div>

                    <div class="flex flex-col items-center gap-3">
                        <div class="w-20 h-20 flex items-center justify-center text-white cursor-default">
                            <img class="inline" src="{{ asset('images/svg/ambient_4.svg') }}"
                                alt="Biodiversidade" />
                        </div>
                        <span class="font-secondary text-base text-white/95 font-semibold leading-snug">Impacto
                            Social</span>
                    </div>

                    <div class="flex flex-col items-center gap-3">
                        <div class="w-20 h-20 flex items-center justify-center text-white cursor-default">
                            <img class="inline" src="{{ asset('images/svg/ambient_5.svg') }}"
                                alt="Gestão e Responsabilidade" />
                        </div>
                        <span class="font-secondary text-base text-white/95 font-semibold leading-snug">Gestão e
                            Responsabilidade</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Noticias e Eventos Section (With divided columns grid) -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-12">
                <div>
                    <span
                        class="font-primary text-xs font-bold uppercase tracking-widest text-brand-red mb-2 block">NÓTICIAS
                        E EVENTOS</span>
                    <h2
                        class="font-primary text-3xl md:text-3.5xl lg:text-4xl font-extrabold text-corporate-primary leading-[1.15] mt-3">
                        Acompanhe as nossas últimas<br>
                        <span class="text-brand-red"> actualizações e iniciativas</span>
                    </h2>
                </div>
                <a href="{{ route('news') }}"
                    class="inline-flex items-center gap-2 text-corporate-primary font-primary font-extrabold text-xs uppercase tracking-widest hover:text-brand-red transition-all duration-300 group">
                    VER MAIS
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-0 divide-y md:divide-y-0 md:divide-x divide-gray-100">
                <!-- Column 1 -->
                <div class="py-8 md:py-0 md:px-8 first:pl-0 last:pr-0 group">
                    <span
                        class="font-primary text-[10px] font-bold text-brand-red uppercase tracking-widest block mb-3">#DESTAQUE</span>
                    <h3
                        class="font-primary text-lg font-bold text-corporate-primary mb-3 leading-snug group-hover:text-[#E51718] transition-colors">
                        <a href="{{ route('news') }}">ABP Group em destaque no desenvolvimento das infraestruturas
                            nacionais</a>
                    </h3>
                    <p class="font-secondary text-sm text-gray-500 leading-relaxed mb-4">
                        Partilhamos os acontecimentos, projectos e conquistas que demonstram a evolução do grupo e o
                        impacto das nossas actividades nos sectores onde actuamos.
                    </p>
                    <span class="font-primary text-[11px] font-bold text-gray-400 uppercase tracking-widest">07 Março
                        2025</span>
                </div>

                <!-- Column 2 -->
                <div class="py-8 md:py-0 md:px-8 first:pl-0 last:pr-0 group">
                    <span
                        class="font-primary text-[10px] font-bold text-brand-red uppercase tracking-widest block mb-3">#INOVAÇÃO</span>
                    <h3
                        class="font-primary text-lg font-bold text-corporate-primary mb-3 leading-snug group-hover:text-[#E51718] transition-colors">
                        <a href="{{ route('news') }}">Soluções sustentáveis ganham espaço em novos projectos do
                            grupo</a>
                    </h3>
                    <p class="font-secondary text-sm text-gray-500 leading-relaxed mb-4">
                        Partilhamos os acontecimentos, projectos e conquistas que demonstram a evolução do grupo e o
                        impacto das nossas actividades nos sectores onde actuamos.
                    </p>
                    <span class="font-primary text-[11px] font-bold text-gray-400 uppercase tracking-widest">07 Março
                        2025</span>
                </div>

                <!-- Column 3 -->
                <div class="py-8 md:py-0 md:px-8 first:pl-0 last:pr-0 group">
                    <span
                        class="font-primary text-[10px] font-bold text-brand-red uppercase tracking-widest block mb-3">#PARCERIAS</span>
                    <h3
                        class="font-primary text-lg font-bold text-corporate-primary mb-3 leading-snug group-hover:text-[#E51718] transition-colors">
                        <a href="{{ route('news') }}">Novas alianças estratégicas fortalecem operações de manutenção e
                            gestão</a>
                    </h3>
                    <p class="font-secondary text-sm text-gray-500 leading-relaxed mb-4">
                        Partilhamos os acontecimentos, projectos e conquistas que demonstram a evolução do grupo e o
                        impacto das nossas actividades nos sectores onde actuamos.
                    </p>
                    <span class="font-primary text-[11px] font-bold text-gray-400 uppercase tracking-widest">07 Março
                        2025</span>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
