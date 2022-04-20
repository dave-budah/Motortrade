<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }


    public function boot()
    {
        Blade::if('admin', function () {
           $user = auth()->user();

           return ($user->isAdmin() || $user->isWriter() || $user->isDealer() || $user->isSuperadmin());
        });
        Blade::if('writer', function () {
            return auth()->user()->isWriter();
        });
    }
}
