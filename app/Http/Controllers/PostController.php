<?php

namespace App\Http\Controllers;

use \App\BlogPost;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index', ['posts' => BlogPost::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request, $id)
    {
        $request->session()->reflash();
        return view('posts.show', ['post' => BlogPost::findOrFail($id)]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validationData = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required'
        ]);

        $blogPost = new BlogPost();
        $blogPost->title = $request->input('title');
        $blogPost->content = $request->input('content');
        $blogPost->save();

        $request->session()->flash('status', 'Blog Post was created');

        return redirect()->route('posts.show', ['post' => $blogPost->id]);
    }
}