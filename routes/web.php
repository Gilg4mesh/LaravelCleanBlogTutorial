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


Route::get('/', function () {
    $posts = \DB::table('posts')->where('status', 'published')->orderBy('created_at', 'desc')->paginate(3); // 3 items in one page
    return view('index', compact(['posts']));
});

Route::view('/about', 'about');

Route::get('/post/{slug}', function ($slug) {
    $post = \DB::table('posts')->where('slug', $slug)->first();
    return view('post', compact(['post']));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
