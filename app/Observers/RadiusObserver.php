<?php

namespace App\Observers;

use App\Models\Radius;
use Illuminate\Support\Str;

class RadiusObserver
{

    public function created(Radius $radius)
    {
        $radius->slug = Str::slug($radius->name . '-' . now()->timestamp);
        $radius->save();
    }

    /**
     * Handle the Radius "updated" event.
     *
     * @param  \App\Models\Radius  $radius
     * @return void
     */
    public function updated(Radius $radius)
    {
        //
    }

    /**
     * Handle the Radius "deleted" event.
     *
     * @param  \App\Models\Radius  $radius
     * @return void
     */
    public function deleted(Radius $radius)
    {
        //
    }

    /**
     * Handle the Radius "restored" event.
     *
     * @param  \App\Models\Radius  $radius
     * @return void
     */
    public function restored(Radius $radius)
    {
        //
    }

    /**
     * Handle the Radius "force deleted" event.
     *
     * @param  \App\Models\Radius  $radius
     * @return void
     */
    public function forceDeleted(Radius $radius)
    {
        //
    }
}
