<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
use Blog\Post;
use Blog\User;

class Comment extends Model
{
    protected $fillable = [
        'content', 'post_id', 'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
