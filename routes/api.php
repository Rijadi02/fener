<?php

use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\CoursesController;
use App\Http\Controllers\API\GalleryController;
use App\Http\Controllers\API\LecturesController;
use App\Http\Controllers\API\LibraryController;
use App\Http\Controllers\API\TicketsController;
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

//libary
Route::apiResource('/libraries', LibraryController::class);

//tickets
Route::apiResource('/tickets', TicketsController::class);






//working on it

//courses api's
Route::apiResource('/courses', CoursesController::class);
Route::get('/courses/{course}/lectures/', [CoursesController::class, 'get_course_lectures']);
Route::get('/courses/{course}/homeworks/', [CoursesController::class, 'get_course_homeworks']);
Route::get('/courses/{course}/materials/', [CoursesController::class, 'get_course_materials']);

//lectures api's
//all lectures
Route::apiResource('/lectures', LecturesController::class);
Route::get('/lectures/{lecture}/homeworks/', [LecturesController::class, 'get_lecture_homework']);
Route::get('/lectures/{lecture}/materials/', [LecturesController::class, 'get_lecture_material']);




//homework api's
