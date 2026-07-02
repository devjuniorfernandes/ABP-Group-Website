<x-layouts.app>
    <x-slot name="title">Sobre Nós | ABP Group - Compromisso e Crescimento em Angola</x-slot>

    <!-- Hero Banner -->
    <x-hero 
        title=""
        subtitle=""
        bgImage="{{ asset('images/corporate-hero.png') }}"
        theme="about"
        height="ultra-short"
    />

    <!-- Presentation Section -->
    <section class="section">
        <div class="container">
            <div class="split-section">
                <div class="split-content">
                    <span class="section-subtitle">O Nosso Legado</span>
                    <h2 class="section-title" style="margin-left: 0; text-align: left;">Compromisso com o Futuro de Angola</h2>
                    <p style="color: var(--color-text-muted);">
                        Ao longo da nossa trajectória, consolidámos uma posição de referência através da prestação de serviços especializados e da capacidade de responder aos desafios dos sectores mais exigentes. Acreditamos que o sucesso sustentável é construído através da qualidade, da confiança e da criação de soluções que geram impacto positivo.
                    </p>
                    <p style="color: var(--color-text-muted);">
                        Com uma abordagem integrada e uma equipa multidisciplinar, desenvolvemos projectos que combinam conhecimento técnico, inovação e excelência operacional. O nosso compromisso é criar valor duradouro para clientes, parceiros e comunidades, contribuindo activamente para o desenvolvimento económico e social de Angola.
                    </p>
                </div>
                <div class="split-image-wrapper">
                    <img src="{{ asset('images/team-group.png') }}" alt="Gestão e Liderança ABP Group" class="split-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission, Vision & Values -->
    <section class="section section-bg-gray" id="values">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Diretrizes Estratégicas</span>
                <h2 class="section-title">Missão, Visão e Valores</h2>
            </div>
            
            <div class="grid-3">
                <!-- Mission -->
                <x-value-card 
                    title="MISSÃO"
                    description="Contribuir para o desenvolvimento sustentável de Angola através da prestação de serviços especializados e soluções integradas, criando valor para clientes, parceiros e comunidades com elevados padrões de qualidade, segurança e excelência operacional."
                    theme="corporate"
                    icon="<svg width='40' height='40' fill='none' stroke='currentColor' stroke-width='2' viewBox='0 0 24 24'><path d='M13 10V3L4 14h7v7l9-11h-7z'/></svg>"
                />

                <!-- Vision -->
                <x-value-card 
                    title="VISÃO"
                    description="Ser um grupo empresarial de referência nos sectores em que actuamos, reconhecido pela inovação, competência técnica e capacidade de gerar impacto positivo e duradouro nos mercados onde estamos presentes."
                    theme="corporate"
                    icon="<svg width='40' height='40' fill='none' stroke='currentColor' stroke-width='2' viewBox='0 0 24 24'><path d='M15 12a3 3 0 11-6 0 3 3 0 016 0z'/><path d='M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z'/></svg>"
                />

                <!-- Values -->
                <x-value-card 
                    title="VALORES"
                    description="Os nossos valores orientam cada decisão e cada projecto que desenvolvemos. Acreditamos na excelência, na integridade, na inovação e na segurança como pilares fundamentais para construir relações de confiança e gerar impacto positivo e sustentável."
                    theme="corporate"
                    icon="<svg width='40' height='40' fill='none' stroke='currentColor' stroke-width='2' viewBox='0 0 24 24'><path d='M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'/></svg>"
                />
            </div>
        </div>
    </section>

    <!-- Stats Grid Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">O Nosso Impacto em Números</span>
                <h2 class="section-title">Resultados que Demonstram o Nosso Crescimento</h2>
            </div>
            
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number" data-counter>150+</span>
                    <span class="stat-label">Projetos Concluídos</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-counter>450+</span>
                    <span class="stat-label">Colaboradores Diretos</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-counter>4</span>
                    <span class="stat-label">Áreas de Negócio Ativas</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-counter>15+</span>
                    <span class="stat-label">Anos de Experiência</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-counter>18</span>
                    <span class="stat-label">Províncias Alcançadas</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-counter>100%</span>
                    <span class="stat-label">Cumprimento e Segurança</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-counter>20+</span>
                    <span class="stat-label">Parceiros Estratégicos</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-counter>50k+</span>
                    <span class="stat-label">Horas de Formação</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Area Section -->
    <section class="section section-bg-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Vídeo Institucional</span>
                <h2 class="section-title">Conheça as Nossas Operações de Perto</h2>
            </div>
            <div class="split-image-wrapper" style="max-width: 900px; margin: 0 auto; cursor: pointer; position: relative;">
                <img src="{{ asset('images/corporate-hero.png') }}" alt="Operações Industriais" style="filter: brightness(0.7); width: 100%; aspect-ratio: 16/9; object-fit: cover;">
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: var(--color-white); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(0,0,0,0.3); transition: var(--transition-fast);">
                    <svg width="24" height="24" fill="var(--color-primary-corporate)" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
