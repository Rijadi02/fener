<?php

use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\CoursesController;
use App\Http\Controllers\API\GalleryController;
use App\Http\Controllers\API\LecturesController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//register controller
Route::post('register', [RegisterController::class, "create_api"]);

//blog apis
Route::apiResource('/blogs', BlogController::class);

//gallery api's
Route::apiResource('/galleries', GalleryController::class);


//working on it

//courses api's
Route::apiResource('/courses', CoursesController::class);
Route::get('/{course}/lectures/', [CoursesController::class, 'get_course_lectures']);

//lectures api's
//all lectures
Route::apiResource('/lectures', LecturesController::class);
Route::get('/{lecture}/homeworks/', [LecturesController::class, 'get_lecture_homework']);


//homework api's
