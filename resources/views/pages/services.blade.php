<x-layouts.app>
    <x-slot name="title">Serviços | ABP Group - Nossas Competências Multissectoriais</x-slot>

    <!-- Hero Banner -->
    <x-hero title="{{ $contents['hero_title'] ?? 'Serviços e Soluções Integradas' }}" 
        subtitle="{{ $contents['hero_subtitle'] ?? 'Prestamos serviços especializados de engenharia civil, AVAC, manutenção mecânica, gestão de resíduos e consultoria ambiental em todo o território nacional.' }}" 
        bgImage="{{ asset('images/corporate-hero.png') }}" theme="corporate"
        height="ultra-short" />

    <!-- Introduction Section -->
    <section class="section">
        <div class="container" style="max-width: 800px; text-align: center;">
            <span class="section-subtitle">O Que Fazemos</span>
            <h2 class="section-title">Gama Abrangente de Serviços Industriais e de Engenharia</h2>
            <p style="color: var(--color-text-muted); margin-top: 24px; font-size: 16px;">
                Através das nossas subsidiárias operacionais, o ABP Group oferece competências integradas de alto valor.
                Desde o planeamento ambiental de novas instalações, passando pelo projeto estrutural, fornecimento
                logístico do sector petrolífero e manutenção técnica contínua.
            </p>
        </div>
    </section>

    <!-- Services by Area Grid -->
    <section class="section section-bg-gray">
        <div class="container">
            <!-- Area 1: PantherBUILD -->
            <div class="split-section" style="margin-bottom: 80px;">
                <div class="split-content">
                    <span class="section-badge-inline"
                        style="background-color: var(--color-primary-build); color: var(--color-white); padding: 4px 12px; border-radius: 4px; font-size: 11px; font-weight: 700; width: fit-content; text-transform: uppercase;">PantherBUILD</span>
                    <h3 style="font-size: 26px; color: var(--color-primary-corporate); margin-top: 10px;">Engenharia e
                        Construção Civil</h3>
                    <p style="color: var(--color-text-muted);">
                        A PantherBUILD desenvolve e coordena projetos construtivos residenciais, industriais e de
                        infraestruturas públicas com elevados padrões de segurança e durabilidade.
                    </p>
                    <ul class="services-sublist"
                        style="margin-left: 20px; list-style-type: square; color: var(--color-text-muted);">
                        <li style="margin-bottom: 8px;">Projetos de engenharia civil de raiz e fiscalização de obras.
                        </li>
                        <li style="margin-bottom: 8px;">Construção de armazéns industriais e centros logísticos
                            modernos.</li>
                        <li style="margin-bottom: 8px;">Reabilitação de infraestruturas civis e edifícios
                            públicos/comerciais.</li>
                        <li style="margin-bottom: 8px;">Pavimentação, terraplenagem e obras de saneamento básico.</li>
                    </ul>
                    <a href="{{ route('panther-build') }}" class="btn btn-secondary"
                        style="color: var(--color-primary-build); border-color: var(--color-primary-build); align-self: flex-start; padding: 10px 20px; font-size: 14px; margin-top: 10px;">Saber
                        mais sobre a PantherBUILD</a>
                </div>
                <div class="split-image-wrapper">
                    <img src="{{ asset('images/panther-build-hero.png') }}" alt="Construção PantherBUILD"
                        class="split-image">
                </div>
            </div>

            <!-- Area 2: PantherOIL -->
            <div class="split-section image-right" style="margin-bottom: 80px;">
                <div class="split-content">
                    <span class="section-badge-inline"
                        style="background-color: var(--color-accent-oil); color: var(--color-primary-oil); padding: 4px 12px; border-radius: 4px; font-size: 11px; font-weight: 700; width: fit-content; text-transform: uppercase;">PantherOIL</span>
                    <h3 style="font-size: 26px; color: var(--color-primary-corporate); margin-top: 10px;">Soluções
                        Petrolíferas e Energéticas</h3>
                    <p style="color: var(--color-text-muted);">
                        A PantherOIL apoia a cadeia de abastecimento e operacional das indústrias de petróleo, gás e
                        energias renováveis no mar (offshore) e em terra (onshore).
                    </p>
                    <ul class="services-sublist"
                        style="margin-left: 20px; list-style-type: square; color: var(--color-text-muted);">
                        <li style="margin-bottom: 8px;">Fornecimento de equipamentos técnicos e consumíveis
                            especializados.</li>
                        <li style="margin-bottom: 8px;">Apoio logístico a bases operacionais de exploração e sondagem.
                        </li>
                        <li style="margin-bottom: 8px;">Engenharia de tubagens, válvulas e manutenção de fluidos.</li>
                        <li style="margin-bottom: 8px;">Implementação de soluções de transição energética e solar.</li>
                    </ul>
                    <a href="{{ route('panther-oil') }}" class="btn btn-secondary"
                        style="color: var(--color-accent-oil); border-color: var(--color-accent-oil); align-self: flex-start; padding: 10px 20px; font-size: 14px; margin-top: 10px;">Saber
                        mais sobre a PantherOIL</a>
                </div>
                <div class="split-image-wrapper">
                    <img src="{{ asset('images/panther-oil-hero.png') }}" alt="Energia PantherOIL" class="split-image">
                </div>
            </div>

            <!-- Area 3: PantherMAT -->
            <div class="split-section" style="margin-bottom: 80px;">
                <div class="split-content">
                    <span class="section-badge-inline"
                        style="background-color: var(--color-primary-mat); color: var(--color-white); padding: 4px 12px; border-radius: 4px; font-size: 11px; font-weight: 700; width: fit-content; text-transform: uppercase;">PantherMAT</span>
                    <h3 style="font-size: 26px; color: var(--color-primary-corporate); margin-top: 10px;">Gestão de
                        Instalações e Manutenção AVAC</h3>
                    <p style="color: var(--color-text-muted);">
                        A PantherMAT assegura que as infraestruturas técnicas, industriais e de climatização comercial
                        operem com a máxima fiabilidade, poupança energética e conformidade.
                    </p>
                    <ul class="services-sublist"
                        style="margin-left: 20px; list-style-type: square; color: var(--color-text-muted);">
                        <li style="margin-bottom: 8px;">Instalação e manutenção preventiva de sistemas AVAC comerciais e
                            industriais.</li>
                        <li style="margin-bottom: 8px;">Gestão integrada de instalações físicas (*Facility Management*).
                        </li>
                        <li style="margin-bottom: 8px;">Manutenção corretiva rápida 24/7 de sistemas mecânicos e
                            elétricos.</li>
                        <li style="margin-bottom: 8px;">Auditorias de eficiência energética em edifícios de escritórios
                            e armazéns.</li>
                    </ul>
                    <a href="{{ route('panther-mat') }}" class="btn btn-secondary"
                        style="color: var(--color-primary-mat); border-color: var(--color-primary-mat); align-self: flex-start; padding: 10px 20px; font-size: 14px; margin-top: 10px;">Saber
                        mais sobre a PantherMAT</a>
                </div>
                <div class="split-image-wrapper">
                    <img src="{{ asset('images/panther-mat-hero.png') }}" alt="Manutenção PantherMAT"
                        class="split-image">
                </div>
            </div>

            <!-- Area 4: Enviro.AO -->
            <div class="split-section image-right">
                <div class="split-content">
                    <span class="section-badge-inline"
                        style="background-color: var(--color-primary-enviro); color: var(--color-white); padding: 4px 12px; border-radius: 4px; font-size: 11px; font-weight: 700; width: fit-content; text-transform: uppercase;">Enviro.AO</span>
                    <h3 style="font-size: 26px; color: var(--color-primary-corporate); margin-top: 10px;">Consultoria e
                        Engenharia Ambiental</h3>
                    <p style="color: var(--color-text-muted);">
                        A Enviro.AO oferece soluções ambientais integradas que permitem que os nossos clientes operem de
                        forma limpa, sustentável e em total conformidade legal.
                    </p>
                    <ul class="services-sublist"
                        style="margin-left: 20px; list-style-type: square; color: var(--color-text-muted);">
                        <li style="margin-bottom: 8px;">Estudos de Impacto Ambiental (EIA) e planos de mitigação
                            socioambiental.</li>
                        <li style="margin-bottom: 8px;">Monitorização e análises laboratoriais da qualidade do ar, água
                            e solo.</li>
                        <li style="margin-bottom: 8px;">Assessoria no cumprimento dos regulamentos de ambiente em
                            Angola.</li>
                        <li style="margin-bottom: 8px;">Desenho de sistemas ecológicos de captação solar e reuso de
                            águas.</li>
                    </ul>
                    <a href="{{ route('enviro') }}" class="btn btn-secondary"
                        style="color: var(--color-primary-enviro); border-color: var(--color-primary-enviro); align-self: flex-start; padding: 10px 20px; font-size: 14px; margin-top: 10px;">Saber
                        mais sobre a Enviro.AO</a>
                </div>
                <div class="split-image-wrapper">
                    <img src="{{ asset('images/enviro-hero.png') }}" alt="Sustentabilidade Enviro.AO"
                        class="split-image">
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
