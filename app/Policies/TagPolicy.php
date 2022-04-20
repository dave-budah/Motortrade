<?php

namespace App\Policies;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TagPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function view(User $user, Tag $tag)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function update(User $user, Tag $tag)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function delete(User $user, Tag $tag)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function restore(User $user, Tag $tag)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function forceDelete(User $user, Tag $tag)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }
}
