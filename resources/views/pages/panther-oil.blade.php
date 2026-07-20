<x-layouts.app>
    <x-slot name="title">PantherOIL | Soluções e Logística Petrolífera - ABP Group</x-slot>

    <!-- Hero Banner -->
    <div class="relative w-full h-[250px] flex items-center bg-[#061127]">
        <div class="absolute inset-0 w-full h-full">
            <img src="{{ isset($contents['hero_image']) ? (str_starts_with($contents['hero_image'], 'http') ? $contents['hero_image'] : (str_starts_with($contents['hero_image'], 'images/') ? asset($contents['hero_image']) : asset('storage/' . $contents['hero_image']))) : 'https://images.unsplash.com/photo-1605389601633-911e3b5e43a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80' }}"
                alt="PantherOil Background" class="w-full h-full object-cover opacity-50" />
            <div class="absolute inset-0 bg-[#061127]/60"></div>
        </div>
        <div class="relative z-10 container mx-auto px-6 max-w-[1200px]">
            <h1 class="font-primary text-4xl md:text-5xl lg:text-6xl font-extrabold text-white">{{ $contents['hero_title'] ?? 'PantherOIL' }}</h1>
        </div>
    </div>

    <!-- Blue Box & Worker Image Overlap -->
    <section class="py-24 bg-white relative">
        <div class="container mx-auto px-6 max-w-[1200px] relative">
            <div class="flex flex-col lg:flex-row items-center relative z-10">
                <!-- Image Left -->
                <div class="w-full lg:w-2/5 relative z-20">
                    <img src="{{ isset($contents['intro_image']) ? (str_starts_with($contents['intro_image'], 'http') ? $contents['intro_image'] : (str_starts_with($contents['intro_image'], 'images/') ? asset($contents['intro_image']) : asset('storage/' . $contents['intro_image']))) : 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}"
                        alt="Engenheiro PantherOil" class="w-full h-[400px] lg:h-[550px] object-cover" />
                </div>
                <!-- Blue Box Right -->
                <div class="w-full lg:w-3/5 bg-[#3b4b8a] text-white p-10 lg:p-16 lg:-ml-16 z-10">
                    <div class="pl-0 lg:pl-16">
                        <h2 class="font-primary text-3xl md:text-4xl font-extrabold leading-tight mb-6">
                            {!! $contents['intro_title'] ?? 'Fornecemos suporte técnico <br class="hidden lg:block" /> operacional e logístico' !!}
                        </h2>
                        <p class="font-secondary text-base text-white/90 leading-relaxed mb-4">
                            {{ $contents['description'] ?? 'A PantherOIL garante serviços logísticos de resposta rápida e distribuição de consumíveis industriais homologados para bases petrolíferas nacionais.' }}
                        </p>
                        <p class="font-secondary text-base text-white/90 leading-relaxed">
                            {{ $contents['description_2'] ?? 'Com rigorosos padrões de saúde, segurança e ambiente (HSE), garantimos fornecimentos em tempo recorde e o suporte de engenheiros experientes.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Text Block -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h2 class="font-primary text-4xl md:text-5xl font-medium text-[#3b4b8a] leading-tight">
                        {!! $contents['apoio_title'] ?? 'Distribuição e <br /><span class="text-[#cc1f26] font-extrabold">Apoio Offshore Especializado</span>' !!}
                    </h2>
                </div>
                <div>
                    <p class="font-secondary text-base text-gray-600 leading-relaxed mb-4">
                        {{ $contents['apoio_text_1'] ?? 'Auditorias periódicas de tubulações, testes de estanqueidade e planos de contenção em conformidade com as normas regulamentares angolanas. Garantimos que todas as intervenções cumprem as exigentes métricas internacionais da indústria petrolífera.' }}
                    </p>
                    <p class="font-secondary text-base text-gray-600 leading-relaxed">
                        {{ $contents['apoio_text_2'] ?? 'Desempenhamos serviços logísticos avançados e suporte mecânico de engenharia diretamente em plataformas flutuantes e embarcações técnicas, otimizando o seu funcionamento.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Grid Section (NOSSOS PROJECTOS) -->
    <section class="py-24 bg-[#3b4b8a]">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="mb-12 flex justify-between items-end">
                <div>
                    <span class="font-primary text-xs font-bold uppercase tracking-widest text-[#cc1f26] mb-2 block">NOSSOS PROJECTOS</span>
                    <h2 class="font-primary text-4xl font-extrabold text-white leading-tight">
                        {!! $contents['projects_title'] ?? 'Logística de Válvulas e <br />Apoio Técnico a Gasodutos' !!}
                    </h2>
                </div>
                <a href="{{ route('projects', ['category' => 'PantherOIL']) }}"
                    class="inline-flex items-center gap-2 text-[#cc1f26] hover:text-[#ff3b45] font-primary font-bold text-sm transition-all duration-300 group">
                    Ver mais <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Global CMS Projects Filtered by PantherOIL -->
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
                        <a href="{{ route('project.details', $project->slug) }}" class="relative h-[320px] group overflow-hidden cursor-pointer block">
                            <img src="{{ $imgSrc }}"
                                alt="{{ $project->title }}"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent group-hover:bg-[#cc1f26]/80 transition-all duration-500">
                            </div>
                            <div
                                class="absolute inset-0 p-6 flex flex-col justify-end z-10 transition-transform duration-500 translate-y-4 group-hover:translate-y-0">
                                <h4 class="font-primary text-xl font-bold text-white mb-1 drop-shadow-md">{{ $project->title }}</h4>
                                <p
                                    class="font-secondary text-sm text-white/90 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 drop-shadow-md">
                                    {{ $project->category }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <p class="text-center text-white/70 py-12">Nenhum projeto encontrado para a PantherOIL.</p>
            @endif
        </div>
    </section>

    <!-- Red Box Intersecting Image -->
    <section class="py-24 bg-white relative">
        <div class="container mx-auto px-6 max-w-[1200px] relative">
            <div class="flex flex-col lg:flex-row items-center relative z-10">
                <!-- Image Left -->
                <div class="w-full lg:w-3/5 relative z-10">
                    <img src="{{ isset($contents['contencao_image']) ? (str_starts_with($contents['contencao_image'], 'http') ? $contents['contencao_image'] : (str_starts_with($contents['contencao_image'], 'images/') ? asset($contents['contencao_image']) : asset('storage/' . $contents['contencao_image']))) : 'https://epcmholdings.com/wp-content/uploads/2024/09/Figure-1.-Inauguration-of-Plataforma.jpg' }}"
                        alt="Pumpjack" class="w-full h-[400px] lg:h-[550px] object-cover" />
                </div>
                <!-- Red Box Right Intersecting -->
                <div class="w-full lg:w-2/5 bg-[#cc1f26] text-white p-10 lg:p-14 lg:-ml-24 z-20">
                    <h3 class="font-primary text-3xl font-bold mb-6 leading-tight">
                        {!! $contents['contencao_title'] ?? 'Planos de Contenção Ecológica e Monitorização' !!}
                    </h3>
                    <p class="font-secondary text-base leading-relaxed mb-4 text-white/90">
                        {{ $contents['contencao_text_1'] ?? 'Desenho e teste prático de sistemas de segurança e estanqueidade para reservatórios de combustíveis. Garantimos o controlo rigoroso e a minimização de impactos ambientais nas instalações sob a nossa responsabilidade.' }}
                    </p>
                    <p class="font-secondary text-base leading-relaxed text-white/90">
                        {{ $contents['contencao_text_2'] ?? 'Equipamentos mecânicos de vanguarda que respondem a protocolos rigorosos e fornecimento sem interrupções.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final Text & Image Row -->
    <section class="py-16 bg-white border-t border-gray-100">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="font-primary text-4xl font-extrabold text-[#3b4b8a] leading-tight mb-6">
                        {!! $contents['seguranca_title'] ?? 'Segurança e Rigor <br /><span class="text-[#cc1f26]">Acima de Tudo</span>' !!}
                    </h2>
                    <p class="font-secondary text-base text-gray-600 leading-relaxed mb-4">
                        {{ $contents['seguranca_text_1'] ?? 'A nossa política de saúde e segurança fomenta operações de excelência. Cada colaborador da PantherOIL atua sob uma premissa base de salvaguarda da integridade da equipa e do ambiente.' }}
                    </p>
                    <p class="font-secondary text-base text-gray-600 leading-relaxed">
                        {{ $contents['seguranca_text_2'] ?? 'Temos orgulho no nosso percurso zero incidentes em projetos de grande complexidade técnica no setor petrolífero e de gás em Angola.' }}
                    </p>
                </div>
                <div class="relative h-[400px]">
                    <img src="{{ isset($contents['seguranca_image']) ? (str_starts_with($contents['seguranca_image'], 'http') ? $contents['seguranca_image'] : (str_starts_with($contents['seguranca_image'], 'images/') ? asset($contents['seguranca_image']) : asset('storage/' . $contents['seguranca_image']))) : 'https://www.shell.co.uk/about-us/what-we-do/oil-and-gas/_jcr_content/root/main/section/item_394575230.shellimg.jpeg' }}"
                        alt="Aerial Platform" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
