<x-layouts.app :hideFooter="true">
    <x-slot name="title">Enviro.AO | Consultoria e Engenharia Ambiental - ABP Group</x-slot>

    <!-- Hero Banner -->
    <div class="relative w-full h-[250px] flex items-center bg-black overflow-hidden">
        <div class="absolute inset-0 w-full h-full z-0">
            @if(isset($contents['hero_image']))
                <img src="{{ str_starts_with($contents['hero_image'], 'http') ? $contents['hero_image'] : (str_starts_with($contents['hero_image'], 'images/') ? asset($contents['hero_image']) : asset('storage/' . $contents['hero_image'])) }}" 
                     alt="Enviro Hero" class="absolute inset-0 w-full h-full object-cover opacity-70" />
            @else
                <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover opacity-70">
                    <source src="{{ asset('hero_video.mp4') }}" type="video/mp4">
                </video>
            @endif
            <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-transparent"></div>
        </div>
        <div class="relative z-10 container mx-auto px-6 max-w-[1200px]">
            <h1 class="font-primary text-4xl md:text-5xl lg:text-6xl font-extrabold text-white">
                {{ $contents['hero_title'] ?? 'Enviro.AO' }}
            </h1>
        </div>
    </div>

    <!-- Intro Text Section -->
    <section class="py-24 bg-white relative z-20">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <h2
                class="font-primary text-5xl md:text-6xl lg:text-[65px] font-extrabold leading-[1.05] mb-10 tracking-tight">
                {!! $contents['intro_title'] ?? '<span class="text-[#3b6b35] block">Líderes em Engenharia e</span><span class="text-[#99c24d] block">Consultoria Ambiental em Angola</span>' !!}
            </h2>
            <div class="font-secondary text-lg md:text-xl text-gray-800 leading-relaxed max-w-[1100px] font-medium">
                <p class="mb-4">
                    {{ $contents['description'] ?? 'A Enviro.AO ajuda marcas líderes e indústrias nacionais a gerir a sua pegada ecológica através de auditorias e processos certificados de mitigação. Oferecemos consultoria ambiental completa para licenciamento, estudos de impacto e gestão integrada de resíduos.' }}
                </p>
            </div>
        </div>
    </section>

    <!-- 3 Cards Grid Section -->
    <section class="py-12 bg-white relative z-20">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div
                    class="group bg-[#F5F5F5] hover:bg-[#3B6B39] transition-colors duration-300 p-10 border border-[#99c24d]/30 flex flex-col h-full cursor-pointer">
                    <div class="w-16 h-16 mb-6 text-[#99c24d]">
                        <img src="{{ asset('images/svg/envaro_1.svg') }}" alt="Icon 1" class="w-full h-full">
                    </div>
                    <h3 class="font-primary text-2xl font-bold text-[#99c24d] mb-4">{{ $contents['card1_title'] ?? 'Licenciamento Ambiental' }}</h3>
                    <p
                        class="font-secondary text-base text-gray-500 group-hover:text-white transition-colors duration-300">
                        {{ $contents['card1_text'] ?? 'Auditorias técnicas de conformidade e obtenção de licenças de operação ambiental.' }}
                    </p>
                </div>
                <!-- Card 2 -->
                <div
                    class="group bg-[#F5F5F5] hover:bg-[#3B6B39] transition-colors duration-300 p-10 border border-[#99c24d]/30 flex flex-col h-full cursor-pointer">
                    <div class="w-16 h-16 mb-6 text-[#99c24d]">
                        <img src="{{ asset('images/svg/envaro_2.svg') }}" alt="Icon 2" class="w-full h-full">
                    </div>
                    <h3 class="font-primary text-2xl font-bold text-[#99c24d] mb-4">{{ $contents['card2_title'] ?? 'Gestão de Resíduos' }}</h3>
                    <p
                        class="font-secondary text-base text-gray-500 group-hover:text-white transition-colors duration-300">
                        {{ $contents['card2_text'] ?? 'Processos certificados de recolha, tratamento e descarte ecológico de resíduos industriais.' }}
                    </p>
                </div>
                <!-- Card 3 -->
                <div
                    class="group bg-[#F5F5F5] hover:bg-[#3B6B39] transition-colors duration-300 p-10 border border-[#99c24d]/30 flex flex-col h-full cursor-pointer">
                    <div class="w-16 h-16 mb-6 text-[#99c24d]">
                        <img src="{{ asset('images/svg/envaro_3.svg') }}" alt="Icon 3" class="w-full h-full">
                    </div>
                    <h3 class="font-primary text-2xl font-bold text-[#99c24d] mb-4">{{ $contents['card3_title'] ?? 'Estudos de Impacto' }}</h3>
                    <p
                        class="font-secondary text-base text-gray-500 group-hover:text-white transition-colors duration-300">
                        {{ $contents['card3_text'] ?? 'Elaboração de estudos de impacto ambiental e social para grandes empreendimentos.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Text + Collage Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Text Left -->
                <div class="pr-0 lg:pr-8">
                    <h2
                        class="font-primary text-4xl md:text-5xl lg:text-6xl font-extrabold leading-[1.1] mb-8 tracking-tight">
                        {!! $contents['collage_title'] ?? '<span class="text-[#3b6b35] block">Engenharia Sustentável</span><span class="text-[#99c24d] block">para o Futuro de Angola</span>' !!}
                    </h2>
                    <p class="font-secondary text-lg text-gray-800 leading-relaxed mb-6 font-medium">
                        {{ $contents['collage_text_1'] ?? 'A Enviro.AO desenvolve estratégias integradas que alinham os objetivos de crescimento económico com a preservação dos recursos naturais e biodiversidade local.' }}
                    </p>
                    <p class="font-secondary text-lg text-gray-800 leading-relaxed font-medium">
                        {{ $contents['collage_text_2'] ?? 'As nossas equipas multidisciplinares de biólogos, engenheiros ambientais e consultores de sustentabilidade trabalham em parceria com órgãos governamentais e setor privado.' }}
                    </p>
                </div>
                <!-- Collage Right -->
                <div class="relative h-[600px] w-full mt-10 lg:mt-0">
                    <!-- Top Right Image -->
                    <img src="{{ isset($contents['collage_img_1']) ? (str_starts_with($contents['collage_img_1'], 'http') ? $contents['collage_img_1'] : (str_starts_with($contents['collage_img_1'], 'images/') ? asset($contents['collage_img_1']) : asset('storage/' . $contents['collage_img_1']))) : 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80' }}"
                        alt="Volunteers" class="absolute top-[5%] right-0 w-[45%] h-[250px] object-cover z-10" />

                    <!-- Middle Image -->
                    <img src="{{ isset($contents['collage_img_2']) ? (str_starts_with($contents['collage_img_2'], 'http') ? $contents['collage_img_2'] : (str_starts_with($contents['collage_img_2'], 'images/') ? asset($contents['collage_img_2']) : asset('storage/' . $contents['collage_img_2']))) : 'https://www.endiama.co.ao/images/sustentavel/ambiental/img-03.webp' }}"
                        alt="Tree planting" class="absolute top-[25%] right-[25%] w-[50%] h-[350px] object-cover z-20" />

                    <!-- Bottom Left Image -->
                    <img src="{{ isset($contents['collage_img_3']) ? (str_starts_with($contents['collage_img_3'], 'http') ? $contents['collage_img_3'] : (str_starts_with($contents['collage_img_3'], 'images/') ? asset($contents['collage_img_3']) : asset('storage/' . $contents['collage_img_3']))) : 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80' }}"
                        alt="Recycling" class="absolute bottom-[5%] left-[5%] w-[40%] h-[250px] object-cover z-30" />
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax Section -->
    @php
        $parallaxBg = isset($contents['parallax_image'])
            ? (str_starts_with($contents['parallax_image'], 'http') ? $contents['parallax_image'] : (str_starts_with($contents['parallax_image'], 'images/') ? asset($contents['parallax_image']) : asset('storage/' . $contents['parallax_image'])))
            : 'https://images.ecycle.com.br/wp-content/uploads/2022/03/18132456/pexels-tom-fisk-2739666-scaled.jpg.webp';
    @endphp
    <section class="relative py-32 bg-fixed bg-center bg-cover"
        style="background-image: url('{{ $parallaxBg }}');">
        <!-- Green Overlay with opacity -->
        <div class="absolute inset-0 bg-[#3b6b35]/85"></div>

        <div class="container mx-auto px-6 max-w-[1200px] relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left Column -->
                <div>
                    <h2 class="font-primary text-3xl md:text-4xl font-bold text-white leading-tight mb-8">
                        {!! $contents['parallax_title'] ?? 'Soluções Ecológicas com Rigor Técnico e Conformidade' !!}
                    </h2>
                    <p class="font-secondary text-lg text-white/90 leading-relaxed">
                        {{ $contents['parallax_text'] ?? 'Garantimos processos rigorosos de auditoria para mitigar riscos ambientais e promover práticas industriais sustentáveis.' }}
                    </p>
                </div>
                <!-- Right Column -->
                <div class="flex justify-start lg:justify-end">
                    <div class="flex flex-col items-start gap-4">
                        <span class="font-primary text-5xl md:text-[60px] lg:text-[70px] font-extrabold text-[#99c24d] leading-tight">Engenharia</span>
                        <span class="font-primary text-5xl md:text-[60px] lg:text-[70px] font-extrabold text-[#99c24d] leading-tight">Ambiental</span>
                        <span class="font-primary text-5xl md:text-[60px] lg:text-[70px] font-extrabold text-white leading-tight">Sustentável</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Grid Section (NOSSOS PROJECTOS) -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="mb-12 flex flex-col md:flex-row md:justify-between md:items-end gap-6">
                <div>
                    <span
                        class="font-primary text-sm font-bold uppercase tracking-widest text-gray-400 mb-2 block">NOSSOS PROJECTOS</span>
                    <h2 class="font-primary text-4xl md:text-5xl font-bold leading-tight">
                        {!! $contents['projects_title'] ?? '<span class="text-[#3b6b35]">Projectos que reflectem a nossa</span><br><span class="text-[#9DBD4D]">experiência, qualidade e compromisso</span>' !!}
                    </h2>
                    <p class="font-secondary text-gray-600 mt-4 max-w-3xl">
                        {{ $contents['projects_subtitle'] ?? 'Conheça os nossos principais projetos de conservação ambiental e estudos de impacto executados em Angola.' }}
                    </p>
                </div>
                <a href="{{ route('projects', ['category' => 'Enviro.AO']) }}"
                    class="inline-flex items-center gap-2 text-[#3b6b35] hover:opacity-80 font-primary font-bold text-sm transition-all duration-300 group">
                    Ver mais
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3">
                        </path>
                    </svg>
                </a>
            </div>

            <!-- Global CMS Projects Filtered by Enviro.AO -->
            @if($projects && $projects->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($projects as $project)
                        @php
                            $imgSrc = $project->cover_image 
                                ? (str_starts_with($project->cover_image, 'http') 
                                    ? $project->cover_image 
                                    : (str_starts_with($project->cover_image, 'images/') 
                                        ? asset($project->cover_image) 
                                        : asset('storage/' . $project->cover_image))) 
                                : asset('images/corporate-hero.png');
                        @endphp
                        <a href="{{ route('project.details', $project->slug) }}" class="relative aspect-square group overflow-hidden cursor-pointer block">
                            <img src="{{ $imgSrc }}"
                                alt="{{ $project->title }}"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-100 transition-opacity duration-300">
                            </div>
                            <div
                                class="absolute inset-0 bg-[#9DBD4D]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                            </div>

                            <div class="absolute bottom-0 left-0 p-8 w-full z-20">
                                <h4 class="font-primary text-2xl font-extrabold text-white mb-1 leading-snug">
                                    {{ $project->title }}
                                </h4>
                                <p class="font-secondary text-sm text-white/90 drop-shadow-md">
                                    {{ $project->category }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <p class="text-center text-gray-500 py-12">Nenhum projeto encontrado para a Enviro.AO.</p>
            @endif
        </div>
    </section>

    <!-- 2x2 Image and Text Grid Section -->
    <section class="pb-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 md:grid-cols-2 h-auto">
                <!-- Top Left: Light Green Text Block -->
                <div class="bg-[#9DBD4D] p-12 md:p-16 lg:p-20 flex flex-col justify-center">
                    <h3 class="font-primary text-xl font-bold text-white mb-6 uppercase tracking-wider">
                        {{ $contents['grid1_title'] ?? 'Preservação da Biodiversidade' }}
                    </h3>
                    <p class="font-secondary text-white/95 text-lg leading-relaxed">
                        {{ $contents['grid1_text'] ?? 'Desenvolvimento de programas de monitorização de fauna e flora em ecossistemas sensíveis.' }}
                    </p>
                </div>

                <!-- Top Right: Image (Elephant) -->
                <div class="h-[400px] md:h-auto relative">
                    <img src="{{ isset($contents['grid1_image']) ? (str_starts_with($contents['grid1_image'], 'http') ? $contents['grid1_image'] : (str_starts_with($contents['grid1_image'], 'images/') ? asset($contents['grid1_image']) : asset('storage/' . $contents['grid1_image']))) : 'https://images.unsplash.com/photo-1557050543-4d5f4e07ef46?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80' }}"
                        alt="Elephant" class="absolute inset-0 w-full h-full object-cover" />
                </div>

                <!-- Bottom Left: Image (Volunteers/Planting) -->
                <div class="h-[400px] md:h-auto relative">
                    <img src="{{ isset($contents['grid2_image']) ? (str_starts_with($contents['grid2_image'], 'http') ? $contents['grid2_image'] : (str_starts_with($contents['grid2_image'], 'images/') ? asset($contents['grid2_image']) : asset('storage/' . $contents['grid2_image']))) : 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80' }}"
                        alt="Volunteers" class="absolute inset-0 w-full h-full object-cover" />
                </div>

                <!-- Bottom Right: Dark Green Text Block -->
                <div class="bg-[#3b6b35] p-12 md:p-16 lg:p-20 flex flex-col justify-center">
                    <h3 class="font-primary text-xl font-bold text-white mb-6 uppercase tracking-wider">
                        {{ $contents['grid2_title'] ?? 'Reflorestação Urbana' }}
                    </h3>
                    <p class="font-secondary text-white/95 text-lg leading-relaxed">
                        {{ $contents['grid2_text'] ?? 'Ações comunitárias e industriais para o plantio de árvores nativas em áreas degradadas.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section Placeholder (NOTÍCIAS E EVENTOS) -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <!-- Header -->
            <div class="flex flex-col md:flex-row md:justify-between md:items-end gap-6 mb-16">
                <h2 class="font-primary text-xl md:text-2xl font-bold uppercase tracking-wider text-[#3b6b35]">
                    NOTICIAS E EVENTOS
                </h2>
                <a href="{{ route('news', ['search' => 'Enviro']) }}"
                    class="inline-flex items-center gap-2 text-[#3b6b35] hover:opacity-80 font-primary text-lg transition-all duration-300 group">
                    Ver mais
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3">
                        </path>
                    </svg>
                </a>
            </div>

            @if(isset($news) && $news->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    @foreach($news as $item)
                        <a href="{{ route('news.details', $item->slug) }}" class="border-l-2 border-gray-200 pl-6 group cursor-pointer block">
                            <h4
                                class="font-primary text-[22px] font-bold text-gray-700 group-hover:text-[#3b6b35] transition-colors duration-300 mb-4 leading-tight">
                                {{ $item->title }}
                            </h4>
                            <p class="font-secondary text-base text-gray-500 leading-relaxed mb-6 pr-4 line-clamp-3">
                                {{ $item->summary ?? Str::limit(strip_tags($item->content), 120) }}
                            </p>
                            <span class="font-secondary text-sm text-[#9DBD4D] font-medium">
                                {{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}
                            </span>
                        </a>
                    @endforeach
                </div>
            @else
                <p class="text-center text-gray-500 py-12">Nenhuma notícia registada para a Enviro.AO.</p>
            @endif
        </div>
    </section>

    <!-- Custom Enviro Footer -->
    <footer class="bg-[#3b6b35] text-white border-t border-white/20 font-secondary pt-16 pb-8">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 max-w-[1200px]">
            <!-- Logo and Short Description -->
            <div class="lg:col-span-1 flex flex-col gap-4">
                <a href="{{ route('home') }}" class="flex items-center text-current">
                    <img src="{{ asset('images/logos/groupabp_white.png') }}" alt="ABP Group"
                        class="h-10 w-auto object-contain">
                </a>
                <p class="text-[11px] text-white/90 leading-relaxed mt-2">
                    O ABP Group é um grupo empresarial angolano que actua em sectores estratégicos, oferecendo soluções
                    integradas nas áreas de energia, engenharia, construção, gestão de infraestruturas, saúde e
                    sustentabilidade.
                </p>
            </div>

            <!-- Links Column 1: Grupo -->
            <div class="flex flex-col gap-4">
                <h3 class="font-primary text-sm font-bold tracking-wider uppercase text-white pb-2">
                    GRUPO</h3>
                <ul class="flex flex-col gap-2.5 text-sm text-white/90">
                    <li><a href="{{ route('about') }}" class="hover:text-white/70 transition-colors">Sobre nós</a>
                    </li>
                    <li><a href="{{ route('about') }}#certifications"
                            class="hover:text-white/70 transition-colors">Certificações</a></li>
                    <li><a href="{{ route('about') }}#sustainability"
                            class="hover:text-white/70 transition-colors">Sustentabilidade</a></li>
                    <li><a href="{{ route('about') }}#careers"
                            class="hover:text-white/70 transition-colors">Carreiras</a></li>
                </ul>
            </div>

            <!-- Links Column 2: Áreas de Negócio -->
            <div class="flex flex-col gap-4">
                <h3 class="font-primary text-sm font-bold tracking-wider uppercase text-white pb-2">
                    ÁREAS DE NEGÓCIO</h3>
                <ul class="flex flex-col gap-2.5 text-sm text-white/90">
                    <li><a href="{{ route('panther-mat') }}"
                            class="hover:text-white/70 transition-colors">PantherMAT</a></li>
                    <li><a href="{{ route('panther-build') }}"
                            class="hover:text-white/70 transition-colors">PantherBUILD</a></li>
                    <li><a href="{{ route('panther-oil') }}"
                            class="hover:text-white/70 transition-colors">PantherOIL</a></li>
                    <li><a href="{{ route('enviro') }}" class="hover:text-white/70 transition-colors">Enviro.AO</a>
                    </li>
                </ul>
            </div>

            <!-- Links Column 3: Recursos -->
            <div class="flex flex-col gap-4">
                <h3 class="font-primary text-sm font-bold tracking-wider uppercase text-white pb-2">
                    RECURSOS</h3>
                <ul class="flex flex-col gap-2.5 text-sm text-white/90">
                    <li><a href="{{ route('contact') }}" class="hover:text-white/70 transition-colors">Contactos</a>
                    </li>
                    <li><a href="{{ route('news') }}" class="hover:text-white/70 transition-colors">Notícias e
                            eventos</a></li>
                    <li><a href="{{ route('contact') }}#partners"
                            class="hover:text-white/70 transition-colors">Parceiros</a></li>
                    <li><a href="{{ route('contact') }}#privacy"
                            class="hover:text-white/70 transition-colors">Política de Privacidade</a></li>
                </ul>
            </div>

            <!-- Contacts Column -->
            <div class="flex flex-col gap-4">
                <h3 class="font-primary text-sm font-bold tracking-wider uppercase text-white pb-2">
                    CONTACTOS</h3>
                <ul class="flex flex-col gap-4 text-sm text-white/90">
                    <li class="flex items-start gap-2.5">
                        <span class="leading-relaxed">Centro Logístico de Talatona Armazém D07 Belas – Talatona
                            Angola</span>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <a href="tel:+244929414778" class="hover:text-white/70 transition-colors font-semibold">+244
                            929 414 778</a>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <a href="mailto:geral@abp.co.ao"
                            class="hover:text-white/70 transition-colors">geral@abp.co.ao</a>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="container mx-auto px-6 max-w-[1200px] border-t border-white/20 mt-16 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-white/90">
            <p>© {{ date('Y') }} ABP Group | Desenvolvendo soluções para um futuro sustentável.</p>
            <p>Desenvolvido por <a href="https://xamariz.ao/" target="_blank"
                    class="hover:text-white transition-colors">Xamariz Marketing</a></p>
        </div>
    </footer>

</x-layouts.app>
