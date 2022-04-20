<?php

namespace App\Traits;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasVehicles
{
    public function vehicles()
    {
        return $this->vehiclesRelation;
    }

    public function vehiclesRelation(): MorphToMany
    {
        return $this->morphToMany(Vehicle::class, 'vehicleable')->withTimestamps();
    }

    public function syncVehicles(array $vehicles)
    {
        $this->save();
        $this->vehiclesRelation()->sync($vehicles);
        $this->unsetRelation('vehiclesRelation');
    }

    public function removeVehicles()
    {
        $this->vehiclesRelation()->detach();
        $this->unsetRelation('vehiclesRelation');
    }
}
