<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        $post->load(['event.region', 'sport']);

        return view('post', compact('post'));
    }
}
