<?php

namespace App\Policies;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BrandPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function view(User $user, Brand $brand)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function update(User $user, Brand $brand)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function delete(User $user, Brand $brand)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function restore(User $user, Brand $brand)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function forceDelete(User $user, Brand $brand)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }
}
