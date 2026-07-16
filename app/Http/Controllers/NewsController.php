<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $query = Post::where('published_at', '<=', now())
            ->orderBy('published_at', 'desc');

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('summary', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $posts = $query->paginate(6);

        $popular_posts = Post::where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->limit(4)
            ->get();

        return view('pages.news', compact('posts', 'popular_posts', 'search'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('published_at', '<=', now())
            ->firstOrFail();

        // Fetch recent news for sidebar
        $recent_posts = Post::where('id', '!=', $post->id)
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->limit(4)
            ->get();

        return view('pages.news-details', compact('post', 'recent_posts'));
    }
}
