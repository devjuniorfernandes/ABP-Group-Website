<x-layouts.app>
    <x-slot name="title">Notícias e Imprensa | ABP Group - Actualizações de Angola</x-slot>

    <!-- Hero Banner -->
    <x-hero 
        title=""
        subtitle=""
        bgImage="{{ asset('images/corporate-hero.png') }}"
        theme="corporate"
        height="ultra-short"
    />

    <!-- News Grid Section -->
    <section class="section">
        <div class="container">
            <div class="mb-10 text-left">
                <h1 class="font-primary text-4xl md:text-5xl font-extrabold text-[#1a2c42] leading-tight mb-2">Notícias</h1>
                <div class="w-16 border-b-4 border-[#e51718]"></div>
            </div>

            <!-- Search Bar -->
            <div class="mb-12 max-w-md">
                <div class="relative">
                    <input type="text" id="news-search" placeholder="Pesquisar notícias..." class="w-full pl-12 pr-4 py-3 rounded-full border border-gray-200 focus:outline-none focus:border-[#e51718] focus:ring-1 focus:ring-[#e51718] text-gray-700 bg-gray-50 shadow-sm transition-all placeholder:text-sm">
                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
            </div>

            <!-- Dynamic Magazine Layout Grid -->
            <div id="magazine-container" class="mt-8">
                <!-- Injected via JS -->
            </div>

            <!-- Pagination -->
            <div class="mt-16 flex justify-center items-center space-x-2" id="pagination-controls">
                <!-- Injected via JS -->
            </div>
            
            <!-- No results message -->
            <div id="no-results-msg" class="hidden py-12 text-center text-gray-500 font-secondary text-lg">
                Nenhuma notícia encontrada para esta pesquisa.
            </div>
        </div>
    </section>

    <!-- JS for Dynamic Magazine Rendering -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('news-search');
            const container = document.getElementById('magazine-container');
            const paginationControls = document.getElementById('pagination-controls');
            const noResultsMsg = document.getElementById('no-results-msg');
            
            // Database simulation
            const routeDetails = "{{ route('news.details') }}";
            const newsData = [
                {
                    title: "ABP Group Reforça Compromisso com Desenvolvimento Sustentável em Angola",
                    category: "Corporativo",
                    date: "29 Jun 2026",
                    summary: "O conselho de administração anunciou novas diretivas de sustentabilidade ESG que serão aplicadas de forma transversal nas áreas da PantherBUILD e Enviro. O plano inclui a otimização de consumos elétricos e tratamento integral de resíduos industriais em todos os estaleiros.",
                    image: "{{ asset('images/corporate-hero.png') }}"
                },
                {
                    title: "Modernização de Climatização em Centro Executivo de Luanda",
                    category: "PantherMAT",
                    date: "15 Maio 2026",
                    summary: "Com foco na poupança energética de até 35%, o projeto substituiu equipamentos antigos de AVAC por tecnologia inteligente de controlo térmico, garantindo conforto e redução drástica da pegada ecológica.",
                    image: "{{ asset('images/panther-mat-hero.png') }}"
                },
                {
                    title: "Enviro.ao Nomeada para Prémio Angolano de Boas Práticas Ambientais",
                    category: "Enviro",
                    date: "03 Abril 2026",
                    summary: "O reconhecimento vem no seguimento das soluções inovadoras em gestão de resíduos sólidos urbanos e avaliações de impacto ambiental realizadas para múltiplos parceiros industriais.",
                    image: "{{ asset('images/enviro-hero.png') }}"
                },
                {
                    title: "PantherOIL Reforça Capacidade de Logística de Apoio Offshore no Soyo",
                    category: "PantherOIL",
                    date: "18 Março 2026",
                    summary: "Com o investimento em novas embarcações de serviço técnico e parcerias globais de válvulas industriais de alta pressão, a empresa garante tempos de resposta recorde para intervenções de engenharia.",
                    image: "{{ asset('images/panther-oil-hero.png') }}"
                },
                {
                    title: "PantherBUILD Inicia Construção de Complexo Industrial em Viana",
                    category: "PantherBUILD",
                    date: "02 Fev 2026",
                    summary: "O complexo terá 10.000 metros quadrados destinados a fins logísticos. O projeto conta com desenho arquitetónico termo-acústico de ponta.",
                    image: "{{ asset('images/panther-build-hero.png') }}"
                },
                {
                    title: "ABP Group Promove Formação Avançada em Segurança Industrial (HSE)",
                    category: "Corporativo",
                    date: "10 Jan 2026",
                    summary: "Cerca de 80 colaboradores operacionais receberam certificação avançada em procedimentos de emergência, reforçando a política de 'Zero Acidentes'.",
                    image: "{{ asset('images/corporate-hero.png') }}"
                },
                // Extra items for pagination testing
                {
                    title: "Novos Equipamentos Pesados Chegam para Reforçar Frota da PantherBUILD",
                    category: "PantherBUILD",
                    date: "15 Dez 2025",
                    summary: "Frota modernizada permite otimização de prazos na construção de mega-estruturas.",
                    image: "{{ asset('images/panther-build-hero.png') }}"
                },
                {
                    title: "Gestão Eficiente: Enviro lidera campanha de reciclagem em escolas",
                    category: "Enviro",
                    date: "05 Nov 2025",
                    summary: "Ação de consciencialização envolveu mais de 5000 alunos no município de Belas.",
                    image: "{{ asset('images/enviro-hero.png') }}"
                }
            ];

            const ITEMS_PER_PAGE = 6;
            let filteredCards = [...newsData];
            let currentPage = 1;

            function updateDisplay() {
                container.innerHTML = '';
                
                const startIndex = (currentPage - 1) * ITEMS_PER_PAGE;
                const endIndex = startIndex + ITEMS_PER_PAGE;
                const pageCards = filteredCards.slice(startIndex, endIndex);
                
                if (pageCards.length === 0) {
                    noResultsMsg.classList.remove('hidden');
                    paginationControls.innerHTML = '';
                    return;
                } else {
                    noResultsMsg.classList.add('hidden');
                }

                // Render Layout
                let html = `<div class="grid grid-cols-1 lg:grid-cols-3 gap-12">`;
                
                // LEFT COLUMN
                html += `<div class="lg:col-span-2 flex flex-col gap-12">`;
                
                // Featured Article (Index 0)
                if (pageCards[0]) {
                    const item = pageCards[0];
                    html += `
                    <div class="group cursor-pointer">
                        <div class="flex flex-col md:flex-row gap-6">
                            <div class="md:w-[55%] shrink-0">
                                <a href="${routeDetails}" class="block w-full overflow-hidden rounded-md">
                                    <img src="${item.image}" alt="Destaque" class="w-full aspect-[4/3] object-cover transition-transform duration-500 group-hover:scale-105">
                                </a>
                            </div>
                            <div class="flex-1 flex flex-col py-2 pr-4">
                                <div class="flex items-center gap-2 mb-4">
                                    <span class="bg-[#f0e68c] text-black font-bold text-xs px-3 py-1">${item.category}</span>
                                    <span class="bg-gray-200 text-gray-700 font-bold text-xs px-3 py-1">${item.date}</span>
                                </div>
                                <a href="${routeDetails}" class="block">
                                    <h2 class="font-primary text-2xl md:text-3xl font-extrabold text-[#1a2c42] mb-4 leading-relaxed group-hover:text-[#e51718] transition-colors">
                                        ${item.title}
                                    </h2>
                                </a>
                                <p class="text-gray-600 font-secondary text-base leading-relaxed line-clamp-4">
                                    ${item.summary}
                                </p>
                            </div>
                        </div>
                    </div>
                    `;
                }

                if(pageCards[1] || pageCards[2]) {
                    html += `<div class="w-full border-t border-gray-200 my-2"></div><div class="grid grid-cols-1 md:grid-cols-2 gap-8">`;
                    
                    // Secondary 1 (Index 1)
                    if (pageCards[1]) {
                        const item = pageCards[1];
                        html += `
                        <div class="group cursor-pointer">
                            <a href="${routeDetails}" class="block w-full overflow-hidden rounded-md mb-4">
                                <img src="${item.image}" alt="Notícia" class="w-full aspect-video object-cover transition-transform duration-500 group-hover:scale-105">
                            </a>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-[#f0e68c] text-black font-bold text-xs px-3 py-1">${item.category}</span>
                                <span class="bg-gray-200 text-gray-700 font-bold text-xs px-3 py-1">${item.date}</span>
                            </div>
                            <a href="${routeDetails}" class="block">
                                <h3 class="font-primary text-xl font-bold text-[#1a2c42] mb-3 leading-snug group-hover:text-[#e51718] transition-colors">
                                    ${item.title}
                                </h3>
                            </a>
                            <p class="text-gray-600 font-secondary text-sm leading-relaxed line-clamp-3">
                                ${item.summary}
                            </p>
                        </div>
                        `;
                    }

                    // Secondary 2 (Index 2)
                    if (pageCards[2]) {
                        const item = pageCards[2];
                        html += `
                        <div class="group cursor-pointer">
                            <a href="${routeDetails}" class="block w-full overflow-hidden rounded-md mb-4">
                                <img src="${item.image}" alt="Notícia" class="w-full aspect-video object-cover transition-transform duration-500 group-hover:scale-105">
                            </a>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="bg-[#f0e68c] text-black font-bold text-xs px-3 py-1">${item.category}</span>
                                <span class="bg-gray-200 text-gray-700 font-bold text-xs px-3 py-1">${item.date}</span>
                            </div>
                            <a href="${routeDetails}" class="block">
                                <h3 class="font-primary text-xl font-bold text-[#1a2c42] mb-3 leading-snug group-hover:text-[#e51718] transition-colors">
                                    ${item.title}
                                </h3>
                            </a>
                            <p class="text-gray-600 font-secondary text-sm leading-relaxed line-clamp-3">
                                ${item.summary}
                            </p>
                        </div>
                        `;
                    }
                    html += `</div>`; // End of secondary grid
                }

                html += `</div>`; // End of Left Column

                // RIGHT COLUMN (Sidebar)
                if (pageCards.length > 3) {
                    html += `<div class="lg:col-span-1">
                        <h3 class="font-primary text-xl font-bold text-[#1a2c42] mb-2">Notícias Mais Lidas</h3>
                        <div class="w-full border-t border-gray-300 mb-6"></div>
                        <div class="flex flex-col gap-6">`;
                    
                    for (let i = 3; i < pageCards.length; i++) {
                        const item = pageCards[i];
                        const isLast = (i === pageCards.length - 1);
                        html += `
                        <div class="group cursor-pointer ${isLast ? '' : 'border-b border-gray-200 pb-6'}">
                            <a href="${routeDetails}" class="block">
                                <h4 class="font-primary text-lg font-bold text-[#1a2c42] mb-3 leading-snug group-hover:text-[#e51718] transition-colors">
                                    ${item.title}
                                </h4>
                            </a>
                            <div class="flex items-center gap-2">
                                <span class="bg-[#f0e68c] text-black font-bold text-xs px-3 py-1">${item.category}</span>
                                <span class="bg-gray-200 text-gray-700 font-bold text-xs px-3 py-1">${item.date}</span>
                            </div>
                        </div>
                        `;
                    }
                    html += `</div></div>`; // End sidebar
                }

                html += `</div>`; // End Magazine grid
                container.innerHTML = html;
                
                renderPagination();
            }

            function renderPagination() {
                paginationControls.innerHTML = '';
                const totalPages = Math.ceil(filteredCards.length / ITEMS_PER_PAGE);
                
                if (totalPages <= 1) return;

                const prevBtn = document.createElement('button');
                prevBtn.innerHTML = '&laquo;';
                prevBtn.className = `px-3 py-1 rounded-md font-bold transition-colors ${currentPage === 1 ? 'text-gray-400 cursor-not-allowed' : 'text-[#1a2c42] hover:bg-gray-100'}`;
                prevBtn.disabled = currentPage === 1;
                prevBtn.addEventListener('click', () => {
                    if (currentPage > 1) {
                        currentPage--;
                        updateDisplay();
                        window.scrollTo({ top: document.getElementById('news-search').offsetTop - 100, behavior: 'smooth' });
                    }
                });
                paginationControls.appendChild(prevBtn);

                for (let i = 1; i <= totalPages; i++) {
                    const pageBtn = document.createElement('button');
                    pageBtn.innerText = i;
                    pageBtn.className = `px-3 py-1 rounded-md font-bold transition-colors ${currentPage === i ? 'bg-[#e51718] text-white' : 'text-[#1a2c42] hover:bg-gray-100'}`;
                    pageBtn.addEventListener('click', () => {
                        currentPage = i;
                        updateDisplay();
                        window.scrollTo({ top: document.getElementById('news-search').offsetTop - 100, behavior: 'smooth' });
                    });
                    paginationControls.appendChild(pageBtn);
                }

                const nextBtn = document.createElement('button');
                nextBtn.innerHTML = '&raquo;';
                nextBtn.className = `px-3 py-1 rounded-md font-bold transition-colors ${currentPage === totalPages ? 'text-gray-400 cursor-not-allowed' : 'text-[#1a2c42] hover:bg-gray-100'}`;
                nextBtn.disabled = currentPage === totalPages;
                nextBtn.addEventListener('click', () => {
                    if (currentPage < totalPages) {
                        currentPage++;
                        updateDisplay();
                        window.scrollTo({ top: document.getElementById('news-search').offsetTop - 100, behavior: 'smooth' });
                    }
                });
                paginationControls.appendChild(nextBtn);
            }

            searchInput.addEventListener('input', (e) => {
                const searchTerm = e.target.value.toLowerCase().trim();
                
                filteredCards = newsData.filter(item => {
                    return item.title.toLowerCase().includes(searchTerm) || 
                           item.summary.toLowerCase().includes(searchTerm) ||
                           item.category.toLowerCase().includes(searchTerm);
                });
                
                currentPage = 1;
                updateDisplay();
            });

            // Initialize
            updateDisplay();
        });
    </script>
</x-layouts.app>
