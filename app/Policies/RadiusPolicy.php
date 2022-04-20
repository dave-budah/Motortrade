<?php

namespace App\Policies;

use App\Models\Radius;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RadiusPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }

    public function view(User $user, Radius $radius)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function update(User $user, Radius $radius)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function delete(User $user, Radius $radius)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function restore(User $user, Radius $radius)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function forceDelete(User $user, Radius $radius)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }
}
