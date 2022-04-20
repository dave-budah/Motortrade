<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Radius;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Width;
use App\Policies\BrandPolicy;
use App\Policies\PostPolicy;
use App\Policies\RadiusPolicy;
use App\Policies\UserPolicy;
use App\Policies\VehiclePolicy;
use App\Policies\WidthPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Post::class => PostPolicy::class,
        Comment::class => PostPolicy::class,
        Brand::class => BrandPolicy::class,
        Vehicle::class => VehiclePolicy::class,
        Width::class => WidthPolicy::class,
        Radius::class => RadiusPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
