<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
        return view('admin/blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'title' => 'required',
                'content' => 'required',
                'img' => 'required|image',
            ]
        );

        $blog = new Blog();

        $blog->title = $data['title'];
        $blog->content = $data['content'];

        if (request('img')) {
            $inputs['img'] = request('img')->store('uploads', 'public');
            $blog->img = $inputs['img'];
        } else {
            $blog->img = "null";
        }

        if ($blog->isDirty('title')) {
            session()->flash('blog-add', 'Blog added: ' . request('title'));
            $blog->save();
        } else {
            session()->flash('blog-add', 'Nothing to add: ' . request('title'));
        }

        return redirect('/admin/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
        return view('/admin/blogs', compact('blogs', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $data = request()->validate(
            [
                'title' => 'required',
                'content' => 'required',
                'img' => 'image',
            ]
        );



        $blog->title = $data['title'];
        $blog->content = $data['content'];

        if (request('img')) {
            $inputs['img'] = request('img')->store('uploads', 'public');
            $blog->img = $inputs['img'];
        } else {
            $blog->img = "null";
        }

        session()->flash('blog-add', 'Blog added: ' . request('title'));
        $blog->save();
        return redirect('/admin/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        session()->flash('blog-deleted', 'Blog deleted: ' . $blog->title);
        return back();
    }
}
