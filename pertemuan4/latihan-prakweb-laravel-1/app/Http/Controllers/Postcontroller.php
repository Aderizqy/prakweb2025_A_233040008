<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'title' => 'All Posts',
            'posts' => Post::with(['author', 'category'])->latest()->get()
        ]);
    }

    // Route Model Binding untuk single post page
    public function show(Post $post)
    {
        // Mengatasi N+1 problem
        $post->load(['author', 'category']);

        // ARAHKAN KE VIEW YANG BENAR
        return view('dashboard.show', compact('post'));
    }
}
