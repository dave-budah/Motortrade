<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Width;
use Illuminate\Auth\Access\HandlesAuthorization;

class WidthPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function view(User $user, Width $width)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function update(User $user, Width $width)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function delete(User $user, Width $width)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function restore(User $user, Width $width)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function forceDelete(User $user, Width $width)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }
}
