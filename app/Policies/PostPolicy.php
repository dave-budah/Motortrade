<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function view(User $user, Post $post)
    {

    }


    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSuperadmin() || $user->isWriter() || $user->isDealer();
    }


    public function update(User $user, Post $post)
    {
        return $user->isAdmin() || $user->isSuperadmin() || $post->isAuthoredBy($user);
    }


    public function delete(User $user, Post $post)
    {
        return $user->isAdmin() || $user->isSuperadmin() || $post->isAuthoredBy($user);
    }


    public function restore(User $user, Post $post)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function forceDelete(User $user, Post $post)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }
}
