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

Route::get('/', function () {
    return view('posts.index');
});

Route::get('/posts', function () {
    $blogPosts = Post::all();
    return view( 'posts.index', compact('blogPosts') );
});

Route::get('/post/{id}', function ($id) {
    $post = Post::find($id);
    return view( 'posts.show', compact('post') );
});