<?php

namespace App\Observers;

use App\Models\Vehicle;
use Illuminate\Support\Str;

class VehicleObserver
{

    public function created(Vehicle $vehicle)
    {
        $vehicle->slug = Str::slug($vehicle->name . '-' . now()->timestamp);
        $vehicle->save();
    }


    public function updated(Vehicle $vehicle)
    {
        //
    }

    /**
     * Handle the Vehicle "deleted" event.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return void
     */
    public function deleted(Vehicle $vehicle)
    {
        //
    }

    /**
     * Handle the Vehicle "restored" event.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return void
     */
    public function restored(Vehicle $vehicle)
    {
        //
    }

    /**
     * Handle the Vehicle "force deleted" event.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return void
     */
    public function forceDeleted(Vehicle $vehicle)
    {
        //
    }
}
