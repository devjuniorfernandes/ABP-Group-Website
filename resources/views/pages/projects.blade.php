<x-layouts.app>
    <x-slot name="title">Projectos | ABP Group - Portfólio de Referência em Angola</x-slot>

    <!-- Hero Banner -->
    <x-hero title="" subtitle="" bgImage="{{ asset('images/corporate-hero.png') }}" theme="corporate"
        height="ultra-short" />

    <!-- Portfolio Grid Section -->
    <section class="section">
        <div class="container mx-auto px-6 max-w-[1200px]">
            <!-- Header aligned to left -->
            <div class="mb-10 text-left">
                <span
                    class="font-primary text-xs font-bold uppercase tracking-widest text-[#e51718] mb-2 block">Realizações
                    do Grupo</span>
                <h2 class="font-primary text-4xl md:text-5xl font-extrabold text-[#1a2c42] leading-tight max-w-3xl">
                    Projectos de Engenharia, Energia e Consultoria
                </h2>
            </div>

            <!-- Search & Filters -->
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6 mb-12">
                <!-- Filters -->
                <div class="flex flex-wrap gap-3" id="project-filters">
                    <button data-filter="Todos"
                        class="filter-btn px-6 py-2.5 bg-[#e51718] text-white font-primary font-medium text-sm rounded-full transition-colors hover:bg-red-700 shadow-sm">Todos</button>
                    <button data-filter="PantherBUILD"
                        class="filter-btn px-6 py-2.5 bg-gray-100 text-gray-600 font-primary font-medium text-sm rounded-full transition-colors hover:bg-gray-200">PantherBUILD</button>
                    <button data-filter="PantherMAT"
                        class="filter-btn px-6 py-2.5 bg-gray-100 text-gray-600 font-primary font-medium text-sm rounded-full transition-colors hover:bg-gray-200">PantherMAT</button>
                    <button data-filter="PantherOIL"
                        class="filter-btn px-6 py-2.5 bg-gray-100 text-gray-600 font-primary font-medium text-sm rounded-full transition-colors hover:bg-gray-200">PantherOIL</button>
                    <button data-filter="Enviro.AO"
                        class="filter-btn px-6 py-2.5 bg-[#99c24d]/20 text-[#3b6b35] font-primary font-bold text-sm rounded-full transition-colors hover:bg-[#99c24d]/30">Enviro.AO</button>
                </div>

                <!-- Search Bar -->
                <div class="relative w-full lg:w-80">
                    <input type="text" id="project-search" placeholder="Pesquisar projeto..."
                        class="w-full pl-12 pr-4 py-3 bg-white border border-gray-200 rounded-full font-secondary text-sm focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] transition-all shadow-sm">
                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 -translate-y-1/2" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
                <!-- Project 1 -->
                <x-project-card title="Centro Logístico de Talatona - Armazém D07"
                    description="Projeto estrutural completo, reabilitação civil e instalação de sistemas avançados de climatização pela PantherBUILD e PantherMAT."
                    image="{{ asset('images/panther-build-hero.png') }}" category="PantherBUILD / PantherMAT"
                    link="{{ route('project.details') }}" />

                <!-- Project 2 -->
                <x-project-card title="Auditoria de Impacto Ambiental no Soyo"
                    description="Estudo integral de impacto socioambiental terrestre e marinho para infraestruturas petrolíferas de grande escala executado pela Enviro.AO."
                    image="{{ asset('images/enviro-hero.png') }}" category="Enviro.AO"
                    link="{{ route('project.details') }}" />

                <!-- Project 3 -->
                <x-project-card title="Apoio Técnico a Gasodutos de Exploração"
                    description="Engenharia de válvulas, monitorização de tubagens e fornecimento logístico contínuo em bases do norte angolano pela PantherOIL."
                    image="{{ asset('images/panther-oil-hero.png') }}" category="PantherOIL"
                    link="{{ route('project.details') }}" />

                <!-- Project 4 -->
                <x-project-card title="Climatização Central de Edifício de Escritórios em Luanda"
                    description="Retrofit completo do sistema AVAC central de um edifício de 12 pisos, otimizando o consumo elétrico mensal em cerca de 30%."
                    image="{{ asset('images/panther-mat-hero.png') }}" category="PantherMAT"
                    link="{{ route('project.details') }}" />

                <!-- Project 5 -->
                <x-project-card title="Construção de Pavilhão Industrial em Viana"
                    description="Obra industrial de raiz com estrutura metálica reforçada, cobertura térmica e acabamentos civis de alta resistência para armazenagem."
                    image="{{ asset('images/panther-build-hero.png') }}" category="PantherBUILD"
                    link="{{ route('project.details') }}" />

                <!-- Project 6 -->
                <x-project-card title="Plano de Gestão de Resíduos e Monitorização da Água"
                    description="Estudo e auditoria ambiental estratégica no rio Kwanza para o planeamento de novas captações agrícolas sustentáveis pela Enviro.AO."
                    image="{{ asset('images/enviro-hero.png') }}" category="Enviro.AO"
                    link="{{ route('project.details') }}" />
            </div>

            <!-- Pagination -->
            <div class="mt-20 flex justify-center">
                <nav class="flex items-center gap-2">
                    <a href="?page=1"
                        class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-gray-400 hover:text-[#e51718] hover:border-[#e51718] transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </a>
                    <a href="?page=1"
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-[#e51718] text-white font-primary font-bold text-sm shadow-md">1</a>
                    <a href="?page=2"
                        class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-gray-600 font-primary font-bold text-sm hover:border-[#e51718] hover:text-[#e51718] transition-colors">2</a>
                    <a href="?page=3"
                        class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-gray-600 font-primary font-bold text-sm hover:border-[#e51718] hover:text-[#e51718] transition-colors">3</a>
                    <span class="w-10 h-10 flex items-center justify-center text-gray-400">...</span>
                    <a href="?page=8"
                        class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-gray-600 font-primary font-bold text-sm hover:border-[#e51718] hover:text-[#e51718] transition-colors">8</a>
                    <a href="?page=2"
                        class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-gray-400 hover:text-[#e51718] hover:border-[#e51718] transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
    </section>

    <!-- Custom JS for filtering and searching projects -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const searchInput = document.getElementById('project-search');
            const projects = document.querySelectorAll('.project-card-wrapper');

            let currentFilter = 'Todos';
            let currentSearch = '';

            function filterProjects() {
                projects.forEach(project => {
                    const category = project.getAttribute('data-category') || '';
                    const title = project.getAttribute('data-title') || '';

                    const matchesFilter = currentFilter === 'Todos' || category.includes(currentFilter);
                    const matchesSearch = currentSearch === '' || title.includes(currentSearch);

                    if (matchesFilter && matchesSearch) {
                        project.style.display = 'block';
                    } else {
                        project.style.display = 'none';
                    }
                });
            }

            filterBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    // Remove active styles from all buttons
                    filterBtns.forEach(b => {
                        b.classList.remove('bg-[#e51718]', 'text-white', 'shadow-sm');
                        if (b.dataset.filter === 'Enviro.AO') {
                            b.classList.add('bg-[#99c24d]/20', 'text-[#3b6b35]');
                            b.classList.remove('bg-[#99c24d]', 'text-white');
                        } else {
                            b.classList.add('bg-gray-100', 'text-gray-600');
                        }
                    });

                    // Add active styles to clicked button
                    const clickedBtn = e.currentTarget;
                    if (clickedBtn.dataset.filter === 'Enviro.AO') {
                        clickedBtn.classList.remove('bg-[#99c24d]/20', 'text-[#3b6b35]');
                        clickedBtn.classList.add('bg-[#99c24d]', 'text-white', 'shadow-sm');
                    } else {
                        clickedBtn.classList.remove('bg-gray-100', 'text-gray-600');
                        clickedBtn.classList.add('bg-[#e51718]', 'text-white', 'shadow-sm');
                    }

                    currentFilter = clickedBtn.dataset.filter;
                    filterProjects();
                });
            });

            searchInput.addEventListener('input', (e) => {
                currentSearch = e.target.value.toLowerCase();
                filterProjects();
            });
        });
    </script>
</x-layouts.app>
