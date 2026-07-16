<x-layouts.app logo="images/logos/enviro_ao.png" logoUrl="{{ route('enviro') }}" :hideFooter="true">
    <x-slot name="title">Enviro.AO | Consultoria e Engenharia Ambiental - ABP Group</x-slot>

    <!-- Hero Banner -->
    <div class="relative w-full h-[80vh] min-h-[600px] flex items-center bg-black overflow-hidden mt-[-100px]">
        <!-- Note: mt-[-100px] to go under transparent navbar if needed. Assuming standard header behavior. -->
        <div class="absolute inset-0 w-full h-full z-0 pt-[100px]">
            <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover opacity-70">
                <source src="{{ asset('hero_video.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-transparent"></div>
        </div>
        <div class="relative z-10 container mx-auto px-6 max-w-[1200px] mt-12">
            <h1
                class="font-primary text-5xl md:text-6xl lg:text-[75px] font-extrabold text-white leading-[1.1] tracking-tight max-w-4xl">
                {{ $contents['hero_title'] ?? 'Enviro.AO' }}
            </h1>
        </div>
    </div>

    <!-- Intro Text Section -->
    <section class="py-24 bg-white relative z-20">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <h2
                class="font-primary text-5xl md:text-6xl lg:text-[65px] font-extrabold leading-[1.05] mb-10 tracking-tight">
                <span class="text-[#3b6b35] block">Lorem ipsum dolor sit amet</span>
                <span class="text-[#99c24d] block">consectetur adipiscing</span>
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
                        <!-- Icon 1: Ecology/People -->
                        <img src="{{ asset('images/svg/envaro_1.svg') }}" alt="Icon 1" class="w-full h-full">

                    </div>
                    <h3 class="font-primary text-2xl font-bold text-[#99c24d] mb-4">Lorem Ipsom</h3>
                    <p
                        class="font-secondary text-base text-gray-500 group-hover:text-white transition-colors duration-300">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>
                <!-- Card 2 -->
                <div
                    class="group bg-[#F5F5F5] hover:bg-[#3B6B39] transition-colors duration-300 p-10 border border-[#99c24d]/30 flex flex-col h-full cursor-pointer">
                    <div class="w-16 h-16 mb-6 text-[#99c24d]">
                        <!-- Icon 2: Quality/Check -->
                        <img src="{{ asset('images/svg/envaro_2.svg') }}" alt="Icon 1" class="w-full h-full">
                    </div>
                    <h3 class="font-primary text-2xl font-bold text-[#99c24d] mb-4">Lorem Ipsom</h3>
                    <p
                        class="font-secondary text-base text-gray-500 group-hover:text-white transition-colors duration-300">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>
                <!-- Card 3 -->
                <div
                    class="group bg-[#F5F5F5] hover:bg-[#3B6B39] transition-colors duration-300 p-10 border border-[#99c24d]/30 flex flex-col h-full cursor-pointer">
                    <div class="w-16 h-16 mb-6 text-[#99c24d]">
                        <!-- Icon 3: Energy/Efficiency -->
                        <img src="{{ asset('images/svg/envaro_3.svg') }}" alt="Icon 1" class="w-full h-full">
                    </div>
                    <h3 class="font-primary text-2xl font-bold text-[#99c24d] mb-4">Lorem Ipsom</h3>
                    <p
                        class="font-secondary text-base text-gray-500 group-hover:text-white transition-colors duration-300">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
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
                        <span class="text-[#3b6b35] block">Lorem ipsum dolor sit amet</span>
                        <span class="text-[#99c24d] block">consectetur adipiscing</span>
                    </h2>
                    <p class="font-secondary text-lg text-gray-800 leading-relaxed mb-6 font-medium">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                    </p>
                    <p class="font-secondary text-lg text-gray-800 leading-relaxed font-medium">
                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                        sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                        adipisci velit, sed quia
                    </p>
                </div>
                <!-- Collage Right -->
                <div class="relative h-[600px] w-full mt-10 lg:mt-0">
                    <!-- Top Right Image -->
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Volunteers" class="absolute top-[5%] right-0 w-[45%] h-[250px] object-cover z-10" />

                    <!-- Middle Image -->
                    <img src="https://www.endiama.co.ao/images/sustentavel/ambiental/img-03.webp" alt="Tree planting"
                        class="absolute top-[25%] right-[25%] w-[50%] h-[350px] object-cover z-20" />

                    <!-- Bottom Left Image -->
                    <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Recycling" class="absolute bottom-[5%] left-[5%] w-[40%] h-[250px] object-cover z-30" />
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax Section -->
    <section class="relative py-32 bg-fixed bg-center bg-cover"
        style="background-image: url('https://images.ecycle.com.br/wp-content/uploads/2022/03/18132456/pexels-tom-fisk-2739666-scaled.jpg.webp');">
        <!-- Green Overlay with opacity -->
        <div class="absolute inset-0 bg-[#3b6b35]/85"></div>

        <div class="container mx-auto px-6 max-w-[1200px] relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left Column -->
                <div>
                    <h2 class="font-primary text-3xl md:text-4xl font-bold text-white leading-tight mb-8">
                        Lorem ipsum dolor sit<br>
                        amet, consectetur
                    </h2>
                    <p class="font-secondary text-lg text-white/90 leading-relaxed">
                        Lorem ipsum dolor sit amet,<br class="hidden md:block">
                        consectetur adipiscing elit, sed do<br class="hidden md:block">
                        eiusmod tempor incididunt ut labore<br class="hidden md:block">
                        et dolore magna aliqua. Ut enim ad<br class="hidden md:block">
                        minim veniam, quis nostrud<br class="hidden md:block">
                        exercitation ullamco laboris nisi ut<br class="hidden md:block">
                        aliquip ex ea commodo consequat.
                    </p>
                </div>
                <!-- Right Column -->
                <div class="flex justify-start lg:justify-end">
                    <div class="flex flex-col items-start gap-4">
                        <span
                            class="font-primary text-5xl md:text-[60px] lg:text-[70px] font-extrabold text-[#99c24d] leading-tight">Lorem
                            ipsum</span>
                        <span
                            class="font-primary text-5xl md:text-[60px] lg:text-[70px] font-extrabold text-[#99c24d] leading-tight">dolor
                            sit amet</span>
                        <span
                            class="font-primary text-5xl md:text-[60px] lg:text-[70px] font-extrabold text-white leading-tight">consectetur</span>
                        <span
                            class="font-primary text-5xl md:text-[60px] lg:text-[70px] font-extrabold text-white leading-tight">adipiscing</span>
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
                        class="font-primary text-sm font-bold uppercase tracking-widest text-gray-400 mb-2 block">NOSSOS
                        PROJECTOS</span>
                    <h2 class="font-primary text-4xl md:text-5xl font-bold leading-tight">
                        <span class="text-[#3b6b35]">Projectos que reflectem a nossa</span><br>
                        <span class="text-[#9DBD4D]">experiência, qualidade e compromisso</span>
                    </h2>
                </div>
                <a href="{{ route('projects') }}"
                    class="inline-flex items-center gap-2 text-[#3b6b35] hover:opacity-80 font-primary font-bold text-sm transition-all duration-300 group">
                    Ver mais
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3">
                        </path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="relative aspect-square group overflow-hidden cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Project 1"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <!-- Dark Gradient to make text readable -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-100 transition-opacity duration-300">
                    </div>
                    <!-- Hover Green Overlay -->
                    <div
                        class="absolute inset-0 bg-[#9DBD4D]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    </div>

                    <div class="absolute bottom-0 left-0 p-8 w-full z-20">
                        <h4 class="font-primary text-2xl font-extrabold text-white mb-1 leading-snug">
                            Lorem ipsum dolor sit<br>amet, consectetur
                        </h4>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative aspect-square group overflow-hidden cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1582967265696-67a840e69123?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Project 2"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-100 transition-opacity duration-300">
                    </div>
                    <!-- Hover Green Overlay -->
                    <div
                        class="absolute inset-0 bg-[#9DBD4D]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    </div>

                    <div class="absolute bottom-0 left-0 p-8 w-full z-20">
                        <h4 class="font-primary text-2xl font-extrabold text-white mb-1 leading-snug">
                            Lorem ipsum dolor sit<br>amet, consectetur
                        </h4>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative aspect-square group overflow-hidden cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Project 3"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-100 transition-opacity duration-300">
                    </div>
                    <!-- Hover Green Overlay -->
                    <div
                        class="absolute inset-0 bg-[#9DBD4D]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10">
                    </div>

                    <div class="absolute bottom-0 left-0 p-8 w-full z-20">
                        <h4 class="font-primary text-2xl font-extrabold text-white mb-1 leading-snug">
                            Lorem ipsum dolor sit<br>amet, consectetur
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2x2 Image and Text Grid Section -->
    <section class="pb-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <div class="grid grid-cols-1 md:grid-cols-2 h-auto">
                <!-- Top Left: Light Green Text Block -->
                <div class="bg-[#9DBD4D] p-12 md:p-16 lg:p-20 flex flex-col justify-center">
                    <h3 class="font-primary text-xl font-bold text-white mb-6 uppercase tracking-wider">Lorem Ipsum
                    </h3>
                    <p class="font-secondary text-white/95 text-lg leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>

                <!-- Top Right: Image (Elephant) -->
                <div class="h-[400px] md:h-auto relative">
                    <img src="https://images.unsplash.com/photo-1557050543-4d5f4e07ef46?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                        alt="Elephant" class="absolute inset-0 w-full h-full object-cover" />
                </div>

                <!-- Bottom Left: Image (Volunteers/Planting) -->
                <div class="h-[400px] md:h-auto relative">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                        alt="Volunteers" class="absolute inset-0 w-full h-full object-cover" />
                </div>

                <!-- Bottom Right: Dark Green Text Block -->
                <div class="bg-[#3b6b35] p-12 md:p-16 lg:p-20 flex flex-col justify-center">
                    <h3 class="font-primary text-xl font-bold text-white mb-6 uppercase tracking-wider">Lorem Ipsum
                    </h3>
                    <p class="font-secondary text-white/95 text-lg leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.
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
                <a href="{{ route('news') }}"
                    class="inline-flex items-center gap-2 text-[#3b6b35] hover:opacity-80 font-primary text-lg transition-all duration-300 group">
                    Ver mais
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3">
                        </path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- News 1 -->
                <div class="border-l-2 border-gray-200 pl-6 group cursor-pointer">
                    <h4
                        class="font-primary text-[22px] font-bold text-gray-400 group-hover:text-[#3b6b35] transition-colors duration-300 mb-4 leading-tight">
                        Acompanhe as nossas últimas<br>actualizações e iniciativas
                    </h4>
                    <p class="font-secondary text-base text-gray-400 leading-relaxed mb-6 pr-4">
                        Partilhamos os acontecimentos, projectos e conquistas que demonstram a evolução do grupo e o
                        impacto das nossas actividades nos sectores onde actuamos.
                    </p>
                    <span class="font-secondary text-sm text-[#9DBD4D] font-medium">07 Março 2025</span>
                </div>

                <!-- News 2 -->
                <div class="border-l-2 border-gray-200 pl-6 group cursor-pointer">
                    <h4
                        class="font-primary text-[22px] font-bold text-gray-400 group-hover:text-[#3b6b35] transition-colors duration-300 mb-4 leading-tight">
                        Acompanhe as nossas últimas<br>actualizações e iniciativas
                    </h4>
                    <p class="font-secondary text-base text-gray-400 leading-relaxed mb-6 pr-4">
                        Partilhamos os acontecimentos, projectos e conquistas que demonstram a evolução do grupo e o
                        impacto das nossas actividades nos sectores onde actuamos.
                    </p>
                    <span class="font-secondary text-sm text-[#9DBD4D] font-medium">07 Março 2025</span>
                </div>

                <!-- News 3 -->
                <div class="border-l-2 border-gray-200 pl-6 group cursor-pointer">
                    <h4
                        class="font-primary text-[22px] font-bold text-gray-400 group-hover:text-[#3b6b35] transition-colors duration-300 mb-4 leading-tight">
                        Acompanhe as nossas últimas<br>actualizações e iniciativas
                    </h4>
                    <p class="font-secondary text-base text-gray-400 leading-relaxed mb-6 pr-4">
                        Partilhamos os acontecimentos, projectos e conquistas que demonstram a evolução do grupo e o
                        impacto das nossas actividades nos sectores onde actuamos.
                    </p>
                    <span class="font-secondary text-sm text-[#9DBD4D] font-medium">07 Março 2025</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Enviro Footer -->
    <footer class="bg-[#3b6b35] text-white border-t border-white/20 font-secondary pt-16 pb-8">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 max-w-[1200px]">
            <!-- Logo and Short Description -->
            <div class="lg:col-span-1 flex flex-col gap-4">
                <a href="{{ route('home') }}" class="flex items-center text-current">
                    <img src="{{ asset('images/logos/groupabp_.png') }}" alt="ABP Group"
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
