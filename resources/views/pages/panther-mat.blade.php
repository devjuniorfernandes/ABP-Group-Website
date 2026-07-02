<x-layouts.app>
    <x-slot name="title">PantherMAT | Gestão de Instalações e Climatização AVAC - ABP Group</x-slot>

    <!-- Hero Banner -->
    <x-hero 
        title="Soluções de Gestão e Manutenção que Garantem Continuidade Operacional"
        subtitle="Especialistas em Facility Management e climatização comercial (AVAC) para edifícios corporativos e complexos logísticos."
        bgImage="{{ asset('images/panther-mat-hero.png') }}"
        theme="mat"
        height="medium"
    />

    <!-- Introduction Section -->
    <section class="section">
        <div class="container">
            <div class="split-section">
                <div class="split-content">
                    <span class="section-subtitle" style="color: var(--color-accent-mat);">Eficiência Operacional</span>
                    <h2 class="section-title" style="margin-left: 0; text-align: left; color: var(--color-primary-mat);">Gestão de Ativos Físicos</h2>
                    <p style="color: var(--color-text-muted);">
                        A PantherMAT assegura que as suas instalações funcionem com total eficiência e segurança. Oferecemos serviços integrados de gestão predial (*Facility Management*) e somos uma referência angolana no dimensionamento, instalação e manutenção preventiva de sistemas de climatização comercial (AVAC).
                    </p>
                    <p style="color: var(--color-text-muted);">
                        A nossa equipa técnica de engenheiros e mecânicos credenciados assegura que equipamentos críticos de refrigeração e eletricidade funcionem sem interrupções indesejadas, prolongando a vida útil dos seus ativos físicos.
                    </p>
                </div>
                <div class="split-image-wrapper">
                    <img src="{{ asset('images/panther-mat-hero.png') }}" alt="Equipa Técnica PantherMAT" class="split-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services Mat Theme -->
    <section class="section section-bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle" style="color: var(--color-primary-mat);">Os Nossos Serviços</span>
                <h2 class="section-title" style="color: var(--color-primary-mat);">Manutenção Preventiva e Corretiva</h2>
            </div>
            
            <div class="grid-3">
                <x-value-card 
                    title="CLIMATIZAÇÃO AVAC"
                    description="Instalação de chillers, centrais de tratamento de ar (UTA) e cassetes de refrigeração comercial. Manutenção preventiva rigorosa dos níveis de gás."
                    theme="mat"
                    icon="<svg width='40' height='40' fill='none' stroke='var(--color-accent-mat)' stroke-width='2' viewBox='0 0 24 24'><path d='M13 10V3L4 14h7v7l9-11h-7z'/></svg>"
                />

                <x-value-card 
                    title="FACILITY MANAGEMENT"
                    description="Gestão física de condomínios comerciais, incluindo equipas residentes de eletricidade, canalização, serralharia e higiene industrial."
                    theme="mat"
                    icon="<svg width='40' height='40' fill='none' stroke='var(--color-accent-mat)' stroke-width='2' viewBox='0 0 24 24'><path d='M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5'/></svg>"
                />

                <x-value-card 
                    title="SUPORTE 24/7"
                    description="Disponibilização de piquetes técnicos urgentes para resolução rápida de falhas elétricas, inundações ou colapsos de climatização em Luanda."
                    theme="mat"
                    icon="<svg width='40' height='40' fill='none' stroke='var(--color-accent-mat)' stroke-width='2' viewBox='0 0 24 24'><path d='M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'/></svg>"
                />
            </div>
        </div>
    </section>

    <!-- Specific Projects -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle" style="color: var(--color-primary-mat);">Projectos de Destaque</span>
                <h2 class="section-title" style="color: var(--color-primary-mat);">Operações Recentes da PantherMAT</h2>
            </div>
            
            <div class="grid-3" style="margin-top: 40px;">
                <x-project-card 
                    title="Climatização de Escritórios em Luanda"
                    description="Remodelação técnica completa do sistema central de AVAC inteligente de um edifício de 12 pisos de escritórios."
                    image="{{ asset('images/panther-mat-hero.png') }}"
                    category="Retrofit AVAC"
                    accentColor="mat-accent"
                />
                
                <x-project-card 
                    title="Manutenção do Centro Logístico de Talatona"
                    description="Contrato de gestão de instalações técnicas residentes de eletricidade e redes estruturadas de comunicações nos armazéns."
                    image="{{ asset('images/panther-build-hero.png') }}"
                    category="Facility Management"
                    accentColor="mat-accent"
                />
                
                <x-project-card 
                    title="Otimização Energética Industrial"
                    description="Instalação de variadores de velocidade e condensadores de fator de potência para reduzir o desperdício elétrico de geradores."
                    image="{{ asset('images/corporate-hero.png') }}"
                    category="Eficiência Energética"
                    accentColor="mat-accent"
                />
            </div>
        </div>
    </section>
</x-layouts.app>
