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

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts', 'PostsController@index');

Route::get('/post/{post}', 'PostController@show');

Route::post('/comments', 'CommentsController@store')->middleware('auth');

Route::get('/store-post', function() {
    return view('posts.store');
})->middleware('can:store_post,Blog\Post');
Route::post('/store-post', 'PostController@store')->middleware('can:store_post,Blog\Post');

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@authenticate');
Route::get('/logout', 'SessionController@destroy');
Route::get('/register', 'RegistrationController@register');
Route::post('/register', 'RegistrationController@store');