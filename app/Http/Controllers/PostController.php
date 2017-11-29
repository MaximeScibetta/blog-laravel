<?php

namespace Blog\Http\Controllers;

use Request;
use Blog\Post;
use Blog\Http\Requests\StoreBlogPost;

class PostController extends Controller
{
    public function show(Post $post){
        $dateSrc = $post->created_at;
        $dateTime = new \Datetime($dateSrc);
        $date = $dateTime->format('F d, Y');
        return view('posts.show', compact('post', 'date'));
    }

    public function store(StoreBlogPost $request){
        $post = Post::create(request()->all());
        return redirect('post/' . $post->id);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }
    
    public function saveEdit(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $input = Request::all();
        $post->update($input);
        return redirect('post/' . $post->id);
    }
}
