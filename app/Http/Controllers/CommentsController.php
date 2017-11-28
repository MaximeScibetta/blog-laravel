<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;
use Blog\Comment;

class CommentsController extends Controller
{
    public function store(){
        Comment::create(request()->all());
        return redirect('post/'.request('post_id'));
    }
}
