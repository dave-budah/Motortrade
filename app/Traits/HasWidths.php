<?php

namespace App\Traits;

use App\Models\Width;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasWidths
{
    public function widths()
    {
        return $this->widthsRelation;
    }

    public function widthsRelation(): MorphToMany
    {
        return $this->morphToMany(Width::class, 'widthable')->withTimestamps();
    }

    public function syncWidths(array $widths)
    {
        $this->save();
        $this->widthsRelation()->sync($widths);
        $this->unsetRelation('brandsRelation');
    }

    public function removeWidths()
    {
        $this->widthsRelation()->detach();
        $this->unsetRelation('widthsRelation');
    }

}
