<?php

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

// Auth::routes();


Route::get('/', function () {
    $posts = \DB::table('posts')->get();
    return view('index', compact(['posts']));
});
Route::view('/about', 'about');
Route::view('/post', 'post');
Route::get('/post/{title}', function ($title) {
    return $title;
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
