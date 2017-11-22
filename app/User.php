<?php

namespace Blog;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Blog\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Blog\User whereUpdatedAt($value)
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
