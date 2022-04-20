<?php

namespace App\Traits;


use App\Models\Radius;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasRadii
{
    public function radii()
    {
        return $this->radiiRelation;
    }

    public function radiiRelation(): MorphToMany
    {
        return $this->morphToMany(Radius::class, 'radiiable')->withTimestamps();
    }

    public function syncRadii(array $radii)
    {
        $this->save();
        $this->radiiRelation()->sync($radii);
        $this->unsetRelation('radiiRelation');
    }

    public function removeRadii()
    {
        $this->radiiRelation()->detach();
        $this->unsetRelation('radiiRelation');
    }

}

