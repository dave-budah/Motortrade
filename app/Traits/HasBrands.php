<?php

namespace App\Traits;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasBrands
{
    public function brands()
    {
        return $this->brandsRelation;
    }

    public function brandsRelation(): MorphToMany
    {
        return $this->morphToMany(Brand::class, 'brandable')->withTimestamps();
    }

    public function syncBrands(array $brands)
    {
        $this->save();
        $this->brandsRelation()->sync($brands);
        $this->unsetRelation('brandsRelation');
    }

    public function removeBrands()
    {
        $this->brandsRelation()->detach();
        $this->unsetRelation('brandsRelation');
    }
}
