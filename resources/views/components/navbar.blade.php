@props(['logo' => 'images/logos/groupabp_.png', 'logoUrl' => null])

<header class="main-header fixed top-0 left-0 w-full h-20 text-white z-50 transition-all duration-300 flex items-center">
    <div class="container mx-auto px-6 flex justify-between items-center h-full max-w-[1200px]">
        <!-- Logo -->
        <a href="{{ $logoUrl ?? route('home') }}" class="flex items-center justify-center bg-white h-full px-6">
            <img src="{{ asset($logo) }}" alt="ABP Group" class="h-12 w-auto object-contain">
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:block">
            <ul class="flex items-center gap-8">
                <li class="relative">
                    <a href="{{ route('home') }}"
                        class="nav-link font-primary text-sm font-semibold tracking-wider py-2 relative block {{ Route::is('home') ? 'active' : '' }}">INÍCIO</a>
                </li>
                <li class="relative">
                    <a href="{{ route('about') }}"
                        class="nav-link font-primary text-sm font-semibold tracking-wider py-2 relative block {{ Route::is('about') ? 'active' : '' }}">SOBRE
                        O GRUPO</a>
                </li>

                <!-- Business Areas Dropdown -->
                <li class="relative group">
                    <span
                        class="nav-link font-primary text-sm font-semibold tracking-wider py-2 relative flex items-center gap-1.5 cursor-pointer">
                        ÁREAS DE NEGÓCIO
                        <svg class="w-2.5 h-2.5 transition-transform duration-200 group-hover:rotate-180" fill="none"
                            stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                    <ul
                        class="absolute top-full left-1/2 -translate-x-1/2 translate-y-2.5 bg-white rounded-md  min-w-[200px] py-3 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 border border-gray-100 z-50">
                        <li><a href="{{ route('panther-mat') }}"
                                class="block px-6 py-2.5 text-sm font-medium text-gray-800 hover:bg-gray-50 hover:text-corporate-primary transition-colors">PantherMAT</a>
                        </li>
                        <li><a href="{{ route('panther-build') }}"
                                class="block px-6 py-2.5 text-sm font-medium text-gray-800 hover:bg-gray-50 hover:text-corporate-primary transition-colors">PantherBUILD</a>
                        </li>
                        <li><a href="{{ route('panther-oil') }}"
                                class="block px-6 py-2.5 text-sm font-medium text-gray-800 hover:bg-gray-50 hover:text-corporate-primary transition-colors">PantherOIL</a>
                        </li>
                        <li><a href="{{ route('enviro') }}"
                                class="block px-6 py-2.5 text-sm font-medium text-gray-800 hover:bg-gray-50 hover:text-corporate-primary transition-colors">Enviro.AO</a>
                        </li>
                    </ul>
                </li>

                <li class="relative">
                    <a href="{{ route('projects') }}"
                        class="nav-link font-primary text-sm font-semibold tracking-wider py-2 relative block {{ Route::is('projects') ? 'active' : '' }}">PROJECTOS</a>
                </li>
                <li class="relative">
                    <a href="{{ route('news') }}"
                        class="nav-link font-primary text-sm font-semibold tracking-wider py-2 relative block {{ Route::is('news') ? 'active' : '' }}">NOTÍCIAS</a>
                </li>
                <li class="relative">
                    <a href="{{ route('contact') }}"
                        class="nav-link font-primary text-sm font-semibold tracking-wider py-2 relative block {{ Route::is('contact') ? 'active' : '' }}">CONTACTOS</a>
                </li>
            </ul>
        </nav>

        <!-- Right Elements (Language & Mobile Toggle) -->
        <div class="flex items-center gap-6">
            <div class="flex items-center gap-2 text-xs font-semibold font-primary">
                <span class="cursor-pointer text-[#e51718]">PT</span>
                <span class="opacity-30">|</span>
                <span class="cursor-pointer transition-opacity opacity-50 hover:opacity-100">ENG</span>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button
                class="mobile-toggle flex lg:hidden flex-col justify-between w-6 h-[18px] bg-transparent border-none cursor-pointer focus:outline-none"
                aria-label="Abrir menu">
                <span class="w-full h-0.5 bg-current transition-all duration-300"></span>
                <span class="w-full h-0.5 bg-current transition-all duration-300"></span>
                <span class="w-full h-0.5 bg-current transition-all duration-300"></span>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div
        class="mobile-drawer fixed top-20 left-full w-full h-[calc(100vh-80px)] bg-white z-40 transition-all duration-300 px-6 py-10 overflow-y-auto border-t border-gray-100">
        <ul class="flex flex-col gap-5">
            <li><a href="{{ route('home') }}"
                    class="font-primary text-lg font-bold text-corporate-primary block hover:text-corporate-accent transition-colors {{ Route::is('home') ? 'active text-corporate-accent' : '' }}">INÍCIO</a>
            </li>
            <li><a href="{{ route('about') }}"
                    class="font-primary text-lg font-bold text-corporate-primary block hover:text-corporate-accent transition-colors {{ Route::is('about') ? 'active text-corporate-accent' : '' }}">SOBRE
                    O GRUPO</a></li>
            <li
                class="text-xs font-extrabold text-gray-400 uppercase tracking-widest mt-4 border-b border-gray-100 pb-1.5">
                ÁREAS DE NEGÓCIO</li>
            <li><a href="{{ route('panther-mat') }}"
                    class="font-primary text-base font-semibold text-corporate-primary block hover:text-corporate-accent pl-5 transition-colors">PantherMAT</a>
            </li>
            <li><a href="{{ route('panther-build') }}"
                    class="font-primary text-base font-semibold text-corporate-primary block hover:text-corporate-accent pl-5 transition-colors">PantherBUILD</a>
            </li>
            <li><a href="{{ route('panther-oil') }}"
                    class="font-primary text-base font-semibold text-corporate-primary block hover:text-corporate-accent pl-5 transition-colors">PantherOIL</a>
            </li>
            <li><a href="{{ route('enviro') }}"
                    class="font-primary text-base font-semibold text-corporate-primary block hover:text-corporate-accent pl-5 transition-colors">Enviro.AO</a>
            </li>
            <li
                class="text-xs font-extrabold text-gray-400 uppercase tracking-widest mt-4 border-b border-gray-100 pb-1.5">
                Navegação</li>
            <li><a href="{{ route('projects') }}"
                    class="font-primary text-lg font-bold text-corporate-primary block hover:text-corporate-accent transition-colors {{ Route::is('projects') ? 'active text-corporate-accent' : '' }}">PROJECTOS</a>
            </li>
            <li><a href="{{ route('news') }}"
                    class="font-primary text-lg font-bold text-corporate-primary block hover:text-corporate-accent transition-colors {{ Route::is('news') ? 'active text-corporate-accent' : '' }}">NOTÍCIAS</a>
            </li>
            <li><a href="{{ route('contact') }}"
                    class="font-primary text-lg font-bold text-corporate-primary block hover:text-corporate-accent transition-colors {{ Route::is('contact') ? 'active text-corporate-accent' : '' }}">CONTACTOS</a>
            </li>
        </ul>
    </div>
</header>
