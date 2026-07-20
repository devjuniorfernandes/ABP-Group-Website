<x-layouts.app>
    <x-slot name="title">PantherMAT | Gestão de Instalações e Climatização AVAC - ABP Group</x-slot>

    <!-- Hero Banner -->
    <div class="relative w-full h-[250px] flex items-center bg-[#1a2c42]">
        <div class="absolute inset-0 w-full h-full">
            <img src="{{ isset($contents['hero_image']) ? (str_starts_with($contents['hero_image'], 'http') ? $contents['hero_image'] : (str_starts_with($contents['hero_image'], 'images/') ? asset($contents['hero_image']) : asset('storage/' . $contents['hero_image']))) : 'https://images.unsplash.com/photo-1581094288338-2314dddb7ece?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80' }}"
                alt="PantherMat Background" class="w-full h-full object-cover opacity-80" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-black/40"></div>
        </div>
        <div class="relative z-10 container mx-auto px-6 max-w-[1200px]">
            <h1 class="font-primary text-4xl md:text-5xl lg:text-6xl font-extrabold text-white">{{ $contents['hero_title'] ?? 'PantherMAT' }}</h1>
        </div>
    </div>

    <!-- Introduction Section -->
    <section class="py-24 relative overflow-hidden"
        style="background-color: #f1f5f9; background-image: linear-gradient(rgba(203, 213, 225, 0.4) 1px, transparent 1px), linear-gradient(90deg, rgba(203, 213, 225, 0.4) 1px, transparent 1px); background-size: 40px 40px;">
        <div class="container mx-auto px-6 max-w-[1200px] relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div>
                    <h2 class="font-primary text-4xl md:text-5xl font-medium text-[#3b4b8a] leading-tight">
                        {!! $contents['intro_title'] ?? 'Soluções de gestão e manutenção que <span class="text-gray-600 font-extrabold"> garantem continuidade operacional</span>' !!}
                    </h2>
                </div>
                <div class="flex flex-col justify-center space-y-6">
                    <p class="font-secondary text-lg text-gray-700 leading-relaxed font-semibold">
                        {{ $contents['description'] ?? 'A PantherMAT actua na instalação, manutenção e assistência técnica de equipamentos de AVAC e distribuição de fluidos industriais para edifícios corporativos.' }}
                    </p>
                    <p class="font-secondary text-base text-gray-600 leading-relaxed">
                        {{ $contents['description_2'] ?? 'A nossa equipa técnica de engenheiros e mecânicos credenciados assegura que equipamentos críticos de refrigeração e eletricidade funcionem sem interrupções indesejadas, prolongando a vida útil dos seus ativos físicos.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Large Image Section -->
    <section class="w-full relative h-[70vh] min-h-[600px] flex items-center">
        <img src="{{ isset($contents['banner_image']) ? (str_starts_with($contents['banner_image'], 'http') ? $contents['banner_image'] : (str_starts_with($contents['banner_image'], 'images/') ? asset($contents['banner_image']) : asset('storage/' . $contents['banner_image']))) : 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80' }}"
            alt="Trabalhadores Industriais" class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="container mx-auto px-6 max-w-[1200px] relative z-10">
            <h2 class="font-primary text-5xl md:text-6xl font-extrabold text-white max-w-3xl leading-tight">
                {{ $contents['banner_title'] ?? 'Gestão de activos físicos com excelência, eficiência e inovação.' }}
            </h2>
        </div>
    </section>

    <!-- Text Blocks -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-5">
                    <h2 class="font-primary text-4xl md:text-5xl font-medium text-[#3b4b8a] leading-tight">
                        {!! $contents['sec2_title'] ?? 'Manutenção Preventiva <br /><span class="text-gray-600 font-extrabold">e Corretiva Avançada</span>' !!}
                    </h2>
                </div>
                <div class="lg:col-span-7 space-y-6 pt-2 lg:pt-4">
                    <p class="font-secondary text-lg text-[#1a2c42] leading-relaxed">
                        {{ $contents['sec2_text_1'] ?? 'Somos uma referência angolana no dimensionamento, instalação e manutenção preventiva de sistemas de climatização comercial (AVAC).' }}
                    </p>
                    <p class="font-secondary text-lg text-gray-600 leading-relaxed">
                        {{ $contents['sec2_text_2'] ?? 'Disponibilização de piquetes técnicos urgentes para resolução rápida de falhas elétricas, inundações ou colapsos de climatização em Luanda. Garantimos suporte 24/7 para que o seu negócio não pare.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vertical Cards Section -->
    <section class="py-24 bg-[#8fa0b3]">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="relative h-[500px] group overflow-hidden cursor-default">
                    <img src="{{ isset($contents['card1_image']) ? (str_starts_with($contents['card1_image'], 'http') ? $contents['card1_image'] : (str_starts_with($contents['card1_image'], 'images/') ? asset($contents['card1_image']) : asset('storage/' . $contents['card1_image']))) : 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}"
                        alt="AVAC"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#1a2c42]/80 via-[#1a2c42]/30 to-transparent transition-opacity duration-500 group-hover:opacity-0 z-10">
                    </div>
                    <div
                        class="absolute inset-0 bg-[#8fa0b3]/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    </div>

                    <div
                        class="absolute bottom-0 left-0 p-8 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 z-20">
                        <h3 class="font-primary text-2xl font-bold text-white mb-2 drop-shadow-md">{{ $contents['card1_title'] ?? 'Climatização AVAC' }}
                        </h3>
                        <p
                            class="font-secondary text-sm text-white/90 line-clamp-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 drop-shadow-md">
                            {{ $contents['card1_text'] ?? 'Instalação de chillers, centrais de tratamento de ar (UTA) e cassetes de refrigeração comercial.' }}
                        </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="relative h-[500px] group overflow-hidden cursor-default">
                    <img src="{{ isset($contents['card2_image']) ? (str_starts_with($contents['card2_image'], 'http') ? $contents['card2_image'] : (str_starts_with($contents['card2_image'], 'images/') ? asset($contents['card2_image']) : asset('storage/' . $contents['card2_image']))) : 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}"
                        alt="Facility Management"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#1a2c42]/80 via-[#1a2c42]/30 to-transparent transition-opacity duration-500 group-hover:opacity-0 z-10">
                    </div>
                    <div
                        class="absolute inset-0 bg-[#8fa0b3]/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    </div>

                    <div
                        class="absolute bottom-0 left-0 p-8 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 z-20">
                        <h3 class="font-primary text-2xl font-bold text-white mb-2 drop-shadow-md">{{ $contents['card2_title'] ?? 'Facility Management' }}
                        </h3>
                        <p
                            class="font-secondary text-sm text-white/90 line-clamp-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 drop-shadow-md">
                            {{ $contents['card2_text'] ?? 'Gestão física de condomínios comerciais, equipas residentes de eletricidade e canalização.' }}
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="relative h-[500px] group overflow-hidden cursor-default">
                    <img src="{{ isset($contents['card3_image']) ? (str_starts_with($contents['card3_image'], 'http') ? $contents['card3_image'] : (str_starts_with($contents['card3_image'], 'images/') ? asset($contents['card3_image']) : asset('storage/' . $contents['card3_image']))) : 'https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}"
                        alt="Eficiência"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#1a2c42]/80 via-[#1a2c42]/30 to-transparent transition-opacity duration-500 group-hover:opacity-0 z-10">
                    </div>
                    <div
                        class="absolute inset-0 bg-[#8fa0b3]/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    </div>

                    <div
                        class="absolute bottom-0 left-0 p-8 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 z-20">
                        <h3 class="font-primary text-2xl font-bold text-white mb-2 drop-shadow-md">{{ $contents['card3_title'] ?? 'Otimização Energética' }}
                        </h3>
                        <p
                            class="font-secondary text-sm text-white/90 line-clamp-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 drop-shadow-md">
                            {{ $contents['card3_text'] ?? 'Instalação de variadores de velocidade e condensadores de fator de potência.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Split Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative h-[400px]">
                    <img src="{{ isset($contents['split_image']) ? (str_starts_with($contents['split_image'], 'http') ? $contents['split_image'] : (str_starts_with($contents['split_image'], 'images/') ? asset($contents['split_image']) : asset('storage/' . $contents['split_image']))) : 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80' }}"
                        alt="Equipamentos" class="w-full h-full object-cover z-10 relative" />
                    <div class="absolute -bottom-8 -right-8 w-32 h-32 bg-[#8fa0b3] z-0"></div>
                </div>
                <div class="flex flex-col space-y-6">
                    <h2 class="font-primary text-4xl md:text-5xl font-medium text-[#3b4b8a] leading-tight">
                        {!! $contents['split_title'] ?? 'Compromisso com a <br /><span class="text-gray-600 font-extrabold">Qualidade e Eficiência</span>' !!}
                    </h2>
                    <p class="font-secondary text-base text-gray-600 leading-relaxed">
                        {{ $contents['split_text_1'] ?? 'A nossa abordagem foca-se em reduzir custos operacionais enquanto aumentamos a longevidade dos equipamentos. Com técnicos altamente experientes, a PantherMAT transforma a manutenção de um centro de custos para um fator de vantagem competitiva.' }}
                    </p>
                    <p class="font-secondary text-base text-gray-600 leading-relaxed">
                        {{ $contents['split_text_2'] ?? 'Implementamos processos rigorosos de controlo e auditoria, permitindo antever falhas através de planos de manutenção preventiva detalhados.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Grid Projects Section -->
    <section class="py-24 bg-white border-t border-gray-100">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="mb-12 flex flex-col md:flex-row md:justify-between md:items-end gap-6">
                <div>
                    <span class="font-primary text-xs font-bold uppercase tracking-widest text-[#3b4b8a] mb-2 block">NOSSOS
                        PROJECTOS</span>
                    <h2 class="font-primary text-4xl font-extrabold text-gray-600 leading-tight">
                        {!! $contents['projects_title'] ?? 'Projectos que reflectem a nossa <br /><span class="text-[#3b4b8a]">experiência, qualidade e compromisso</span>' !!}
                    </h2>
                    <p class="font-secondary text-gray-600 mt-4 max-w-3xl">
                        {{ $contents['projects_subtitle'] ?? 'Conheça em detalhe algumas das nossas obras estruturais de referência desenvolvidas para clientes nacionais e internacionais.' }}
                    </p>
                </div>
                <a href="{{ route('projects', ['category' => 'PantherMAT']) }}" class="inline-flex items-center gap-2 text-[#3b4b8a] hover:opacity-80 font-primary font-bold text-sm transition-all duration-300 group">
                    Ver mais 
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>
                </a>
            </div>

            @if($projects && $projects->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
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
                        <a href="{{ route('project.details', $project->slug) }}" class="relative h-[300px] group overflow-hidden cursor-pointer block">
                            <img src="{{ $imgSrc }}"
                                alt="{{ $project->title }}"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent transition-opacity duration-500 group-hover:opacity-0 z-10">
                            </div>
                            <div
                                class="absolute inset-0 bg-[#8fa0b3]/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                            </div>

                            <div
                                class="absolute bottom-0 left-0 p-6 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 z-20">
                                <h4 class="font-primary text-xl font-bold text-white mb-1 drop-shadow-md">{{ $project->title }}</h4>
                                <p
                                    class="font-secondary text-sm text-white/90 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 drop-shadow-md">
                                    {{ $project->category }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <p class="text-center text-gray-500 py-12">Nenhum projeto encontrado para a PantherMAT.</p>
            @endif
        </div>
    </section>

</x-layouts.app>
