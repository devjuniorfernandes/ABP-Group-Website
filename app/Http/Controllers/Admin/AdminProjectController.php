<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'client' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:4',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'is_featured' => 'boolean',
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['is_featured'] = $request->has('is_featured');

        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('projects', 'public');
            $data['cover_image'] = $path;
        }

        if ($request->hasFile('gallery_images')) {
            $gallery = [];
            foreach ($request->file('gallery_images') as $file) {
                $gallery[] = $file->store('projects/gallery', 'public');
            }
            $data['gallery_images'] = json_encode($gallery);
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Projeto criado com sucesso!');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'client' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:4',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'is_featured' => 'boolean',
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['is_featured'] = $request->has('is_featured');

        if ($request->hasFile('cover_image')) {
            if ($project->cover_image) {
                Storage::disk('public')->delete($project->cover_image);
            }
            $path = $request->file('cover_image')->store('projects', 'public');
            $data['cover_image'] = $path;
        }

        if ($request->hasFile('gallery_images')) {
            // Delete old gallery
            if ($project->gallery_images) {
                $oldGallery = json_decode($project->gallery_images, true) ?: [];
                foreach ($oldGallery as $oldFile) {
                    Storage::disk('public')->delete($oldFile);
                }
            }

            $gallery = [];
            foreach ($request->file('gallery_images') as $file) {
                $gallery[] = $file->store('projects/gallery', 'public');
            }
            $data['gallery_images'] = json_encode($gallery);
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Projeto atualizado com sucesso!');
    }

    public function destroy(Project $project)
    {
        if ($project->cover_image) {
            Storage::disk('public')->delete($project->cover_image);
        }

        if ($project->gallery_images) {
            $gallery = json_decode($project->gallery_images, true) ?: [];
            foreach ($gallery as $file) {
                Storage::disk('public')->delete($file);
            }
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Projeto eliminado com sucesso!');
    }
}
