<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::latest()->take(3)->get();
        return view('front/home', compact('blogs'));
    }

    public function courses()
    {
        // $gallery = Gallery::all();
        return view('front/courses');
    }

    public function courses_show($course)
    {
        // $gallery = Gallery::all();
        return view('front/courses_show');
    }

    public function blogs()
    {
        $blogs = Blog::all();
        return view('front/blogs', compact('blogs'));
    }

    public function blogs_show($blog)
    {
        $blog = Blog::all();
        return view('front/blogs_show', compact('blog'));
    }

    public function gallery()
    {
        $gallery = Gallery::all();
        return view('front/gallery', compact('gallery'));
    }

    public function books()
    {
        // $gallery = Gallery::all();
        return view('front/books');
    }

    public function books_show($book)
    {
        // $gallery = Gallery::all();
        return view('front/books_show');
    }

    public function contact()
    {
        // $gallery = Gallery::all();
        return view('front/contact');
    }

    public function about()
    {
        // $gallery = Gallery::all();
        return view('front/about');
    }
}
