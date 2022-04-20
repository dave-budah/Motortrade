<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Auth\Access\HandlesAuthorization;

class VehiclePolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function view(User $user, Vehicle $vehicle)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function update(User $user, Vehicle $vehicle)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function delete(User $user, Vehicle $vehicle)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function restore(User $user, Vehicle $vehicle)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }


    public function forceDelete(User $user, Vehicle $vehicle)
    {
        return $user->isAdmin() || $user->isSuperadmin();
    }
}
