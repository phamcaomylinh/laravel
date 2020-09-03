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
        dd(BlogPost::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        dd(BlogPost::find($id));
    }
}