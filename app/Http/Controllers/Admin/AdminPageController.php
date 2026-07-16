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
        'services' => 'Serviços',
        'contact' => 'Contactos',
        'panther-build' => 'PantherBUILD',
        'panther-mat' => 'PantherMAT',
        'panther-oil' => 'PantherOIL',
        'enviro' => 'Enviro.AO',
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
            if ($item->type === 'image') {
                if ($request->hasFile("images.{$item->id}")) {
                    // Delete old image if it exists and is not a seeded asset
                    if ($item->value && !str_starts_with($item->value, 'images/')) {
                        Storage::disk('public')->delete($item->value);
                    }
                    // Store new image
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
}
