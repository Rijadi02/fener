<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\LectureHomeworkResource;
use App\Http\Resources\LectureMaterialsResource;
use App\Http\Resources\LecturesResource;
use App\Models\Lectures;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LecturesResource::collection(Lectures::all());

    }
    public function get_lecture_homework(Lectures $lecture)
    {
        return new LectureHomeworkResource($lecture);
    }
    public function get_lecture_material(Lectures $lecture)
    {
        return new LectureMaterialsResource($lecture);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lectures  $lectures
     * @return \Illuminate\Http\Response
     */
    public function show(Lectures $lectures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lectures  $lectures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lectures $lectures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lectures  $lectures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lectures $lectures)
    {
        //
    }
}
