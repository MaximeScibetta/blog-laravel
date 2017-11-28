<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;
use Blog\Post;

class PostController extends Controller
{
    public function show(Post $post){
        $dateSrc = $post->created_at;
        $dateTime = new \Datetime($dateSrc);
        $date = $dateTime->format('F d, Y');
        return view('posts.show', compact('post', 'date'));
    }

    public function store(){
        $post = Post::create(request()->all());
        return redirect('post/' . $post->id);
    }
}
