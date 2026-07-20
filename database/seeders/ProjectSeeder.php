<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Centro Logístico de Talatona',
                'slug' => Str::slug('Centro Logístico de Talatona'),
                'description' => 'Construção de pavilhão industrial e centro logístico de alta capacidade com infraestruturas de suporte avançadas.',
                'category' => 'PantherBUILD',
                'client' => 'Cliente Industrial',
                'location' => 'Talatona, Luanda',
                'year' => '2024',
                'cover_image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'is_featured' => true,
            ],
            [
                'title' => 'Pavilhão de Armazenamento',
                'slug' => Str::slug('Pavilhão de Armazenamento'),
                'description' => 'Montagem de estrutura metálica de alta resistência para armazenamento industrial e distribuição de mercadorias.',
                'category' => 'PantherBUILD',
                'client' => 'ABP Group',
                'location' => 'Viana, Luanda',
                'year' => '2023',
                'cover_image' => 'https://images.unsplash.com/photo-1531834685032-c34bf0d84c77?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'is_featured' => true,
            ],
            [
                'title' => 'Urbanização de Vias',
                'slug' => Str::slug('Urbanização de Vias'),
                'description' => 'Execução de infraestruturas rodoviárias, obras de terraplenagem, pavimentação e saneamento integrado.',
                'category' => 'PantherBUILD',
                'client' => 'Governo Provincial',
                'location' => 'Luanda',
                'year' => '2023',
                'cover_image' => 'https://images.unsplash.com/photo-1587582423116-ec07293f0395?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'is_featured' => true,
            ],
            [
                'title' => 'Engenharia Civil',
                'slug' => Str::slug('Engenharia Civil'),
                'description' => 'Obras públicas de edificação e requalificação estrutural para complexos operacionais.',
                'category' => 'PantherBUILD',
                'client' => 'Entidade Pública',
                'location' => 'Luanda',
                'year' => '2022',
                'cover_image' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjNw9NAzytNyKhAZRBOhwdvxMGeX19g3DfF2g23VaXn8GnoWe16tuLsyhvWyg3o4DrJHNmcfN6KNsWwIuK0aJadYncw0S81J-mNpq_E_mWknNTuR_Xx-VZY5roGVDwZToI2x0S_Qqyfm4KR/s1600/MDA.jpg',
                'is_featured' => false,
            ],
            [
                'title' => 'Auditoria Técnica',
                'slug' => Str::slug('Auditoria Técnica'),
                'description' => 'Serviços de controlo de qualidade, fiscalização e acompanhamento de segurança em estaleiros de construção.',
                'category' => 'PantherBUILD',
                'client' => 'ABP Group',
                'location' => 'Luanda',
                'year' => '2024',
                'cover_image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'is_featured' => false,
            ],
            // PantherMAT Projects
            [
                'title' => 'Climatização de Escritórios',
                'slug' => Str::slug('Climatização de Escritórios'),
                'description' => 'Remodelação técnica completa do sistema AVAC inteligente em edifício corporativo.',
                'category' => 'PantherMAT',
                'client' => 'Empresa Corporativa',
                'location' => 'Luanda',
                'year' => '2024',
                'cover_image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'is_featured' => true,
            ],
            [
                'title' => 'Gestão de Instalações Residentes',
                'slug' => Str::slug('Gestão de Instalações Residentes'),
                'description' => 'Gestão física de condomínios comerciais e equipas residentes de eletricidade e canalização.',
                'category' => 'PantherMAT',
                'client' => 'Centro Logístico Talatona',
                'location' => 'Talatona, Luanda',
                'year' => '2023',
                'cover_image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'is_featured' => true,
            ],
            [
                'title' => 'Otimização Industrial de Energia',
                'slug' => Str::slug('Otimização Industrial de Energia'),
                'description' => 'Instalação de variadores de velocidade e condensadores para redução de desperdício elétrico.',
                'category' => 'PantherMAT',
                'client' => 'Complexo Industrial',
                'location' => 'Viana, Luanda',
                'year' => '2024',
                'cover_image' => 'https://images.unsplash.com/photo-1517581177682-a085bb7ffb15?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'is_featured' => true,
            ],
            // PantherOIL Projects
            [
                'title' => 'Equipa Técnica Offshore',
                'slug' => Str::slug('Equipa Técnica Offshore'),
                'description' => 'Apoio técnico especializado a plataformas petrolíferas flutuantes e embarcações.',
                'category' => 'PantherOIL',
                'client' => 'Operadora Petrolífera',
                'location' => 'Bacia do Cuanza',
                'year' => '2024',
                'cover_image' => 'https://www.ey.com/adobe/dynamicmedia/deliver/dm-aid--294aeb96-a898-44c8-a585-1d2bb2842e57/ey-industry-operator-use-computer-tablet.jpg',
                'is_featured' => true,
            ],
            [
                'title' => 'Manutenção Industrial Petrolífera',
                'slug' => Str::slug('Manutenção Industrial Petrolífera'),
                'description' => 'Supervisão logística contínua e distribuição de consumíveis de engenharia.',
                'category' => 'PantherOIL',
                'client' => 'Base Logística Onshore',
                'location' => 'Soyo, Zaire',
                'year' => '2023',
                'cover_image' => 'https://www.vectorsolutions.com/wp-content/uploads/2024/04/oil-4.png',
                'is_featured' => true,
            ],
            [
                'title' => 'Suporte a Refinarias no Soyo',
                'slug' => Str::slug('Suporte a Refinarias no Soyo'),
                'description' => 'Assistência técnica e logística em instalações terrestres de armazenamento.',
                'category' => 'PantherOIL',
                'client' => 'Refinaria de Luanda',
                'location' => 'Soyo',
                'year' => '2024',
                'cover_image' => 'https://ichef.bbci.co.uk/ace/standard/1920/cpsprodpb/8e62/live/65e32520-26e4-11f1-a79a-77e93010d956.jpg',
                'is_featured' => false,
            ],
            [
                'title' => 'Inspeção de Gasodutos',
                'slug' => Str::slug('Inspeção de Gasodutos'),
                'description' => 'Testes de pressão, estanqueidade e auditorias de tubulações de gás natural.',
                'category' => 'PantherOIL',
                'client' => 'Consórcio de Gás',
                'location' => 'Cabinda',
                'year' => '2023',
                'cover_image' => 'https://www.oemupdate.com/wp-content/uploads/2024/04/Oil-Gas-Pipes.jpg',
                'is_featured' => false,
            ],
            [
                'title' => 'Operações Marítimas e Válvulas',
                'slug' => Str::slug('Operações Marítimas e Válvulas'),
                'description' => 'Substituição de válvulas técnicas e manutenção preventiva offshore.',
                'category' => 'PantherOIL',
                'client' => 'Operadora Marítima',
                'location' => 'Bloco 15',
                'year' => '2024',
                'cover_image' => 'https://camachem.com/pub/media/magefan_blog/Top_10_Chemicals_for_Oil_and_Gas_Industry.jpg',
                'is_featured' => false,
            ],
            // Enviro.AO Projects
            [
                'title' => 'Estudo de Impacte Ambiental',
                'slug' => Str::slug('Estudo de Impacte Ambiental'),
                'description' => 'Elaboração de estudo de impacte ambiental e social para empreendimento industrial.',
                'category' => 'Enviro.AO',
                'client' => 'Grupo Industrial',
                'location' => 'Luanda',
                'year' => '2024',
                'cover_image' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'is_featured' => true,
            ],
            [
                'title' => 'Gestão Integrada de Resíduos',
                'slug' => Str::slug('Gestão Integrada de Resíduos'),
                'description' => 'Sistema certificado de recolha, triagem e tratamento ecológico de resíduos sólidos.',
                'category' => 'Enviro.AO',
                'client' => 'Complexo Comercial',
                'location' => 'Talatona',
                'year' => '2023',
                'cover_image' => 'https://images.unsplash.com/photo-1582967265696-67a840e69123?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'is_featured' => true,
            ],
            [
                'title' => 'Programa de Reflorestação',
                'slug' => Str::slug('Programa de Reflorestação'),
                'description' => 'Plantação de árvores nativas para recuperação de ecossistemas degradados.',
                'category' => 'Enviro.AO',
                'client' => 'Ministério do Ambiente',
                'location' => 'Benguela',
                'year' => '2024',
                'cover_image' => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'is_featured' => true,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}
