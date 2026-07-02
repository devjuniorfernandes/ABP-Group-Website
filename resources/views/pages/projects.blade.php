<x-layouts.app>
    <x-slot name="title">Projectos | ABP Group - Portfólio de Referência em Angola</x-slot>

    <!-- Hero Banner -->
    <x-hero 
        title=""
        subtitle=""
        bgImage="{{ asset('images/corporate-hero.png') }}"
        theme="corporate"
        height="ultra-short"
    />

    <!-- Portfolio Grid Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Realizações do Grupo</span>
                <h2 class="section-title">Projectos de Engenharia, Energia e Consultoria</h2>
            </div>
            
            <div class="grid-3" style="margin-top: 40px;">
                <!-- Project 1 -->
                <x-project-card 
                    title="Centro Logístico de Talatona - Armazém D07"
                    description="Projeto estrutural completo, reabilitação civil e instalação de sistemas avançados de climatização pela PantherBUILD e PantherMAT."
                    image="{{ asset('images/panther-build-hero.png') }}"
                    category="PantherBUILD / PantherMAT"
                />

                <!-- Project 2 -->
                <x-project-card 
                    title="Auditoria de Impacto Ambiental no Soyo"
                    description="Estudo integral de impacto socioambiental terrestre e marinho para infraestruturas petrolíferas de grande escala executado pela Enviro.ao."
                    image="{{ asset('images/enviro-hero.png') }}"
                    category="Enviro.ao"
                />

                <!-- Project 3 -->
                <x-project-card 
                    title="Apoio Técnico a Gasodutos de Exploração"
                    description="Engenharia de válvulas, monitorização de tubagens e fornecimento logístico contínuo em bases do norte angolano pela PantherOIL."
                    image="{{ asset('images/panther-oil-hero.png') }}"
                    category="PantherOIL"
                />

                <!-- Project 4 -->
                <x-project-card 
                    title="Climatização Central de Edifício de Escritórios em Luanda"
                    description="Retrofit completo do sistema AVAC central de um edifício de 12 pisos, otimizando o consumo elétrico mensal em cerca de 30%."
                    image="{{ asset('images/panther-mat-hero.png') }}"
                    category="PantherMAT"
                />

                <!-- Project 5 -->
                <x-project-card 
                    title="Construção de Pavilhão Industrial em Viana"
                    description="Obra industrial de raiz com estrutura metálica reforçada, cobertura térmica e acabamentos civis de alta resistência para armazenagem."
                    image="{{ asset('images/panther-build-hero.png') }}"
                    category="PantherBUILD"
                />

                <!-- Project 6 -->
                <x-project-card 
                    title="Plano de Gestão de Resíduos e Monitorização da Água"
                    description="Estudo e auditoria ambiental estratégica no rio Kwanza para o planeamento de novas captações agrícolas sustentáveis pela Enviro.ao."
                    image="{{ asset('images/enviro-hero.png') }}"
                    category="Enviro.ao"
                />
            </div>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="cta-banner" style="background-image: url('{{ asset('images/corporate-hero.png') }}');">
        <div class="cta-container">
            <h2 class="cta-title">Tem um projecto de grande escala em mente?</h2>
            <p style="opacity: 0.9; max-width: 600px;">A nossa equipa multidisciplinar de engenharia, gestão e ambiente está pronta para conceber soluções à medida dos seus objetivos.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary" style="margin-top: 10px;">Fale Connosco</a>
        </div>
    </section>
</x-layouts.app>
