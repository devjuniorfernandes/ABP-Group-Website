<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Application;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.careers', compact('careers'));
    }

    public function apply(Request $request)
    {
        $request->validate([
            'career_id' => 'nullable|exists:careers,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:10240', // Max 10MB
            'message' => 'nullable|string',
        ], [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Insira um e-mail válido.',
            'cv.required' => 'O currículo é obrigatório.',
            'cv.mimes' => 'O currículo deve ser em formato PDF, DOC ou DOCX.',
            'cv.max' => 'O tamanho máximo do ficheiro do currículo é de 10MB.',
        ]);

        $cvPath = null;
        if ($request->hasFile('cv')) {
            // Save CV securely in a private directory
            $cvPath = $request->file('cv')->store('private/cvs');
        }

        Application::create([
            'career_id' => $request->input('career_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'cv_path' => $cvPath,
            'message' => $request->input('message'),
        ]);

        return back()->with('success', 'A sua candidatura foi submetida com sucesso! A nossa equipa de recursos humanos irá analisar o seu perfil.');
    }
}
