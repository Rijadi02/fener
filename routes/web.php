<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('admin.blogs.index');
    Route::post('/blogs/store', [App\Http\Controllers\BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('/blogs/{blog}/edit', [App\Http\Controllers\BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::patch('/blogs/{blog}/update', [App\Http\Controllers\BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/blogs/{blog}/delete', [App\Http\Controllers\BlogController::class, 'destroy'])->name('admin.blogs.destroy');

});
