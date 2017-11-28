<?php

use Illuminate\Foundation\Auth\User;
use Blog\Post;

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

Route::get('/', 'PostsController@index');
Route::get('/posts', 'PostsController@index');

Route::get('/post/{post}', 'PostController@show');

Route::post('/comments', 'CommentsController@store');

Route::get('/store-post', function() {
    return view('posts.store');
});
Route::post('/store-post', 'PostController@store');