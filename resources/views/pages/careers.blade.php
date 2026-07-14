<x-layouts.app>
    <x-slot name="title">Carreiras | ABP Group - Construa o Seu Futuro Connosco</x-slot>

    <!-- Hero Banner -->
    <x-hero title="Carreiras no ABP Group"
        subtitle="Junte-se a uma equipa apaixonada, inovadora e comprometida com o desenvolvimento de Angola."
        bgImage="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80"
        theme="corporate" height="short" />

    <!-- Content Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1000px]">
            <h2 class="font-primary text-3xl md:text-4xl font-extrabold leading-tight mb-8 text-[#1a2c42]">
                Porquê o ABP Group?
            </h2>
            <div class="prose max-w-none font-secondary text-lg text-gray-800 leading-relaxed mb-12">
                <p class="mb-6">
                    Acreditamos que o sucesso das nossas operações começa com o talento e a dedicação da nossa equipa. 
                    No ABP Group, oferecemos um ambiente de trabalho estimulante e diversificado, onde a inovação é 
                    encorajada e o crescimento profissional é uma prioridade.
                </p>
                <p>
                    Seja em engenharia, energia, sustentabilidade ou áreas corporativas de suporte, estamos sempre 
                    à procura de profissionais altamente qualificados e jovens talentos motivados para fazerem a diferença.
                </p>
            </div>

            <!-- Vagas (Placeholder) -->
            <div class="bg-[#f4f7f9] p-8 md:p-12 rounded-sm border border-gray-100 text-center">
                <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center shadow-sm mb-6">
                    <svg class="w-10 h-10 text-[#3b4b8a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="font-primary text-2xl font-bold text-[#1a2c42] mb-4">Vagas em Aberto</h3>
                <p class="font-secondary text-gray-600 mb-8 max-w-md mx-auto">
                    De momento, não existem vagas em aberto. No entanto, estamos sempre a receber candidaturas espontâneas 
                    para as nossas bases de dados.
                </p>
                <a href="mailto:rh@abpgroup.co.ao" class="inline-flex items-center justify-center px-8 py-3 bg-[#e51718] text-white font-primary font-bold text-sm uppercase tracking-wider rounded hover:bg-[#c41314] transition-colors">
                    Enviar Candidatura Espontânea
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>
