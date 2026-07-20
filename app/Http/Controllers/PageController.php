<?php

namespace App\Http\Controllers;

use App\Models\PageContent;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $contents = PageContent::where('page_key', 'home')->pluck('value', 'content_key')->all();
        $latestProjects = \App\Models\Project::latest()->take(3)->get();
        $latestPosts = \App\Models\Post::where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
        return view('pages.home', compact('contents', 'latestProjects', 'latestPosts'));
    }

    public function about()
    {
        $contents = PageContent::where('page_key', 'about')->pluck('value', 'content_key')->all();
        return view('pages.about', compact('contents'));
    }

    public function services()
    {
        $contents = PageContent::where('page_key', 'services')->pluck('value', 'content_key')->all();
        return view('pages.services', compact('contents'));
    }

    public function contact()
    {
        $contents = PageContent::where('page_key', 'contact')->pluck('value', 'content_key')->all();
        return view('pages.contact', compact('contents'));
    }

    public function enviro()
    {
        $contents = PageContent::where('page_key', 'enviro')->pluck('value', 'content_key')->all();
        $projects = \App\Models\Project::where('category', 'like', '%Enviro%')
            ->orderBy('year', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        return view('pages.enviro', compact('contents', 'projects'));
    }

    public function pantherOil()
    {
        $contents = PageContent::where('page_key', 'panther-oil')->pluck('value', 'content_key')->all();
        $projects = \App\Models\Project::where('category', 'like', '%PantherOIL%')
            ->orderBy('year', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        return view('pages.panther-oil', compact('contents', 'projects'));
    }

    public function pantherMat()
    {
        $contents = PageContent::where('page_key', 'panther-mat')->pluck('value', 'content_key')->all();
        $projects = \App\Models\Project::where('category', 'like', '%PantherMAT%')
            ->orderBy('year', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        return view('pages.panther-mat', compact('contents', 'projects'));
    }

    public function pantherBuild()
    {
        $contents = PageContent::where('page_key', 'panther-build')->pluck('value', 'content_key')->all();
        $projects = \App\Models\Project::where('category', 'like', '%PantherBUILD%')
            ->orderBy('year', 'desc')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        return view('pages.panther-build', compact('contents', 'projects'));
    }

    public function certifications()
    {
        $contents = PageContent::where('page_key', 'certificacoes')->pluck('value', 'content_key')->all();
        return view('pages.certifications', compact('contents'));
    }

    public function sustainability()
    {
        $contents = PageContent::where('page_key', 'sustentabilidade')->pluck('value', 'content_key')->all();
        return view('pages.sustainability', compact('contents'));
    }

    public function privacy()
    {
        $contents = PageContent::where('page_key', 'politica-de-privacidade')->pluck('value', 'content_key')->all();
        return view('pages.privacy', compact('contents'));
    }
}
