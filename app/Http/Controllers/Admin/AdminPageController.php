<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPageController extends Controller
{
    protected $pagesMap = [
        'home' => 'Página Inicial',
        'about' => 'Sobre o Grupo',
        'contact' => 'Contactos',
        'panther-build' => 'PantherBUILD',
        'panther-mat' => 'PantherMAT',
        'panther-oil' => 'PantherOIL',
        'enviro' => 'Enviro.AO',
        'projects' => 'Projectos',
        'news' => 'Notícias',
        'certificacoes' => 'Certificações',
        'sustentabilidade' => 'Sustentabilidade',
        'politica-de-privacidade' => 'Política de Privacidade',
    ];

    public function index()
    {
        $pages = $this->pagesMap;
        return view('admin.pages.index', compact('pages'));
    }

    public function edit($page_key)
    {
        if (!array_key_exists($page_key, $this->pagesMap)) {
            abort(404);
        }

        $pageName = $this->pagesMap[$page_key];
        $contents = PageContent::where('page_key', $page_key)->get();

        return view('admin.pages.edit', compact('page_key', 'pageName', 'contents'));
    }

    public function update(Request $request, $page_key)
    {
        if (!array_key_exists($page_key, $this->pagesMap)) {
            abort(404);
        }

        $contents = PageContent::where('page_key', $page_key)->get();
        $values = $request->input('values', []);

        foreach ($contents as $item) {
            if ($item->type === 'image' || $item->type === 'video') {
                if ($request->hasFile("images.{$item->id}")) {
                    // Delete old file if it exists and is not a seeded asset/remote url
                    if ($item->value && !str_starts_with($item->value, 'images/') && !str_starts_with($item->value, 'http')) {
                        Storage::disk('public')->delete($item->value);
                    }
                    // Store new file
                    $path = $request->file("images.{$item->id}")->store('pages', 'public');
                    $item->update(['value' => $path]);
                }
            } else {
                if (array_key_exists($item->id, $values)) {
                    $item->update(['value' => $values[$item->id]]);
                }
            }
        }

        return redirect()->back()->with('success', 'Conteúdos atualizados com sucesso!');
    }

    public function addStat($page_key)
    {
        if (!in_array($page_key, ['home', 'about'])) {
            return redirect()->back()->with('error', 'Esta página não suporta estatísticas dinâmicas.');
        }

        $statKeys = PageContent::where('page_key', $page_key)
            ->where('section_key', 'stats')
            ->pluck('content_key')
            ->toArray();

        $maxIndex = 0;
        foreach ($statKeys as $key) {
            if (preg_match('/^stat(\d+)_/', $key, $m)) {
                $idx = (int)$m[1];
                if ($idx > $maxIndex) {
                    $maxIndex = $idx;
                }
            }
        }

        $newIndex = $maxIndex + 1;

        if ($page_key === 'home') {
            PageContent::create([
                'page_key' => 'home',
                'section_key' => 'stats',
                'content_key' => "stat{$newIndex}_number",
                'label' => "Estatística {$newIndex} - Número/Valor",
                'type' => 'text',
                'value' => '+0',
            ]);

            PageContent::create([
                'page_key' => 'home',
                'section_key' => 'stats',
                'content_key' => "stat{$newIndex}_text",
                'label' => "Estatística {$newIndex} - Texto descritivo",
                'type' => 'text',
                'value' => 'Descrição da estatística',
            ]);
        } elseif ($page_key === 'about') {
            PageContent::create([
                'page_key' => 'about',
                'section_key' => 'stats',
                'content_key' => "stat{$newIndex}_number",
                'label' => "Estatística {$newIndex} - Valor/Número",
                'type' => 'text',
                'value' => '0',
            ]);

            PageContent::create([
                'page_key' => 'about',
                'section_key' => 'stats',
                'content_key' => "stat{$newIndex}_suffix",
                'label' => "Estatística {$newIndex} - Sufixo",
                'type' => 'text',
                'value' => '+',
            ]);

            PageContent::create([
                'page_key' => 'about',
                'section_key' => 'stats',
                'content_key' => "stat{$newIndex}_label",
                'label' => "Estatística {$newIndex} - Legenda",
                'type' => 'text',
                'value' => 'Nova estatística',
            ]);
        }

        return redirect()->back()->with('success', "Caixa de estatística #{$newIndex} adicionada com sucesso!");
    }

    public function removeStat($page_key, $stat_index)
    {
        if (!in_array($page_key, ['home', 'about'])) {
            return redirect()->back()->with('error', 'Esta página não suporta remoção de estatísticas.');
        }

        PageContent::where('page_key', $page_key)
            ->where('section_key', 'stats')
            ->where('content_key', 'like', "stat{$stat_index}_%")
            ->delete();

        return redirect()->back()->with('success', "Caixa de estatística #{$stat_index} removida com sucesso!");
    }
}
