<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminNewsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.news.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'summary' => 'required|string',
            'content' => 'required|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'published_at' => 'nullable|date',
            'author_name' => 'nullable|string|max:255',
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = Auth::id();
        $data['author_name'] = $data['author_name'] ?: Auth::user()->name;

        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('news', 'public');
            $data['cover_image'] = $path;
        }

        Post::create($data);

        return redirect()->route('admin.news.index')->with('success', 'Artigo de notícia criado com sucesso!');
    }

    public function edit(Post $news)
    {
        $post = $news;
        return view('admin.news.edit', compact('post'));
    }

    public function update(Request $request, Post $news)
    {
        $post = $news;
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'summary' => 'required|string',
            'content' => 'required|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'published_at' => 'nullable|date',
            'author_name' => 'nullable|string|max:255',
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['author_name'] = $data['author_name'] ?: $post->author_name;

        if ($request->hasFile('cover_image')) {
            if ($post->cover_image) {
                Storage::disk('public')->delete($post->cover_image);
            }
            $path = $request->file('cover_image')->store('news', 'public');
            $data['cover_image'] = $path;
        }

        $post->update($data);

        return redirect()->route('admin.news.index')->with('success', 'Artigo de notícia atualizado com sucesso!');
    }

    public function destroy(Post $news)
    {
        $post = $news;
        if ($post->cover_image) {
            Storage::disk('public')->delete($post->cover_image);
        }

        $post->delete();

        return redirect()->route('admin.news.index')->with('success', 'Artigo de notícia eliminado com sucesso!');
    }
}
