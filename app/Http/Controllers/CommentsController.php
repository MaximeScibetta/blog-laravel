<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;
use Blog\Comment;

class CommentsController extends Controller
{
    public function store(){
        request()->validate([
            'content' => 'required|min:10|max:1000',
            'post_id' => 'required|numeric'
        ]);
        Comment::create(request()->all());
        return redirect('post/'.request('post_id'));
    }
}
