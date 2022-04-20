<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Radius;
use App\Models\Tag;
use App\Models\Vehicle;
use App\Models\Width;
use App\Observers\BrandObserver;
use App\Observers\RadiusObserver;
use App\Observers\TagObserver;
use App\Observers\VehicleObserver;
use App\Observers\WidthObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Tag::observe(TagObserver::class);
        Brand::observe(BrandObserver::class);
        Vehicle::observe(VehicleObserver::class);
        Width::observe(WidthObserver::class);
        Radius::observe(RadiusObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
