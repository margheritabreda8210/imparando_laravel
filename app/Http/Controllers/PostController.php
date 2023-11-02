<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $list = Post::all();
        return view('posts.index', ['list' => $list]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        Post::create($request->all());
        return response()->redirectToRoute('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }
    public function update(Request $request, Post $post) {
        $post->update($request->all());
        return response()->redirectToRoute('posts.index');
    }
    public function destroy(Post $post){
        $post->delete();
        return response()->redirectToRoute('posts.index');
    }
}
