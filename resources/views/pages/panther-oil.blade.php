<x-layouts.app>
    <x-slot name="title">PantherOIL | Soluções e Logística Petrolífera - ABP Group</x-slot>

    <!-- Hero Banner -->
    <x-hero 
        title="Logística e Apoio Técnico Especializado para o Sector Petrolífero"
        subtitle="Fornecemos suporte técnico operacional, tubagens industriais e serviços logísticos de alta fiabilidade para operações offshore e onshore."
        bgImage="{{ asset('images/panther-oil-hero.png') }}"
        theme="oil"
        height="medium"
    />

    <!-- Introduction Section -->
    <section class="section" style="background-color: var(--color-primary-oil); color: var(--color-white);">
        <div class="container">
            <div class="split-section">
                <div class="split-content">
                    <span class="section-subtitle" style="color: var(--color-accent-oil);">Energia em Movimento</span>
                    <h2 class="section-title" style="margin-left: 0; text-align: left; color: var(--color-white);">Apoio à Indústria Petrolífera</h2>
                    <p style="opacity: 0.8;">
                        A PantherOIL é a unidade especializada em petróleo, gás e suporte energético do ABP Group. Fornecemos soluções completas na cadeia de abastecimento técnico, válvulas industriais e equipamentos mecânicos para bases petrolíferas críticas no Soyo, Cabinda e Luanda.
                    </p>
                    <p style="opacity: 0.8;">
                        Com rigorosos padrões de saúde, segurança e ambiente (HSE), garantimos fornecimentos em tempo recorde e o suporte de engenheiros mecânicos experientes para manter as operações dos nossos clientes ativas e eficientes.
                    </p>
                </div>
                <div class="split-image-wrapper">
                    <img src="{{ asset('images/panther-oil-hero.png') }}" alt="Plataforma Petrolífera" class="split-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services Oil Theme -->
    <section class="section section-bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle" style="color: var(--color-primary-oil);">As Nossas Competências</span>
                <h2 class="section-title" style="color: var(--color-primary-oil);">Serviços de Engenharia e Logística</h2>
            </div>
            
            <div class="grid-3">
                <x-value-card 
                    title="FORNECIMENTO TÉCNICO"
                    description="Distribuição especializada de válvulas de alta pressão, tubagens industriais, mangueiras marinhas e peças mecânicas certificadas para exploração."
                    theme="oil"
                    icon="<svg width='40' height='40' fill='none' stroke='var(--color-accent-oil)' stroke-width='2' viewBox='0 0 24 24'><path d='M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z'/><circle cx='12' cy='12' r='3'/></svg>"
                />

                <x-value-card 
                    title="APOIO OFFSHORE"
                    description="Serviços logísticos avançados e suporte mecânico de engenharia diretamente em plataformas flutuantes e embarcações técnicas."
                    theme="oil"
                    icon="<svg width='40' height='40' fill='none' stroke='var(--color-accent-oil)' stroke-width='2' viewBox='0 0 24 24'><path d='M21 16V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8m18 0a2 2 0 01-2 2H5a2 2 0 01-2-2m18 0l-3-3m-12 3l3-3'/></svg>"
                />

                <x-value-card 
                    title="SEGURANÇA E RIGOR"
                    description="Auditorias periódicas de tubulações, testes de estanqueidade e planos de contenção em conformidade com as normas regulamentares angolanas."
                    theme="oil"
                    icon="<svg width='40' height='40' fill='none' stroke='var(--color-accent-oil)' stroke-width='2' viewBox='0 0 24 24'><path d='M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'/></svg>"
                />
            </div>
        </div>
    </section>

    <!-- Project Gallery -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle" style="color: var(--color-primary-oil);">Suporte Concluído</span>
                <h2 class="section-title" style="color: var(--color-primary-oil);">Projectos Recentes da PantherOIL</h2>
            </div>
            
            <div class="grid-3" style="margin-top: 40px;">
                <x-project-card 
                    title="Apoio Técnico a Gasodutos"
                    description="Engenharia mecânica de fluidos de suporte em refinarias terrestres no Soyo."
                    image="{{ asset('images/panther-oil-hero.png') }}"
                    category="Apoio Onshore"
                    accentColor="oil-accent"
                />
                
                <x-project-card 
                    title="Logística de Válvulas no mar"
                    description="Substituição e manutenção programada de válvulas marinhas de alta pressão em blocos offshore."
                    image="{{ asset('images/corporate-hero.png') }}"
                    category="Fornecimento Crítico"
                    accentColor="oil-accent"
                />
                
                <x-project-card 
                    title="Planos de Contenção Ecológica"
                    description="Desenho e teste prático de sistemas de segurança e estanqueidade para reservatórios de combustíveis."
                    image="{{ asset('images/enviro-hero.png') }}"
                    category="Segurança Industrial"
                    accentColor="oil-accent"
                />
            </div>
        </div>
    </section>
</x-layouts.app>
