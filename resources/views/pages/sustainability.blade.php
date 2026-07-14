<x-layouts.app>
    <x-slot name="title">Sustentabilidade | ABP Group - Construindo um Futuro Verde</x-slot>

    <!-- Hero Banner -->
    <x-hero title="Sustentabilidade (ESG)"
        subtitle="Acreditamos num desenvolvimento económico que respeita o ambiente e promove o bem-estar social."
        bgImage="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80"
        theme="corporate" height="short" />

    <!-- Content Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1000px]">
            <h2 class="font-primary text-3xl md:text-4xl font-extrabold leading-tight mb-8 text-[#1a2c42]">
                O Nosso Compromisso com o Futuro
            </h2>
            <div class="prose max-w-none font-secondary text-lg text-gray-800 leading-relaxed mb-12">
                <p class="mb-6">
                    A sustentabilidade está no centro da estratégia de longo prazo do ABP Group. Adoptámos os princípios 
                    Ambientais, Sociais e de Governança (ESG) em todos os nossos projectos, assegurando que as nossas 
                    actividades contribuem positivamente para as comunidades e minimizam o impacto ambiental.
                </p>
                <p>
                    Desde a concepção de infraestruturas até à implementação de tecnologias de energias renováveis através 
                    da <strong>Enviro.AO</strong>, procuramos soluções inovadoras que garantam a eficiência dos recursos e 
                    fomentem a transição energética em Angola e além fronteiras.
                </p>
            </div>

            <!-- Pillars -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Pillar 1 -->
                <div class="bg-white p-8 border border-gray-200 rounded-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-enviro-primary rounded-full flex items-center justify-center mb-6 text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary font-bold text-xl text-[#1a2c42] mb-3">Ambiental (E)</h3>
                    <p class="font-secondary text-sm text-gray-600 leading-relaxed">
                        Foco na redução da pegada de carbono, gestão eficiente de resíduos e investimento em fontes 
                        de energia limpa e renovável.
                    </p>
                </div>
                <!-- Pillar 2 -->
                <div class="bg-white p-8 border border-gray-200 rounded-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-[#3b4b8a] rounded-full flex items-center justify-center mb-6 text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary font-bold text-xl text-[#1a2c42] mb-3">Social (S)</h3>
                    <p class="font-secondary text-sm text-gray-600 leading-relaxed">
                        Promoção da inclusão, diversidade, igualdade de oportunidades e o desenvolvimento das comunidades 
                        onde operamos.
                    </p>
                </div>
                <!-- Pillar 3 -->
                <div class="bg-white p-8 border border-gray-200 rounded-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-[#1a2c42] rounded-full flex items-center justify-center mb-6 text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary font-bold text-xl text-[#1a2c42] mb-3">Governança (G)</h3>
                    <p class="font-secondary text-sm text-gray-600 leading-relaxed">
                        Transparência corporativa, conduta ética rigorosa e uma gestão responsável alinhada com as 
                        melhores práticas internacionais.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
