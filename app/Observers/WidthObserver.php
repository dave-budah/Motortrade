<?php

namespace App\Observers;

use App\Models\Width;
use Illuminate\Support\Str;

class WidthObserver
{

    public function created(Width $width)
    {
        $width->slug = Str::slug($width->name . '-' . now()->timestamp);
        $width->save();
    }


    public function updated(Width $width)
    {
        //
    }

    /**
     * Handle the Width "deleted" event.
     *
     * @param  \App\Models\Width  $width
     * @return void
     */
    public function deleted(Width $width)
    {
        //
    }

    /**
     * Handle the Width "restored" event.
     *
     * @param  \App\Models\Width  $width
     * @return void
     */
    public function restored(Width $width)
    {
        //
    }

    /**
     * Handle the Width "force deleted" event.
     *
     * @param  \App\Models\Width  $width
     * @return void
     */
    public function forceDeleted(Width $width)
    {
        //
    }
}
