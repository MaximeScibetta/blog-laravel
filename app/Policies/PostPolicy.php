<?php

namespace Blog\Policies;

use Blog\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function store_post(User $user){
        return $user->is_admin;
    }
}
