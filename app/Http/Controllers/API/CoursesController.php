<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CoursesHomeworkResourse;
use App\Http\Resources\CoursesMaterialsResource;

use App\Http\Resources\CoursesResource;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CoursesResource::collection(Courses::all());
    }

    public function get_course_lectures(Courses $course)
    {
        return new CoursesResource($course);
    }

    public function get_course_homeworks(Courses $course)
    {
        return new CoursesHomeworkResourse($course);
    }

    public function get_course_materials(Courses $course)
    {
        return new CoursesMaterialsResource($course);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('img')) {
            $name = $request->file('img')->getClientOriginalName();
            return $name;
        }else{
            return 'ska hiq file o bleron lludi';
        }

        $data = request()->validate(
            [
                'title' => 'required',
                'img' => '',
                'description' => 'required',
                'price' => 'required',
                // 'user_id' => 'required',
            ]
        );

        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'price' => 'required',
        //     'img' => 'required',
        // ]);



        $course = new \App\Models\Courses();

        $course->title = $data['title'];
        $course->img = $data['img'];
        $course->description = $data['description'];
        $course->price = $data['price'];
        $course->user_id = auth()->guard('api')->user()->id;


        if (request('img')) {
            $inputs['img'] = request('img')->store('uploads', 'public');
            $course->img = $inputs['img'];
        } else {
            $course->img = 'null';
        }

        $course->save();

        return $course;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courses $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $courses)
    {
        //
    }
}
