<x-layouts.app>
    <x-slot name="title">Enviro.ao | Consultoria e Engenharia Ambiental - ABP Group</x-slot>

    <!-- Hero Banner -->
    <x-hero 
        title="Consultoria e Engenharia Ambiental para uma Operação Sustentável"
        subtitle="Apoiamos empresas e instituições no planeamento ecológico, licenciamento ambiental e conformidade regulamentar em Angola."
        bgImage="{{ asset('images/enviro-hero.png') }}"
        theme="enviro"
        height="medium"
    />

    <!-- Introduction Section -->
    <section class="section">
        <div class="container">
            <div class="split-section">
                <div class="split-content">
                    <span class="section-subtitle" style="color: var(--color-primary-enviro);">Sustentabilidade em Acção</span>
                    <h2 class="section-title" style="margin-left: 0; text-align: left; color: var(--color-primary-enviro);">Compromisso Verde</h2>
                    <p style="color: var(--color-text-muted);">
                        A Enviro.ao é a unidade de engenharia e consultoria ambiental do ABP Group. Focados em criar harmonia entre o desenvolvimento económico e a preservação ecológica, oferecemos serviços estratégicos de monitorização, mitigação de impactos e gestão ambiental integrada.
                    </p>
                    <p style="color: var(--color-text-muted);">
                        Trabalhamos ao lado das indústrias de energia, construção e manufatura, fornecendo pareceres técnicos independentes, estudos regulamentares de qualidade e planos práticos de eficiência ecológica.
                    </p>
                </div>
                <div class="split-image-wrapper">
                    <img src="{{ asset('images/enviro-hero.png') }}" alt="Consultoria Ambiental" class="split-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Green cards -->
    <section class="section section-bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle" style="color: var(--color-primary-enviro);">Os Nossos Pilares</span>
                <h2 class="section-title" style="color: var(--color-primary-enviro);">Como Asseguramos a Sustentabilidade</h2>
            </div>
            
            <div class="grid-3">
                <x-value-card 
                    title="PRESERVAÇÃO"
                    description="Avaliação criteriosa de ecossistemas para proteger a biodiversidade angolana, desenvolvendo planos detalhados de reposição ecológica e reflorestação."
                    theme="enviro"
                    icon="<svg width='40' height='40' fill='none' stroke='var(--color-primary-enviro)' stroke-width='2' viewBox='0 0 24 24'><path d='M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m11.314 11.314l.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z'/></svg>"
                />

                <x-value-card 
                    title="AUDITORIA"
                    description="Monitorização rigorosa de parâmetros do ar, água e solo, emitindo relatórios de conformidade legal de acordo com os padrões regulamentares nacionais."
                    theme="enviro"
                    icon="<svg width='40' height='40' fill='none' stroke='var(--color-primary-enviro)' stroke-width='2' viewBox='0 0 24 24'><path d='M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'/></svg>"
                />

                <x-value-card 
                    title="EFICIÊNCIA"
                    description="Otimização do ciclo de resíduos e captação hídrica industrial, reduzindo o impacto ecológico e os custos operacionais dos nossos clientes."
                    theme="enviro"
                    icon="<svg width='40' height='40' fill='none' stroke='var(--color-primary-enviro)' stroke-width='2' viewBox='0 0 24 24'><path d='M13 10V3L4 14h7v7l9-11h-7z'/></svg>"
                />
            </div>
        </div>
    </section>

    <!-- Specific Enviro Projects -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle" style="color: var(--color-primary-enviro);">Portfólio Ambiental</span>
                <h2 class="section-title">Os Nossos Estudos e Projectos</h2>
            </div>
            
            <div class="grid-3" style="margin-top: 40px;">
                <x-project-card 
                    title="Auditoria Ambiental no Soyo"
                    description="Estudo integral de impacto socioambiental terrestre e marinho para instalações industriais de processamento."
                    image="{{ asset('images/enviro-hero.png') }}"
                    category="Licenciamento Ambiental"
                    accentColor="enviro-primary"
                />
                
                <x-project-card 
                    title="Plano de Gestão de Resíduos do Rio Kwanza"
                    description="Estudo detalhado e plano prático de reuso de águas pluviais para grandes explorações agro-industriais sustentáveis."
                    image="{{ asset('images/corporate-hero.png') }}"
                    category="Eficiência Hídrica"
                    accentColor="enviro-primary"
                />
                
                <x-project-card 
                    title="Monitorização da Qualidade do Ar em Luanda"
                    description="Instalação de estações de análise da qualidade do ar e partículas em suspensão para fábricas e cimenteiras."
                    image="{{ asset('images/panther-build-hero.png') }}"
                    category="Auditoria Técnica"
                    accentColor="enviro-primary"
                />
            </div>
        </div>
    </section>
</x-layouts.app>
