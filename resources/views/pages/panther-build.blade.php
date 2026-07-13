<x-layouts.app logo="images/logos/abp_panthrtbuildabp_.png" logoUrl="{{ route('panther-build') }}">
    <x-slot name="title">PantherBUILD | Engenharia e Construção Civil - ABP Group</x-slot>

    <!-- Hero Banner -->
    <div class="relative w-full h-[300px] flex items-end pb-10 bg-[#0d1e3d]">
        <div class="absolute inset-0 w-full h-full">
            <img src="https://www.betar.pt/cms/wp-content/uploads/2021/12/Sky_Geral_0_TD-1.jpg"
                alt="PantherBuild Background" class="w-full h-full object-cover opacity-80" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-black/40"></div>
        </div>
        <div class="relative z-10 container mx-auto px-6 max-w-[1200px]">
            <h1 class="font-primary text-5xl md:text-7xl font-extrabold text-white">PantherBuild</h1>
        </div>
    </div>

    <!-- Intro Text & Orange Box Overlay Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-24">
                <div>
                    <h2 class="font-primary text-5xl md:text-6xl font-medium leading-tight">
                        <span class="text-[#1c3986] block">Construção Civil, Engenharia e</span>
                        <span class="text-[#dd5209] font-extrabold block mb-2"> estruturas duradouras</span>
                    </h2>
                </div>
                <div class="pt-2">
                    <p class="font-secondary text-xl text-gray-800 leading-relaxed font-medium mb-8">
                        A PantherBUILD é o braço de construção civil e engenharia do ABP Group. Construímos com foco em
                        segurança, prazos rigorosos e sustentabilidade estrutural. Desde armazéns de grande vão livre a
                        edifícios comerciais complexos e infraestruturas urbanas de vias de comunicação.
                    </p>
                    <p class="font-secondary text-xl text-gray-800 leading-relaxed font-medium">
                        A nossa equipa de engenheiros civis e fiscais de obra alia metodologias construtivas modernas de
                        betão e estruturas metálicas a um forte sentido de responsabilidade civil e segurança laboral
                        nos estaleiros.
                    </p>
                </div>
            </div>

            <!-- Large Image with Floating Orange Box -->
            <div class="relative w-full mb-12">
                <div class="relative w-full min-h-[500px] md:min-h-[600px] flex items-center">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80"
                        alt="Industrial Construction" class="absolute inset-0 w-full h-full object-cover" />

                    <!-- Orange Box -->
                    <div
                        class="relative z-10 bg-[#dd5209] text-white p-10 md:p-12 max-w-[500px] ml-6 md:ml-12 lg:ml-16 my-12 shadow-none">
                        <h3 class="font-primary text-3xl md:text-4xl font-bold mb-6">Edificar Angola</h3>
                        <p class="font-secondary text-base leading-relaxed mb-6 text-white/90">
                            A PantherBUILD destaca-se pela sua capacidade técnica superior, assegurando que cada projeto
                            cumpra rigorosos padrões internacionais de qualidade e segurança no trabalho.
                        </p>
                        <p class="font-secondary text-base leading-relaxed text-white/90">
                            Temos uma visão de longo prazo orientada para o desenvolvimento das infraestruturas
                            essenciais do país.
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
                    <img src="https://images.unsplash.com/photo-1587582423116-ec07293f0395?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Construção Industrial"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-[#dd5209]/50 transition-opacity duration-500 group-hover:opacity-0">
                    </div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-white z-10 drop-shadow-md">
                        <h4 class="font-primary text-xl font-bold mb-2">Construção Industrial</h4>
                        <p class="font-secondary text-sm">Edificação de pavilhões metálicos, centros de logística e
                            armazéns.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="relative h-[300px] group overflow-hidden cursor-default">
                    <img src="https://www.simplybusiness.co.uk/wp-content/uploads/sites/3/2024/05/2024-predictions-for-tradespeople.jpeg"
                        alt="Obras Públicas"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-[#dd5209]/50 transition-opacity duration-500 group-hover:opacity-0">
                    </div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-white z-10 drop-shadow-md">
                        <h4 class="font-primary text-xl font-bold mb-2">Obras Públicas</h4>
                        <p class="font-secondary text-sm">Reabilitação de vias urbanas, terraplenagem e saneamento
                            integrado.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="relative h-[300px] group overflow-hidden cursor-default">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Fiscalização"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-[#dd5209]/50 transition-opacity duration-500 group-hover:opacity-0">
                    </div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end text-white z-10 drop-shadow-md">
                        <h4 class="font-primary text-xl font-bold mb-2">Fiscalização e Design</h4>
                        <p class="font-secondary text-sm">Elaboração de plantas de cálculo de betão armado e coordenação
                            de obra.</p>
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
                        <span class="text-[#1c3986] block">Engenharia Moderna</span>
                        <span class="text-[#dd5209] font-extrabold  block">e Estruturas Avançadas</span>
                    </h2>
                    <p class="font-secondary text-lg text-gray-800 leading-relaxed font-medium mb-6">
                        Desempenhamos um papel fulcral na modernização de complexos industriais, garantindo elevados
                        padrões de qualidade na execução de cada etapa de engenharia civil.
                    </p>
                    <p class="font-secondary text-lg text-gray-800 leading-relaxed font-medium mb-12">
                        A nossa missão foca-se na eficiência estrutural e segurança ambiental de todos os estaleiros.
                    </p>
                </div>
                <div class="relative h-[600px] z-10">
                    <img src="https://img.magnific.com/free-photo/african-american-worker-standing-uniform-wearing-safety-hat-factory_1303-30606.jpg"
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
                        Projectos que reflectem a nossa <br />
                        <span class="text-[#dd5209]">experiência, qualidade e compromisso</span>
                    </h2>
                    <p class="font-secondary text-gray-600 mt-4 max-w-3xl">
                        Conheça em detalhe algumas das nossas obras estruturais de referência desenvolvidas para clientes
                        nacionais e internacionais.
                    </p>
                </div>
                <a href="#" class="inline-flex items-center gap-2 text-[#dd5209] hover:opacity-80 font-primary font-bold text-sm transition-all duration-300 group">
                    Ver mais 
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Large Top Left -->
                <div class="relative h-[400px] group overflow-hidden cursor-default">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                        alt="Logística"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 p-8 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <h4 class="font-primary text-2xl font-bold text-white mb-1">Centro Logístico de Talatona</h4>
                        <p
                            class="font-secondary text-sm text-white/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                            Construção Industrial</p>
                    </div>
                </div>
                <!-- Large Top Right -->
                <div class="relative h-[400px] group overflow-hidden cursor-default">
                    <img src="https://images.unsplash.com/photo-1531834685032-c34bf0d84c77?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                        alt="Pavilhão"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 p-8 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <h4 class="font-primary text-2xl font-bold text-white mb-1">Pavilhão de Armazenamento</h4>
                        <p
                            class="font-secondary text-sm text-white/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                            Estrutura Metálica</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Small Bottom 1 -->
                <div class="relative h-[250px] group overflow-hidden cursor-default">
                    <img src="https://images.unsplash.com/photo-1587582423116-ec07293f0395?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Vias"
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
                        <h4 class="font-primary text-lg font-bold text-white mb-1 drop-shadow-md">Urbanização de Vias
                        </h4>
                        <p
                            class="font-secondary text-sm text-white/90 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 drop-shadow-md">
                            Infraestrutura rodoviária</p>
                    </div>
                </div>
                <!-- Small Bottom 2 -->
                <div class="relative h-[250px] group overflow-hidden cursor-default">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjNw9NAzytNyKhAZRBOhwdvxMGeX19g3DfF2g23VaXn8GnoWe16tuLsyhvWyg3o4DrJHNmcfN6KNsWwIuK0aJadYncw0S81J-mNpq_E_mWknNTuR_Xx-VZY5roGVDwZToI2x0S_Qqyfm4KR/s1600/MDA.jpg"
                        alt="Engenharia Civil"
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
                        <h4 class="font-primary text-lg font-bold text-white mb-1 drop-shadow-md">Engenharia Civil</h4>
                        <p
                            class="font-secondary text-sm text-white/90 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 drop-shadow-md">
                            Obras Públicas</p>
                    </div>
                </div>
                <!-- Small Bottom 3 -->
                <div class="relative h-[250px] group overflow-hidden cursor-default">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Auditoria"
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
                        <h4 class="font-primary text-lg font-bold text-white mb-1 drop-shadow-md">Auditoria Técnica
                        </h4>
                        <p
                            class="font-secondary text-sm text-white/90 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 drop-shadow-md">
                            Controlo de Qualidade</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
