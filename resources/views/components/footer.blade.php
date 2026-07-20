<footer class="bg-[#091122] text-white border-t border-white/5 font-secondary pt-16 pb-8">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 max-w-[1200px]">
        <!-- Logo and Short Description -->
        <div class="lg:col-span-1 flex flex-col gap-4">
            <a href="{{ route('home') }}" class="flex items-center text-current">
                <img src="{{ asset('images/logos/groupabp_white.png') }}" alt="ABP Group"
                    class="h-10 w-auto object-contain">
            </a>
            <p class="text-[11px] text-gray-400 leading-relaxed mt-2">
                {{ $siteSettings['footer_description'] ?? 'O ABP Group é um grupo empresarial angolano que actua em sectores estratégicos, oferecendo soluções integradas nas áreas de energia, engenharia, construção, gestão de infraestruturas, saúde e sustentabilidade.' }}
            </p>
            <div class="flex items-center gap-4 mt-2">
                <!-- LinkedIn -->
                @if(!empty($siteSettings['social_linkedin']))
                <a href="{{ $siteSettings['social_linkedin'] }}" target="_blank" class="text-gray-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                    </svg>
                </a>
                @endif
                <!-- Instagram -->
                @if(!empty($siteSettings['social_instagram']))
                <a href="{{ $siteSettings['social_instagram'] }}" target="_blank" class="text-gray-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                </a>
                @endif
            </div>
        </div>

        <!-- Links Column 1: Grupo -->
        <div class="flex flex-col gap-4">
            <h3
                class="font-primary text-sm font-bold tracking-wider uppercase text-white/50 border-b border-white/5 pb-2">
                GRUPO</h3>
            <ul class="flex flex-col gap-2.5 text-sm text-gray-400">
                <li><a href="{{ route('about') }}" class="hover:text-[#E41618]  transition-colors">Sobre nós</a>
                </li>
                <li><a href="{{ route('certifications') }}"
                        class="hover:text-[#E41618]  transition-colors">Certificações</a></li>
                <li><a href="{{ route('sustainability') }}"
                        class="hover:text-[#E41618]  transition-colors">Sustentabilidade</a></li>
                <li><a href="{{ route('careers') }}" class="hover:text-[#E41618]  transition-colors">Carreiras</a>
                </li>
            </ul>
        </div>

        <!-- Links Column 2: Áreas de Negócio -->
        <div class="flex flex-col gap-4">
            <h3
                class="font-primary text-sm font-bold tracking-wider uppercase text-white/50 border-b border-white/5 pb-2">
                ÁREAS DE NEGÓCIO</h3>
            <ul class="flex flex-col gap-2.5 text-sm text-gray-400">
                <li><a href="{{ route('panther-build') }}"
                        class="hover:text-[#E41618]  transition-colors">PantherBUILD</a></li>
                <li><a href="{{ route('panther-mat') }}" class="hover:text-[#E41618]  transition-colors">PantherMAT</a>
                </li>
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
                <li><a href="{{ route('privacy') }}" class="hover:text-[#E41618]  transition-colors">Política
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
                    <span
                        class="leading-relaxed">{{ $siteSettings['office_address'] ?? 'Centro Logístico de Talatona Armazém D07, Belas – Talatona, Luanda, Angola' }}</span>
                </li>
                <li class="flex items-center gap-2.5">
                    <span class="shrink-0">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path
                                d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
                        </svg>
                    </span>
                    @php
                        $phoneRaw = $siteSettings['contact_phone'] ?? '+244 929 414 778';
                        $phoneClean = preg_replace('/[^0-9+]/', '', $phoneRaw);
                    @endphp
                    <a href="tel:{{ $phoneClean }}"
                        class="hover:text-[#E41618] transition-colors font-semibold">{{ $phoneRaw }}</a>
                </li>
                <li class="flex items-center gap-2.5">
                    <span class="shrink-0">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2zM22 6l-10 7L2 6" />
                        </svg>
                    </span>
                    <a href="mailto:{{ $siteSettings['contact_email'] ?? 'geral@abp.co.ao' }}"
                        class="hover:text-[#E41618] transition-colors">{{ $siteSettings['contact_email'] ?? 'geral@abp.co.ao' }}</a>
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
