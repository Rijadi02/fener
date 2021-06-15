<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * isplay a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libraries = Library::orderBy('created_at', 'DESC')->get();
        return view('admin/libraries', compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'author' => 'required',
                'description' => 'required',
                'img' => 'required|image',
                'link' => '',
                'file' => '',

            ]
        );

        $library = new Library();

        $library->title = $data['title'];
        $library->author = $data['author'];
        $library->description = $data['description'];
        $library->link = $data['link'];


        if (request('img')) {
            $inputs['img'] = request('img')->store('uploads', 'public');
            $library->img = $inputs['img'];
        } else {
            $library->img = "null";
        }

        if (request('file')) {
            $inputs['file'] = request('file')->store('uploads', 'public');
            $library->file = $inputs['file'];
        } else {
            $library->file = "null";
        }

        if ($library->isDirty('title')) {
            session()->flash('library-add', 'Library added: ' . request('title'));
            $library->save();
        } else {
            session()->flash('library-add', 'Nothing to add: ' . request('title'));
        }

        return redirect('/admin/libraries');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library $library)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $library)
    {
        $libraries = Library::orderBy('created_at', 'DESC')->get();
        return view('/admin/libraries', compact('libraries', 'library'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $library)
    {
        $data = request()->validate(
            [
                'title' => 'required',
                'author' => 'required',
                'description' => 'required',
                'img' => 'image',
                'link' => '',
                'file' => '',

            ]
        );


        $library->title = $data['title'];
        $library->author = $data['author'];
        $library->description = $data['description'];
        $library->link = $data['link'];


        if (request('img')) {
            $inputs['img'] = request('img')->store('uploads', 'public');
            $library->img = $inputs['img'];
        } else {
            $library->img = "null";
        }

        if (request('file')) {
            $inputs['file'] = request('file')->store('uploads', 'public');
            $library->file = $inputs['file'];
        } else {
            $library->file = "null";
        }

        session()->flash('library-add', 'Blog updated: ' . request('title'));

        $library->save();
        return redirect('/admin/libraries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $library)
    {
        $library->delete();
        session()->flash('library-deleted', 'Library deleted: ' . $library->title);
        return back();
    }
}
