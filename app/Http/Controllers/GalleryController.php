<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'DESC')->get();
        return view('admin/galleries', compact('galleries'));
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
                'img' => 'required|image',
            ]
        );

        $gallery = new Gallery();

        $gallery->title = $data['title'];

        if (request('img')) {
            $inputs['img'] = request('img')->store('uploads', 'public');
            $gallery->img = $inputs['img'];
        } else {
            $gallery->img = "null";
        }

        if ($gallery->isDirty('title')) {
            session()->flash('gallery-add', 'Gallery added: ' . request('title'));
            $gallery->save();
        } else {
            session()->flash('gallery-add', 'Nothing to add: ' . request('title'));
        }

        return redirect('/admin/galleries');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $galleries = Gallery::orderBy('created_at', 'DESC')->get();
        return view('/admin/galleries', compact('galleries', 'gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $data = request()->validate(
            [
                'title' => 'required',

                'img' => 'image',
            ]
        );



        $gallery->title = $data['title'];


        if (request('img')) {
            $inputs['img'] = request('img')->store('uploads', 'public');
            $gallery->img = $inputs['img'];
        }

        session()->flash('gallery-add', 'Gallery updated: ' . request('title'));
        $gallery->save();
        return redirect('/admin/galleries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        session()->flash('gallery-deleted', 'Gallery deleted: ' . $gallery->title);
        return back();
    }
}
