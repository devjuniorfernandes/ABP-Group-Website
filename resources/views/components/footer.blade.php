<footer class="bg-[#091122] text-white border-t border-white/5 font-secondary pt-16 pb-8">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 max-w-[1200px]">
        <!-- Logo and Short Description -->
        <div class="lg:col-span-1 flex flex-col gap-4">
            <a href="{{ route('home') }}" class="flex items-center text-current">
                <img src="{{ asset('images/logos/groupabp_white.png') }}" alt="ABP Group"
                    class="h-10 w-auto object-contain">
            </a>
            <p class="text-[11px] text-gray-400 leading-relaxed mt-2">
                O ABP Group é um grupo empresarial angolano que actua em sectores estratégicos, oferecendo soluções
                integradas nas áreas de energia, engenharia, construção, gestão de infraestruturas, saúde e
                sustentabilidade.
            </p>
        </div>

        <!-- Links Column 1: Grupo -->
        <div class="flex flex-col gap-4">
            <h3
                class="font-primary text-sm font-bold tracking-wider uppercase text-white/50 border-b border-white/5 pb-2">
                GRUPO</h3>
            <ul class="flex flex-col gap-2.5 text-sm text-gray-400">
                <li><a href="{{ route('about') }}" class="hover:text-[#E41618]  transition-colors">Sobre nós</a>
                </li>
                <li><a href="{{ route('about') }}#certifications"
                        class="hover:text-[#E41618]  transition-colors">Certificações</a></li>
                <li><a href="{{ route('about') }}#sustainability"
                        class="hover:text-[#E41618]  transition-colors">Sustentabilidade</a></li>
                <li><a href="{{ route('about') }}#careers" class="hover:text-[#E41618]  transition-colors">Carreiras</a>
                </li>
            </ul>
        </div>

        <!-- Links Column 2: Áreas de Negócio -->
        <div class="flex flex-col gap-4">
            <h3
                class="font-primary text-sm font-bold tracking-wider uppercase text-white/50 border-b border-white/5 pb-2">
                ÁREAS DE NEGÓCIO</h3>
            <ul class="flex flex-col gap-2.5 text-sm text-gray-400">
                <li><a href="{{ route('panther-mat') }}" class="hover:text-[#E41618]  transition-colors">PantherMAT</a>
                </li>
                <li><a href="{{ route('panther-build') }}"
                        class="hover:text-[#E41618]  transition-colors">PantherBUILD</a></li>
                <li><a href="{{ route('panther-oil') }}" class="hover:text-[#E41618]  transition-colors">PantherOIL</a>
                </li>
                <li><a href="{{ route('enviro') }}" class="hover:text-[#E41618]  transition-colors">Enviro.AO</a>
                </li>
            </ul>
        </div>

        <!-- Links Column 3: Recursos -->
        <div class="flex flex-col gap-4">
            <h3
                class="font-primary text-sm font-bold tracking-wider uppercase text-white/50 border-b border-white/5 pb-2">
                RECURSOS</h3>
            <ul class="flex flex-col gap-2.5 text-sm text-gray-400">
                <li><a href="{{ route('contact') }}" class="hover:text-[#E41618]  transition-colors">Contactos</a>
                </li>
                <li><a href="{{ route('news') }}" class="hover:text-[#E41618]  transition-colors">Notícias e
                        eventos</a></li>
                <li><a href="{{ route('contact') }}#privacy" class="hover:text-[#E41618]  transition-colors">Política
                        de
                        Privacidade</a></li>
            </ul>
        </div>

        <!-- Contacts Column -->
        <div class="flex flex-col gap-4">
            <h3
                class="font-primary text-sm font-bold tracking-wider uppercase text-white/50 border-b border-white/5 pb-2">
                CONTACTOS</h3>
            <ul class="flex flex-col gap-4 text-sm text-gray-400">
                <li class="flex items-start gap-2.5">
                    <span class="shrink-0 mt-1">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM12 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                        </svg>
                    </span>
                    <span class="leading-relaxed">Centro Logístico de Talatona Armazém D07, Belas – Talatona
                        Angola</span>
                </li>
                <li class="flex items-center gap-2.5">
                    <span class="shrink-0">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path
                                d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
                        </svg>
                    </span>
                    <a href="tel:+244929414778" class="hover:text-[#E41618] transition-colors font-semibold">+244
                        929 414 778</a>
                </li>
                <li class="flex items-center gap-2.5">
                    <span class="shrink-0">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2zM22 6l-10 7L2 6" />
                        </svg>
                    </span>
                    <a href="mailto:geral@abpgroup.co.ao"
                        class="hover:text-[#E41618] transition-colors">geral@abpgroup.co.ao</a>
                </li>
            </ul>
        </div>
    </div>

    <div
        class="container mx-auto px-6 max-w-[1200px] border-t border-white/5 mt-16 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-500">
        <p>© {{ date('Y') }} ABP Group | Desenvolvendo soluções para um futuro sustentável.</p>
        <p>Desenvolvido por <a href="https://xamariz.ao/" target="_blank">Xamariz Marketing</a></p>
    </div>
</footer>
