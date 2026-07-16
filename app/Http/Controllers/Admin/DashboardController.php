<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Project;
use App\Models\Career;
use App\Models\Application;
use App\Models\ContactMessage;

class DashboardController extends Controller
{
    public function index()
    {
        $posts_count = Post::count();
        $projects_count = Project::count();
        $careers_count = Career::count();
        $applications_count = Application::count();
        
        $messages_count = ContactMessage::count();
        $unread_messages_count = ContactMessage::where('is_read', false)->count();

        // Recent applications
        $recent_applications = Application::with('career')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        // Recent messages
        $recent_messages = ContactMessage::orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('admin.dashboard', compact(
            'posts_count',
            'projects_count',
            'careers_count',
            'applications_count',
            'messages_count',
            'unread_messages_count',
            'recent_applications',
            'recent_messages'
        ));
    }
}
