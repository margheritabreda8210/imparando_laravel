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
}