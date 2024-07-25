<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('create-post');
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect('/');
    }

    public function edit($post)
    {
        $data = Post::find($post);

        return view('post-edit', [
            'post' => $data
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return redirect('posts/' . $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/');
    }
}
