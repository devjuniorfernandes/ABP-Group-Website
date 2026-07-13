<x-layouts.app>
    <x-slot name="title">Detalhes da Notícia | ABP Group</x-slot>

    <!-- Header Section -->
    <section class="pt-24 pb-12 bg-gray-50 border-b border-gray-100">
        <div class="container mx-auto px-6 max-w-[900px] text-left">
            <a href="{{ route('news') }}" class="inline-flex items-center text-sm font-bold text-[#e51718] hover:text-[#c41314] transition-colors mb-8">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Voltar para Notícias
            </a>
            
            <span class="font-primary text-xs font-bold uppercase tracking-widest text-gray-500 mb-4 block">29 Junho 2026</span>
            <h1 class="font-primary text-3xl md:text-5xl font-extrabold text-[#1a2c42] leading-tight mb-8">
                ABP Group Reforça Compromisso com Desenvolvimento Sustentável em Angola
            </h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16">
        <div class="container mx-auto px-6 max-w-[900px]">
            <!-- Cover Image 16:9 -->
            <img src="{{ asset('images/corporate-hero.png') }}" alt="Capa da Notícia" class="w-full aspect-video object-cover rounded-xl mb-12 shadow-sm">
            
            <div class="prose prose-lg max-w-none text-gray-600 font-secondary text-left">
                <p class="mb-6 font-bold text-xl text-gray-800">
                    O conselho de administração anunciou novas diretivas de sustentabilidade ESG que serão aplicadas de forma transversal nas áreas da PantherBUILD e Enviro.
                </p>

                <p class="mb-6">
                    O plano inclui a otimização de consumos elétricos e tratamento integral de resíduos industriais em todos os estaleiros. Esta medida reflete a visão estratégica do ABP Group em alinhar-se com as melhores práticas internacionais de proteção ambiental e responsabilidade corporativa.
                </p>
                
                <h3 class="font-primary text-2xl font-bold text-[#1a2c42] mt-10 mb-4">Um Futuro Mais Verde</h3>
                <p class="mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>

                <p class="mb-6">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris.
                </p>

                <h3 class="font-primary text-2xl font-bold text-[#1a2c42] mt-10 mb-4">Investimento Contínuo</h3>
                <p class="mb-6">
                    Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque.
                </p>
            </div>
        </div>
    </section>
</x-layouts.app>
