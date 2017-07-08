<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
		$posts = Post::all();
		return view('model.post.index')->with('posts', $posts);
    }

    public function show(Post $post)
    {
		return view('model.post.show', compact('post'));
    }

    public function create()
    {
		return view('model.post.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Post $post)
    {
		return view('model.post.edit');
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
