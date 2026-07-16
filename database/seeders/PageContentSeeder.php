<?php

namespace Database\Seeders;

use App\Models\PageContent;
use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
{
    public function run(): void
    {
        PageContent::truncate();

        $contents = [
            // HOME PAGE
            [
                'page_key' => 'home',
                'section_key' => 'hero',
                'content_key' => 'hero_title',
                'label' => 'Título do Banner Principal (Hero)',
                'type' => 'text',
                'value' => 'Desenvolvendo Soluções Sustentáveis para Angola',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'hero',
                'content_key' => 'hero_subtitle',
                'label' => 'Subtítulo do Banner Principal (Hero)',
                'type' => 'textarea',
                'value' => 'O ABP Group lidera a engenharia civil, climatização, apoio petrolífero e gestão ambiental, promovendo um crescimento integrado com impacto local.',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'intro',
                'content_key' => 'intro_label',
                'label' => 'Secção Introdução - Rótulo/Etiqueta (Vermelho)',
                'type' => 'text',
                'value' => 'O NOSSO GRUPO',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'intro',
                'content_key' => 'intro_title',
                'label' => 'Título da Secção de Introdução',
                'type' => 'text',
                'value' => 'O Nosso Compromisso',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'intro',
                'content_key' => 'intro_text',
                'label' => 'Texto da Secção de Introdução',
                'type' => 'textarea',
                'value' => 'Com mais de 10 anos de experiência em Angola, actuamos em sectores altamente estratégicos fornecendo engenharia de topo e responsabilidade ambiental.',
            ],

            // ABOUT PAGE
            [
                'page_key' => 'about',
                'section_key' => 'hero',
                'content_key' => 'hero_title',
                'label' => 'Título do Banner',
                'type' => 'text',
                'value' => 'Sobre o ABP Group',
            ],
            [
                'page_key' => 'about',
                'section_key' => 'hero',
                'content_key' => 'hero_subtitle',
                'label' => 'Subtítulo do Banner',
                'type' => 'textarea',
                'value' => 'Conheça a nossa história, os nossos valores e o compromisso permanente com a sustentabilidade e engenharia de excelência em Angola.',
            ],
            [
                'page_key' => 'about',
                'section_key' => 'vision',
                'content_key' => 'vision_title',
                'label' => 'Título da Secção de Visão',
                'type' => 'text',
                'value' => 'A Nossa Visão',
            ],
            [
                'page_key' => 'about',
                'section_key' => 'vision',
                'content_key' => 'vision_text',
                'label' => 'Texto da Secção de Visão',
                'type' => 'textarea',
                'value' => 'Ser a referência em Angola na entrega de soluções inovadoras de engenharia, construção e sustentabilidade, promovendo parcerias sólidas de longo prazo.',
            ],

            // SERVICES PAGE
            [
                'page_key' => 'services',
                'section_key' => 'hero',
                'content_key' => 'hero_title',
                'label' => 'Título do Banner',
                'type' => 'text',
                'value' => 'Serviços e Soluções Integradas',
            ],
            [
                'page_key' => 'services',
                'section_key' => 'hero',
                'content_key' => 'hero_subtitle',
                'label' => 'Subtítulo do Banner',
                'type' => 'textarea',
                'value' => 'Prestamos serviços especializados de engenharia civil, AVAC, manutenção mecânica, gestão de resíduos e consultoria ambiental em todo o território nacional.',
            ],

            // CONTACT PAGE
            [
                'page_key' => 'contact',
                'section_key' => 'hero',
                'content_key' => 'hero_title',
                'label' => 'Título do Banner',
                'type' => 'text',
                'value' => 'Contacte-nos',
            ],
            [
                'page_key' => 'contact',
                'section_key' => 'hero',
                'content_key' => 'hero_subtitle',
                'label' => 'Subtítulo do Banner',
                'type' => 'textarea',
                'value' => 'Tem alguma dúvida ou proposta de parceria? Fale connosco através de um dos nossos canais de comunicação corporativos.',
            ],

            // PANTHERBUILD PAGE
            [
                'page_key' => 'panther-build',
                'section_key' => 'hero',
                'content_key' => 'hero_title',
                'label' => 'Título do Banner',
                'type' => 'text',
                'value' => 'PantherBUILD',
            ],
            [
                'page_key' => 'panther-build',
                'section_key' => 'hero',
                'content_key' => 'hero_subtitle',
                'label' => 'Subtítulo do Banner',
                'type' => 'textarea',
                'value' => 'Engenharia civil de ponta, infraestruturas industriais e obras residenciais com foco no rigor, segurança e cumprimento escrupuloso de prazos.',
            ],
            [
                'page_key' => 'panther-build',
                'section_key' => 'body',
                'content_key' => 'description',
                'label' => 'Descrição Principal do Serviço',
                'type' => 'textarea',
                'value' => 'A PantherBUILD é a nossa marca dedicada ao sector da construção civil. Desenvolvemos projectos industriais de raiz, requalificações urbanas e naves de logística.',
            ],

            // PANTHERMAT PAGE
            [
                'page_key' => 'panther-mat',
                'section_key' => 'hero',
                'content_key' => 'hero_title',
                'label' => 'Título do Banner',
                'type' => 'text',
                'value' => 'PantherMAT',
            ],
            [
                'page_key' => 'panther-mat',
                'section_key' => 'hero',
                'content_key' => 'hero_subtitle',
                'label' => 'Subtítulo do Banner',
                'type' => 'textarea',
                'value' => 'Sistemas avançados de climatização (AVAC), ventilação mecânica, gestão técnica centralizada de edifícios e instalações hidráulicas em Angola.',
            ],
            [
                'page_key' => 'panther-mat',
                'section_key' => 'body',
                'content_key' => 'description',
                'label' => 'Descrição Principal do Serviço',
                'type' => 'textarea',
                'value' => 'A PantherMAT actua na instalação, manutenção e assistência técnica de equipamentos de AVAC e distribuição de fluidos industriais para edifícios corporativos.',
            ],

            // PANTHEROIL PAGE
            [
                'page_key' => 'panther-oil',
                'section_key' => 'hero',
                'content_key' => 'hero_title',
                'label' => 'Título do Banner',
                'type' => 'text',
                'value' => 'PantherOIL',
            ],
            [
                'page_key' => 'panther-oil',
                'section_key' => 'hero',
                'content_key' => 'hero_subtitle',
                'label' => 'Subtítulo do Banner',
                'type' => 'textarea',
                'value' => 'Apoio logístico, fornecimento de tubagens, flanges, válvulas de alta pressão e engenharia mecânica especializada para o sector offshore e onshore.',
            ],
            [
                'page_key' => 'panther-oil',
                'section_key' => 'body',
                'content_key' => 'description',
                'label' => 'Descrição Principal do Serviço',
                'type' => 'textarea',
                'value' => 'A PantherOIL garante serviços logísticos de resposta rápida e distribuição de consumíveis industriais homologados para bases petrolíferas nacionais.',
            ],

            // ENVIRO PAGE
            [
                'page_key' => 'enviro',
                'section_key' => 'hero',
                'content_key' => 'hero_title',
                'label' => 'Título do Banner',
                'type' => 'text',
                'value' => 'Enviro.AO',
            ],
            [
                'page_key' => 'enviro',
                'section_key' => 'hero',
                'content_key' => 'hero_subtitle',
                'label' => 'Subtítulo do Banner',
                'type' => 'textarea',
                'value' => 'Estudos de impacte ambiental, gestão integrada de resíduos industriais perigosos, análises laboratoriais de solos e águas e consultoria de sustentabilidade.',
            ],
            [
                'page_key' => 'enviro',
                'section_key' => 'body',
                'content_key' => 'description',
                'label' => 'Descrição Principal do Serviço',
                'type' => 'textarea',
                'value' => 'A Enviro.AO ajuda marcas líderes e indústrias nacionais a gerir a sua pegada ecológica através de auditorias e processos certificados de mitigação.',
            ],

            // CERTIFICACOES PAGE
            [
                'page_key' => 'certificacoes',
                'section_key' => 'hero',
                'content_key' => 'hero_title',
                'label' => 'Título do Banner',
                'type' => 'text',
                'value' => 'Certificações do Grupo',
            ],
            [
                'page_key' => 'certificacoes',
                'section_key' => 'hero',
                'content_key' => 'hero_subtitle',
                'label' => 'Subtítulo do Banner',
                'type' => 'textarea',
                'value' => 'Trabalhamos de acordo com os mais elevados padrões internacionais de Gestão da Qualidade, Saúde, Segurança e Proteção Ambiental (HSE).',
            ],
            [
                'page_key' => 'certificacoes',
                'section_key' => 'body',
                'content_key' => 'intro_text',
                'label' => 'Texto de Introdução',
                'type' => 'textarea',
                'value' => 'Garantimos a conformidade com as normas internacionais ISO em todos os estaleiros e bases de serviço do grupo, assegurando um ambiente laboral de risco zero.',
            ],

            // SUSTENTABILIDADE PAGE
            [
                'page_key' => 'sustentabilidade',
                'section_key' => 'hero',
                'content_key' => 'hero_title',
                'label' => 'Título do Banner',
                'type' => 'text',
                'value' => 'Sustentabilidade e ESG',
            ],
            [
                'page_key' => 'sustentabilidade',
                'section_key' => 'hero',
                'content_key' => 'hero_subtitle',
                'label' => 'Subtítulo do Banner',
                'type' => 'textarea',
                'value' => 'O desenvolvimento de Angola exige responsabilidade. O nosso compromisso assenta em directrizes ecológicas, sociais e de transparência administrativa corporativa.',
            ],
            [
                'page_key' => 'sustentabilidade',
                'section_key' => 'body',
                'content_key' => 'esg_text',
                'label' => 'Diretivas de Sustentabilidade',
                'type' => 'textarea',
                'value' => 'Reduzimos as emissões operacionais, implementamos energia solar distribuída em escritórios e realizamos acções regulares de reflorestação.',
            ],

            // PRIVACY PAGE
            [
                'page_key' => 'politica-de-privacidade',
                'section_key' => 'hero',
                'content_key' => 'hero_title',
                'label' => 'Título do Banner',
                'type' => 'text',
                'value' => 'Política de Privacidade',
            ],
            [
                'page_key' => 'politica-de-privacidade',
                'section_key' => 'hero',
                'content_key' => 'hero_subtitle',
                'label' => 'Subtítulo do Banner',
                'type' => 'textarea',
                'value' => 'Leia os termos e condições relativos ao tratamento e protecção de dados pessoais de utilizadores e candidatos a vagas do ABP Group.',
            ],
            [
                'page_key' => 'politica-de-privacidade',
                'section_key' => 'body',
                'content_key' => 'content',
                'label' => 'Conteúdo Principal da Política',
                'type' => 'rich_text',
                'value' => '<p>O ABP Group respeita a sua privacidade. Recolhemos dados apenas para fins administrativos de contacto e processamento de candidaturas a emprego, garantindo a sua confidencialidade.</p><h3>Recolha de Informação</h3><p>Os seus dados são guardados de forma segura na nossa base de dados encriptada e nunca serão transmitidos a terceiros alheios ao grupo.</p>',
            ],
            // HOME STATS
            [
                'page_key' => 'home',
                'section_key' => 'stats',
                'content_key' => 'stat1_number',
                'label' => 'Estatística 1 - Número/Valor',
                'type' => 'text',
                'value' => '+10',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'stats',
                'content_key' => 'stat1_text',
                'label' => 'Estatística 1 - Texto descritivo',
                'type' => 'text',
                'value' => 'Anos de experiência consolidada no mercado de Angola.',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'stats',
                'content_key' => 'stat2_number',
                'label' => 'Estatística 2 - Número/Valor',
                'type' => 'text',
                'value' => '+150',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'stats',
                'content_key' => 'stat2_text',
                'label' => 'Estatística 2 - Texto descritivo',
                'type' => 'text',
                'value' => 'Projectos civis e industriais executados com excelência.',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'stats',
                'content_key' => 'stat3_number',
                'label' => 'Estatística 3 - Número/Valor',
                'type' => 'text',
                'value' => '450',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'stats',
                'content_key' => 'stat3_text',
                'label' => 'Estatística 3 - Texto descritivo',
                'type' => 'text',
                'value' => 'Profissionais qualificados nas equipas operacionais.',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'stats',
                'content_key' => 'stat4_number',
                'label' => 'Estatística 4 - Número/Valor',
                'type' => 'text',
                'value' => '4',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'stats',
                'content_key' => 'stat4_text',
                'label' => 'Estatística 4 - Texto descritivo',
                'type' => 'text',
                'value' => 'Unidades de negócio integradas e complementares.',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'stats',
                'content_key' => 'stat5_number',
                'label' => 'Estatística 5 - Número/Valor',
                'type' => 'text',
                'value' => '18',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'stats',
                'content_key' => 'stat5_text',
                'label' => 'Estatística 5 - Texto descritivo',
                'type' => 'text',
                'value' => 'Províncias cobertas com serviços de infraestruturas.',
            ],
            // HOME SOLUTIONS INTRO
            [
                'page_key' => 'home',
                'section_key' => 'solutions',
                'content_key' => 'solutions_title_red',
                'label' => 'Secção Soluções - Título Destaque (Vermelho)',
                'type' => 'text',
                'value' => 'Soluções',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'solutions',
                'content_key' => 'solutions_title_blue',
                'label' => 'Secção Soluções - Título (Azul)',
                'type' => 'text',
                'value' => 'industriais integradas',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'solutions',
                'content_key' => 'solutions_vision',
                'label' => 'Secção Soluções - Texto de Visão/Destaque',
                'type' => 'textarea',
                'value' => 'A nossa visão — ser o principal parceiro na execução de projectos complexos e sustentáveis de energia, engenharia e ambiente em Angola.',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'solutions',
                'content_key' => 'solutions_desc',
                'label' => 'Secção Soluções - Descrição Detalhada',
                'type' => 'textarea',
                'value' => 'A excelência operacional e o rigor na segurança são os fundamentos de todas as nossas intervenções. Colaboramos estreitamente com os nossos clientes e parceiros para ir além do convencional, superando desafios técnicos e logísticos e implementando soluções que acrescentam valor real e promovem o desenvolvimento industrial do país.',
            ],
            // HOME CLIENTS INTRO
            [
                'page_key' => 'home',
                'section_key' => 'clients',
                'content_key' => 'clients_label',
                'label' => 'Secção Clientes - Rótulo/Etiqueta (Vermelho)',
                'type' => 'text',
                'value' => 'CLIENTES',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'clients',
                'content_key' => 'clients_title',
                'label' => 'Secção Clientes - Título principal',
                'type' => 'textarea',
                'value' => 'Parcerias estratégicas que reforçam a nossa capacidade de entrega',
            ],
            // HOME SUSTAINABILITY
            [
                'page_key' => 'home',
                'section_key' => 'sustainability',
                'content_key' => 'sustainability_title',
                'label' => 'Banner Verde - Título principal',
                'type' => 'text',
                'value' => 'Comprometidos com um Futuro Mais Sustentável',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'sustainability',
                'content_key' => 'sustainability_desc',
                'label' => 'Banner Verde - Texto descritivo',
                'type' => 'textarea',
                'value' => 'Desenvolvemos as nossas actividades com responsabilidade, promovendo práticas sustentáveis que geram valor para as comunidades, protegem o ambiente e contribuem para o desenvolvimento das gerações futuras.',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'sustainability',
                'content_key' => 'sustainability_image',
                'label' => 'Banner Verde - Imagem de Fundo (Floresta)',
                'type' => 'image',
                'value' => 'images/forest-canopy.png',
            ],
            // HOME NEWS INTRO
            [
                'page_key' => 'home',
                'section_key' => 'news',
                'content_key' => 'news_label',
                'label' => 'Secção Notícias - Rótulo/Etiqueta (Vermelho)',
                'type' => 'text',
                'value' => 'NÓTICIAS E EVENTOS',
            ],
            [
                'page_key' => 'home',
                'section_key' => 'news',
                'content_key' => 'news_title',
                'label' => 'Secção Notícias - Título principal',
                'type' => 'textarea',
                'value' => 'Acompanhe as nossas últimas actualizações e iniciativas',
            ],
        ];

        foreach ($contents as $content) {
            PageContent::create($content);
        }
    }
}
