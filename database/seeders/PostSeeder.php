<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();
        $userId = $user ? $user->id : 1;

        $posts = [
            [
                'title' => 'Enviro.AO Lança Novo Programa de Gestão Integrada de Resíduos Industriais',
                'slug' => Str::slug('Enviro.AO Lança Novo Programa de Gestão Integrada de Resíduos Industriais'),
                'category' => 'Enviro',
                'summary' => 'A Enviro.AO iniciou um novo programa pioneiro focado na triagem, reciclagem e valorização de resíduos industriais em Luanda.',
                'content' => '<p>A Enviro.AO, unidade especializada em consultoria e engenharia ambiental do ABP Group, anunciou o lançamento de um programa abrangente de gestão de resíduos industriais em resposta às novas diretivas ambientais em Angola.</p><p>O projeto abrange auditorias técnicas de conformidade e soluções inovadoras para redução da pegada ecológica em complexos industriais.</p>',
                'cover_image' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'published_at' => now()->subDays(5),
                'author_name' => 'Equipa Enviro.AO',
            ],
            [
                'title' => 'Estudos de Impacto Ambiental Desenvolvidos para Infraestruturas de Energia',
                'slug' => Str::slug('Estudos de Impacto Ambiental Desenvolvidos para Infraestruturas de Energia'),
                'category' => 'Enviro',
                'summary' => 'Equipas multidisciplinares da Enviro.AO concluíram auditorias ecológicas em grande escala para projetos de energia renovável.',
                'content' => '<p>Com o objetivo de salvaguardar a biodiversidade nativa, a Enviro.AO conduziu estudos detalhados de impacto ambiental e planos de mitigação para novos parques energéticos em Angola.</p>',
                'cover_image' => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'published_at' => now()->subDays(12),
                'author_name' => 'Equipa Enviro.AO',
            ],
            [
                'title' => 'Iniciativa de Reflorestação e Preservação de Ecossistemas em Benguela',
                'slug' => Str::slug('Iniciativa de Reflorestação e Preservação de Ecossistemas em Benguela'),
                'category' => 'Enviro',
                'summary' => 'Ação comunitária e empresarial liderada pela Enviro.AO promove o plantio de 5.000 árvores nativas.',
                'content' => '<p>Em parceria com autoridades locais, a Enviro.AO reuniu colaboradores e voluntários para a reflorestação de áreas costeiras degradadas em Benguela.</p>',
                'cover_image' => 'https://www.endiama.co.ao/images/sustentavel/ambiental/img-03.webp',
                'published_at' => now()->subDays(20),
                'author_name' => 'Equipa Enviro.AO',
            ],
            [
                'title' => 'ABP Group Apresenta Resultados Anuais de Crescimento e Inovação',
                'slug' => Str::slug('ABP Group Apresenta Resultados Anuais de Crescimento e Inovação'),
                'category' => 'Institucional',
                'summary' => 'O ABP Group consolidou a sua posição de liderança nos setores de engenharia, AVAC, suporte petrolífero e ambiente.',
                'content' => '<p>O ABP Group registou um crescimento sustentado em todas as suas 4 unidades de negócio integradas durante o último ano fiscal.</p>',
                'cover_image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'published_at' => now()->subDays(3),
                'author_name' => 'ABP Group',
            ],
        ];

        foreach ($posts as $post) {
            Post::updateOrCreate(
                ['slug' => $post['slug']],
                array_merge($post, ['user_id' => $userId])
            );
        }
    }
}
