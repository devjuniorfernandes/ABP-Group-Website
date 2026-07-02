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
            <div class="section-header">
                <span class="section-subtitle">Sala de Comunicação</span>
                <h2 class="section-title">Acompanhe as Nossas Últimas Iniciativas</h2>
            </div>
            
            <div class="grid-3" style="margin-top: 40px;">
                <!-- Article 1 -->
                <x-news-card 
                    date="29 Junho 2026"
                    title="ABP Group Reforça Compromisso com Desenvolvimento Sustentável em Angola"
                    summary="O conselho de administração anunciou novas diretivas de sustentabilidade ESG que serão aplicadas de forma transversal nas áreas da PantherBUILD e Enviro. O plano inclui a otimização de consumos elétricos e tratamento integral de resíduos industriais em todos os estaleiros."
                />

                <!-- Article 2 -->
                <x-news-card 
                    date="15 Maio 2026"
                    title="PantherMAT Conclui Modernização de Climatização em Centro Executivo de Luanda"
                    summary="Com foco na poupança energética de até 35%, o projeto substituiu equipamentos antigos de AVAC por tecnologia inteligente de controlo térmico, garantindo conforto e redução drástica da pegada ecológica do edifício corporativo."
                />

                <!-- Article 3 -->
                <x-news-card 
                    date="03 Abril 2026"
                    title="Enviro.ao Nomeada para Prémio Angolano de Boas Práticas Ambientais"
                    summary="O reconhecimento vem no seguimento das soluções inovadoras em gestão de resíduos sólidos urbanos e avaliações de impacto ambiental realizadas para múltiplos parceiros de desenvolvimento industrial em várias províncias."
                />

                <!-- Article 4 -->
                <x-news-card 
                    date="18 Março 2026"
                    title="PantherOIL Reforça Capacidade de Logística de Apoio Offshore no Soyo"
                    summary="Com o investimento em novas embarcações de serviço técnico e parcerias globais de válvulas industriais de alta pressão, a empresa garante tempos de resposta recorde para intervenções de engenharia em plataformas marítimas."
                />

                <!-- Article 5 -->
                <x-news-card 
                    date="02 Fevereiro 2026"
                    title="PantherBUILD Inicia Construção de Complexo Industrial em Viana"
                    summary="O complexo terá 10.000 metros quadrados destinados a fins logísticos. O projeto conta com desenho arquitetónico termo-acústico de ponta, planeamento ambiental da Enviro e climatização técnica instalada pela PantherMAT."
                />

                <!-- Article 6 -->
                <x-news-card 
                    date="10 Janeiro 2026"
                    title="ABP Group Promove Formação Avançada em Segurança Industrial (HSE)"
                    summary="Cerca de 80 colaboradores operacionais das diferentes áreas de negócio receberam certificação avançada em procedimentos de emergência, reforçando a nossa política interna de 'Zero Acidentes' nos locais de trabalho."
                />
            </div>
        </div>
    </section>
</x-layouts.app>
