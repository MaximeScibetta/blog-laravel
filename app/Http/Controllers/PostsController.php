<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;
use Blog\Post;

class PostsController extends Controller
{
    public function index(){
        $blogPosts = Post::with('user')->latest()->paginate(5);
        foreach ($blogPosts as $post) {
            $dateSrc = $post->created_at;
            $dateTime = new \Datetime($dateSrc);
            $date = $dateTime->format('F d, Y');
        }
        return view('posts.index', compact('blogPosts', 'date'));
    }

    public function show(Post $post){
        $post->load('user', 'comments.user');

        return view('posts.show', compact('post'));
    }
}
