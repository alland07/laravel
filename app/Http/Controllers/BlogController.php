<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{   
    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('AddArticle');
    }

    /**
     * Show the application blog.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('blog');
    }

    /**
     * Show the article add page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function AddArticle()
    {
        return view('blog.add');
    }

    
}
