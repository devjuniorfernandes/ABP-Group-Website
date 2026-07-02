<x-layouts.app>
    <x-slot name="title">PantherBUILD | Engenharia e Construção Civil - ABP Group</x-slot>

    <!-- Hero Banner -->
    <x-hero 
        title="Construção e Engenharia Civil que Transformam Cidades"
        subtitle="Desenvolvemos infraestruturas residenciais, públicas e industriais duradouras com rigor técnico e conformidade ambiental."
        bgImage="{{ asset('images/panther-build-hero.png') }}"
        theme="build"
        height="medium"
    />

    <!-- Introduction Section -->
    <section class="section">
        <div class="container">
            <div class="split-section">
                <div class="split-content">
                    <span class="section-subtitle" style="color: var(--color-primary-build);">Edificar Angola</span>
                    <h2 class="section-title" style="margin-left: 0; text-align: left; color: var(--color-primary-build);">Engenharia de Estruturas</h2>
                    <p style="color: var(--color-text-muted);">
                        A PantherBUILD é o braço de construção civil e engenharia do ABP Group. Construímos com foco em segurança, prazos rigorosos e sustentabilidade estrutural. Desde armazéns de grande vão livre a edifícios comerciais complexos e infraestruturas urbanas de vias de comunicação.
                    </p>
                    <p style="color: var(--color-text-muted);">
                        A nossa equipa de engenheiros civis e fiscais de obra alia metodologias construtivas modernas de betão e estruturas metálicas a um forte sentido de responsabilidade civil e segurança laboral nos estaleiros.
                    </p>
                </div>
                <div class="split-image-wrapper">
                    <img src="{{ asset('images/panther-build-hero.png') }}" alt="Estaleiro PantherBUILD" class="split-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services Build Theme -->
    <section class="section section-bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle" style="color: var(--color-primary-build);">As Nossas Competências</span>
                <h2 class="section-title" style="color: var(--color-primary-build);">Obras Civis e Industriais</h2>
            </div>
            
            <div class="grid-3">
                <x-value-card 
                    title="CONSTRUÇÃO INDUSTRIAL"
                    description="Edificação de pavilhões metálicos, centros de logística, armazéns de distribuição e bases comerciais estruturadas em Angola."
                    theme="build"
                    icon="<svg width='40' height='40' fill='none' stroke='var(--color-primary-build)' stroke-width='2' viewBox='0 0 24 24'><path d='M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5'/></svg>"
                />

                <x-value-card 
                    title="OBRAS PÚBLICAS"
                    description="Reabilitação de vias urbanas, terraplenagem, redes de drenagem pluvial e saneamento integrado para municípios angolanos."
                    theme="build"
                    icon="<svg width='40' height='40' fill='none' stroke='var(--color-primary-build)' stroke-width='2' viewBox='0 0 24 24'><path d='M21 16V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8m18 0a2 2 0 01-2 2H5a2 2 0 01-2-2m18 0l-3-3m-12 3l3-3'/></svg>"
                />

                <x-value-card 
                    title="FISCALIZAÇÃO E DESIGN"
                    description="Elaboração de plantas de cálculo de betão armado, dimensionamento térmico e coordenação e acompanhamento de obras complexas."
                    theme="build"
                    icon="<svg width='40' height='40' fill='none' stroke='var(--color-primary-build)' stroke-width='2' viewBox='0 0 24 24'><path d='M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'/></svg>"
                />
            </div>
        </div>
    </section>

    <!-- Specific Projects -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle" style="color: var(--color-primary-build);">Projectos Executados</span>
                <h2 class="section-title" style="color: var(--color-primary-build);">Obras Concluídas pela PantherBUILD</h2>
            </div>
            
            <div class="grid-3" style="margin-top: 40px;">
                <x-project-card 
                    title="Centro Logístico de Talatona"
                    description="Execução integral da estrutura de betão, reabilitação civil e coordenação logística do Armazém D07."
                    image="{{ asset('images/panther-build-hero.png') }}"
                    category="Construção Industrial"
                    accentColor="build-primary"
                />
                
                <x-project-card 
                    title="Pavilhão de Armazenamento em Viana"
                    description="Construção de estrutura metálica modular autoportante com 5.000m² de área livre interna."
                    image="{{ asset('images/corporate-hero.png') }}"
                    category="Estrutura Metálica"
                    accentColor="build-primary"
                />
                
                <x-project-card 
                    title="Urbanização de Vias de Comunicação"
                    description="Pavimentação, terraplenagem e instalação de sistemas de drenagem pluvial integrada de acessos comerciais."
                    image="{{ asset('images/panther-mat-hero.png') }}"
                    category="Infraestrutura Pública"
                    accentColor="build-primary"
                />
            </div>
        </div>
    </section>
</x-layouts.app>
