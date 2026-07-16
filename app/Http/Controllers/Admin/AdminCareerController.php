<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCareerController extends Controller
{
    public function index()
    {
        $careers = Career::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.careers.index', compact('careers'));
    }

    public function create()
    {
        return view('admin.careers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'requirements' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $data['is_active'] = $request->has('is_active');

        Career::create($data);

        return redirect()->route('admin.careers.index')->with('success', 'Vaga de emprego criada com sucesso!');
    }

    public function edit(Career $career)
    {
        return view('admin.careers.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'requirements' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $data['is_active'] = $request->has('is_active');

        $career->update($data);

        return redirect()->route('admin.careers.index')->with('success', 'Vaga de emprego atualizada com sucesso!');
    }

    public function destroy(Career $career)
    {
        $career->delete();
        return redirect()->route('admin.careers.index')->with('success', 'Vaga de emprego eliminada com sucesso!');
    }

    // Candidate applications methods
    public function applications()
    {
        $applications = Application::with('career')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        return view('admin.careers.applications.index', compact('applications'));
    }

    public function showApplication($id)
    {
        $application = Application::with('career')->findOrFail($id);
        return view('admin.careers.applications.show', compact('application'));
    }

    public function destroyApplication($id)
    {
        $application = Application::findOrFail($id);
        
        if ($application->cv_path) {
            Storage::delete($application->cv_path);
        }

        $application->delete();

        return redirect()->route('admin.applications.index')->with('success', 'Candidatura eliminada com sucesso!');
    }

    public function downloadCv($id)
    {
        $application = Application::findOrFail($id);
        
        if (!$application->cv_path || !Storage::exists($application->cv_path)) {
            abort(404, 'Currículo não encontrado.');
        }

        return Storage::download($application->cv_path);
    }
}
