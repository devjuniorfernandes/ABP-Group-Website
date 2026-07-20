<x-layouts.app>
    <x-slot name="title">PantherBUILD | Engenharia e Construção Civil - ABP Group</x-slot>

    <!-- Hero Banner -->
    <div class="relative w-full h-[250px] flex items-center bg-[#0d1e3d]">
        <div class="absolute inset-0 w-full h-full">
            <img src="{{ isset($contents['hero_image']) ? (str_starts_with($contents['hero_image'], 'http') ? $contents['hero_image'] : (str_starts_with($contents['hero_image'], 'images/') ? asset($contents['hero_image']) : asset('storage/' . $contents['hero_image']))) : 'https://www.betar.pt/cms/wp-content/uploads/2021/12/Sky_Geral_0_TD-1.jpg' }}"
                alt="PantherBuild Background" class="w-full h-full object-cover opacity-80" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-black/40"></div>
        </div>
        <div class="relative z-10 container mx-auto px-6 max-w-[1200px]">
            <h1 class="font-primary text-4xl md:text-5xl lg:text-6xl font-extrabold text-white">{{ $contents['hero_title'] ?? 'PantherBUILD' }}</h1>
        </div>
    </div>

    <!-- Intro Text & Orange Box Overlay Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-24">
                <div>
                    <h2 class="font-primary text-5xl md:text-6xl font-medium leading-tight text-[#1c3986]">
                        {!! $contents['intro_title'] ?? 'Construção Civil, Engenharia e <span class="text-[#dd5209] font-extrabold block mb-2">estruturas duradouras</span>' !!}
                    </h2>
                </div>
                <div class="pt-2">
                    <p class="font-secondary text-xl text-gray-800 leading-relaxed font-medium mb-8">
                        {{ $contents['description'] ?? 'A PantherBUILD é a nossa marca dedicada ao sector da construção civil. Desenvolvemos projectos industriais de raiz, requalificações urbanas e naves de logística.' }}
                    </p>
                    <p class="font-secondary text-xl text-gray-800 leading-relaxed font-medium">
                        {{ $contents['description_2'] ?? 'A nossa equipa de engenheiros civis e fiscais de obra alia metodologias construtivas modernas de betão e estruturas metálicas a um forte sentido de responsabilidade civil e segurança laboral nos estaleiros.' }}
                    </p>
                </div>
            </div>

            <!-- Large Image with Floating Orange Box -->
            <div class="relative w-full mb-12">
                <div class="relative w-full min-h-[500px] md:min-h-[600px] flex items-center">
                    <img src="{{ isset($contents['overlay_image']) ? (str_starts_with($contents['overlay_image'], 'http') ? $contents['overlay_image'] : (str_starts_with($contents['overlay_image'], 'images/') ? asset($contents['overlay_image']) : asset('storage/' . $contents['overlay_image']))) : 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80' }}"
                        alt="Industrial Construction" class="absolute inset-0 w-full h-full object-cover" />

                    <!-- Orange Box -->
                    <div
                        class="relative z-10 bg-[#dd5209] text-white p-10 md:p-12 max-w-[500px] ml-6 md:ml-12 lg:ml-16 my-12 shadow-none">
                        <h3 class="font-primary text-3xl md:text-4xl font-bold mb-6">{{ $contents['overlay_title'] ?? 'Edificar Angola' }}</h3>
                        <p class="font-secondary text-base leading-relaxed mb-6 text-white/90">
                            {{ $contents['overlay_text_1'] ?? 'A PantherBUILD destaca-se pela sua capacidade técnica superior, assegurando que cada projeto cumpra rigorosos padrões internacionais de qualidade e segurança no trabalho.' }}
                        </p>
                        <p class="font-secondary text-base leading-relaxed text-white/90">
                            {{ $contents['overlay_text_2'] ?? 'Temos uma visão de longo prazo orientada para o desenvolvimento das infraestruturas essenciais do país.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 Orange Overlay Cards -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="relative h-[300px] group overflow-hidden cursor-default">
                    <img src="{{ isset($contents['card1_image']) ? (str_starts_with($contents['card1_image'], 'http') ? $contents['card1_image'] : (str_starts_with($contents['card1_image'], 'images/') ? asset($contents['card1_image']) : asset('storage/' . $contents['card1_image']))) : 'https://images.unsplash.com/photo-1587582423116-ec07293f0395?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}"
                        alt="Construção Industrial"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-[#dd5209]/50 transition-opacity duration-500 group-hover:opacity-0">
                    </div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-white z-10 drop-shadow-md">
                        <h4 class="font-primary text-xl font-bold mb-2">{{ $contents['card1_title'] ?? 'Construção Industrial' }}</h4>
                        <p class="font-secondary text-sm">{{ $contents['card1_text'] ?? 'Edificação de pavilhões metálicos, centros de logística e armazéns.' }}</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="relative h-[300px] group overflow-hidden cursor-default">
                    <img src="{{ isset($contents['card2_image']) ? (str_starts_with($contents['card2_image'], 'http') ? $contents['card2_image'] : (str_starts_with($contents['card2_image'], 'images/') ? asset($contents['card2_image']) : asset('storage/' . $contents['card2_image']))) : 'https://www.simplybusiness.co.uk/wp-content/uploads/sites/3/2024/05/2024-predictions-for-tradespeople.jpeg' }}"
                        alt="Obras Públicas"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-[#dd5209]/50 transition-opacity duration-500 group-hover:opacity-0">
                    </div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-white z-10 drop-shadow-md">
                        <h4 class="font-primary text-xl font-bold mb-2">{{ $contents['card2_title'] ?? 'Obras Públicas' }}</h4>
                        <p class="font-secondary text-sm">{{ $contents['card2_text'] ?? 'Reabilitação de vias urbanas, terraplenagem e saneamento integrado.' }}</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="relative h-[300px] group overflow-hidden cursor-default">
                    <img src="{{ isset($contents['card3_image']) ? (str_starts_with($contents['card3_image'], 'http') ? $contents['card3_image'] : (str_starts_with($contents['card3_image'], 'images/') ? asset($contents['card3_image']) : asset('storage/' . $contents['card3_image']))) : 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}"
                        alt="Fiscalização e Design"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-[#dd5209]/50 transition-opacity duration-500 group-hover:opacity-0">
                    </div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-white z-10 drop-shadow-md">
                        <h4 class="font-primary text-xl font-bold mb-2">{{ $contents['card3_title'] ?? 'Fiscalização e Design' }}</h4>
                        <p class="font-secondary text-sm">{{ $contents['card3_text'] ?? 'Elaboração de plantas de cálculo de betão armado e coordenação de obra.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image on Right, Text on Left with Square Element -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative pl-0">
                    <h2 class="font-primary text-5xl font-medium leading-tight mb-6">
                        {!! $contents['modern_title'] ?? '<span class="text-[#1c3986] block">Engenharia Moderna</span><span class="text-[#dd5209] font-extrabold  block">e Estruturas Avançadas</span>' !!}
                    </h2>
                    <p class="font-secondary text-lg text-gray-800 leading-relaxed font-medium mb-6">
                        {{ $contents['modern_text_1'] ?? 'Desempenhamos um papel fulcral na modernização de complexos industriais, garantindo elevados padrões de qualidade na execução de cada etapa de engenharia civil.' }}
                    </p>
                    <p class="font-secondary text-lg text-gray-800 leading-relaxed font-medium mb-12">
                        {{ $contents['modern_text_2'] ?? 'A nossa missão foca-se na eficiência estrutural e segurança ambiental de todos os estaleiros.' }}
                    </p>
                </div>
                <div class="relative h-[600px] z-10">
                    <img src="{{ isset($contents['modern_image']) ? (str_starts_with($contents['modern_image'], 'http') ? $contents['modern_image'] : (str_starts_with($contents['modern_image'], 'images/') ? asset($contents['modern_image']) : asset('storage/' . $contents['modern_image']))) : 'https://img.magnific.com/free-photo/african-american-worker-standing-uniform-wearing-safety-hat-factory_1303-30606.jpg' }}"
                        alt="Engenheiro" class="w-full h-full object-cover" />
                    <!-- Small orange square decoration -->
                    <div class="w-32 h-32 bg-[#dd5209] absolute bottom-0 left-0 lg:-left-8 z-20"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Grid Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="mb-12 flex flex-col md:flex-row md:justify-between md:items-end gap-6">
                <div>
                    <span class="font-primary text-xs font-bold uppercase tracking-widest text-[#dd5209] mb-2 block">NOSSOS
                        PROJECTOS</span>
                    <h2 class="font-primary text-4xl font-extrabold text-[#1c3986] leading-tight">
                        {!! $contents['projects_title'] ?? 'Projectos que reflectem a nossa <br /><span class="text-[#dd5209]">experiência, qualidade e compromisso</span>' !!}
                    </h2>
                    <p class="font-secondary text-gray-600 mt-4 max-w-3xl">
                        {{ $contents['projects_subtitle'] ?? 'Conheça em detalhe algumas das nossas obras estruturais de referência desenvolvidas para clientes nacionais e internacionais.' }}
                    </p>
                </div>
                <a href="{{ route('projects', ['category' => 'PantherBUILD']) }}" class="inline-flex items-center gap-2 text-[#dd5209] hover:opacity-80 font-primary font-bold text-sm transition-all duration-300 group">
                    Ver mais 
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>
                </a>
            </div>

            @php
                $getProjectData = function($index, $projectsList, $contentsList, $defaultImg, $defaultTitle, $defaultCategory) {
                    $p = isset($projectsList[$index]) ? $projectsList[$index] : null;
                    if ($p) {
                        $rawImg = $p->cover_image;
                        $img = $rawImg 
                            ? (str_starts_with($rawImg, 'http') 
                                ? $rawImg 
                                : (str_starts_with($rawImg, 'images/') ? asset($rawImg) : asset('storage/' . $rawImg))) 
                            : asset('images/corporate-hero.png');
                        return [
                            'title' => $p->title,
                            'category' => $p->category ?? 'PantherBUILD',
                            'image' => $img,
                            'link' => route('project.details', $p->slug),
                        ];
                    }
                    
                    $keyNum = $index + 1;
                    $rawImg = $contentsList["project{$keyNum}_image"] ?? null;
                    $img = $rawImg 
                        ? (str_starts_with($rawImg, 'http') 
                            ? $rawImg 
                            : (str_starts_with($rawImg, 'images/') ? asset($rawImg) : asset('storage/' . $rawImg))) 
                        : $defaultImg;

                    return [
                        'title' => $contentsList["project{$keyNum}_title"] ?? $defaultTitle,
                        'category' => $contentsList["project{$keyNum}_category"] ?? $defaultCategory,
                        'image' => $img,
                        'link' => route('projects', ['category' => 'PantherBUILD']),
                    ];
                };

                $p0 = $getProjectData(0, $projects ?? collect(), $contents ?? [], 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80', 'Centro Logístico de Talatona', 'Construção Industrial');
                $p1 = $getProjectData(1, $projects ?? collect(), $contents ?? [], 'https://images.unsplash.com/photo-1531834685032-c34bf0d84c77?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80', 'Pavilhão de Armazenamento', 'Estrutura Metálica');
                $p2 = $getProjectData(2, $projects ?? collect(), $contents ?? [], 'https://images.unsplash.com/photo-1587582423116-ec07293f0395?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', 'Urbanização de Vias', 'Infraestrutura rodoviária');
                $p3 = $getProjectData(3, $projects ?? collect(), $contents ?? [], 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjNw9NAzytNyKhAZRBOhwdvxMGeX19g3DfF2g23VaXn8GnoWe16tuLsyhvWyg3o4DrJHNmcfN6KNsWwIuK0aJadYncw0S81J-mNpq_E_mWknNTuR_Xx-VZY5roGVDwZToI2x0S_Qqyfm4KR/s1600/MDA.jpg', 'Engenharia Civil', 'Obras Públicas');
                $p4 = $getProjectData(4, $projects ?? collect(), $contents ?? [], 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80', 'Auditoria Técnica', 'Controlo de Qualidade');
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Large Top Left -->
                <a href="{{ $p0['link'] }}" class="relative h-[400px] group overflow-hidden cursor-pointer block">
                    <img src="{{ $p0['image'] }}"
                        alt="{{ $p0['title'] }}"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 p-8 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <h4 class="font-primary text-2xl font-bold text-white mb-1">{{ $p0['title'] }}</h4>
                        <p
                            class="font-secondary text-sm text-white/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                            {{ $p0['category'] }}</p>
                    </div>
                </a>
                <!-- Large Top Right -->
                <a href="{{ $p1['link'] }}" class="relative h-[400px] group overflow-hidden cursor-pointer block">
                    <img src="{{ $p1['image'] }}"
                        alt="{{ $p1['title'] }}"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 p-8 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <h4 class="font-primary text-2xl font-bold text-white mb-1">{{ $p1['title'] }}</h4>
                        <p
                            class="font-secondary text-sm text-white/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                            {{ $p1['category'] }}</p>
                    </div>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Small Bottom 1 -->
                <a href="{{ $p2['link'] }}" class="relative h-[250px] group overflow-hidden cursor-pointer block">
                    <img src="{{ $p2['image'] }}"
                        alt="{{ $p2['title'] }}"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <!-- Black gradient for normal state text readability -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent transition-opacity duration-500 group-hover:opacity-0 z-10">
                    </div>
                    <!-- Orange overlay for hover state -->
                    <div
                        class="absolute inset-0 bg-[#dd5209]/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    </div>

                    <div
                        class="absolute bottom-0 left-0 p-6 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 z-20">
                        <h4 class="font-primary text-lg font-bold text-white mb-1 drop-shadow-md">{{ $p2['title'] }}
                        </h4>
                        <p
                            class="font-secondary text-sm text-white/90 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 drop-shadow-md">
                            {{ $p2['category'] }}</p>
                    </div>
                </a>
                <!-- Small Bottom 2 -->
                <a href="{{ $p3['link'] }}" class="relative h-[250px] group overflow-hidden cursor-pointer block">
                    <img src="{{ $p3['image'] }}"
                        alt="{{ $p3['title'] }}"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <!-- Black gradient for normal state text readability -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent transition-opacity duration-500 group-hover:opacity-0 z-10">
                    </div>
                    <!-- Orange overlay for hover state -->
                    <div
                        class="absolute inset-0 bg-[#dd5209]/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    </div>

                    <div
                        class="absolute bottom-0 left-0 p-6 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 z-20">
                        <h4 class="font-primary text-lg font-bold text-white mb-1 drop-shadow-md">{{ $p3['title'] }}</h4>
                        <p
                            class="font-secondary text-sm text-white/90 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 drop-shadow-md">
                            {{ $p3['category'] }}</p>
                    </div>
                </a>
                <!-- Small Bottom 3 -->
                <a href="{{ $p4['link'] }}" class="relative h-[250px] group overflow-hidden cursor-pointer block">
                    <img src="{{ $p4['image'] }}"
                        alt="{{ $p4['title'] }}"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <!-- Black gradient for normal state text readability -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent transition-opacity duration-500 group-hover:opacity-0 z-10">
                    </div>
                    <!-- Orange overlay for hover state -->
                    <div
                        class="absolute inset-0 bg-[#dd5209]/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    </div>

                    <div
                        class="absolute bottom-0 left-0 p-6 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 z-20">
                        <h4 class="font-primary text-lg font-bold text-white mb-1 drop-shadow-md">{{ $p4['title'] }}
                        </h4>
                        <p
                            class="font-secondary text-sm text-white/90 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 drop-shadow-md">
                            {{ $p4['category'] }}</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
