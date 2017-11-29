<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
use Blog\User;

/**
 * Blog\Post
 *
 * @property int $id
 * @property string $title
 * @property string|null $preamble
 * @property string $body
 * @property int $user_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\Post whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\Post wherePreamble($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\Post whereUserId($value)
 * @mixin \Eloquent
*/

class Post extends Model
{
    protected $fillable = [
        'title', 'preamble', 'body', 'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function scopeArchives($query, $month, $year){
        return $query->whereRaw('MONTH(created_at)=?', $month)->whereRaw('YEAR(created_at)=?', $year);
    }
}
