<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $contents = \App\Models\PageContent::where('page_key', 'projects')->pluck('value', 'content_key')->all();
        $category = $request->query('category');
        $search = $request->query('search');
        $query = Project::orderBy('year', 'desc');

        if ($category && $category !== 'Todos') {
            $query->where('category', 'like', '%' . $category . '%');
        }

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $projects = $query->paginate(9);

        return view('pages.projects', compact('contents', 'projects', 'category', 'search'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        
        // Fetch related projects (same category)
        $related_projects = Project::where('category', $project->category)
            ->where('id', '!=', $project->id)
            ->limit(3)
            ->get();

        return view('pages.project-details', compact('project', 'related_projects'));
    }
}
