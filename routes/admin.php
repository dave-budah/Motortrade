<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\WriterController;
use App\Http\Controllers\Writer\PostController as WriterPostController;
use App\Http\Controllers\Admin\RadiusController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\WidthController;
use Illuminate\Support\Facades\Route;

Route::group([ 'middleware' => ['isAdmin', 'auth'],'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/dashboard', DashboardController::class)->name('index');

    // Posts
    Route::group(['prefix' => 'posts', 'as' => 'posts.'], function() {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/create', [PostController::class, 'create'])->name('create');
        Route::post('/', [PostController::class, 'store'])->name('store');
        Route::get('{post}/edit', [PostController::class, 'edit'])->name('edit');
        Route::post('{post}', [PostController::class, 'update'])->name('update');
        Route::delete('{post}', [PostController::class, 'destroy'])->name('destroy');
        Route::get('/writer', WriterPostController::class, )->name('writer');
    });

    Route::group(['prefix'=> 'users', 'as' => 'users.'], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
    });

    Route::group(['prefix'=> 'writers', 'as' => 'writers.'], function () {
        Route::get('/', [WriterController::class, 'index'])->name('index');
    });

    Route::group(['prefix'=> 'posts', 'as' => 'posts.'], function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/writer', WriterPostController::class)->name('writer');
    });

    //Tags
   Route::resource('tags', TagController::class);

    //Vehicle
    Route::resource('vehicles', VehicleController::class);

    //Brand
    Route::resource('brands', BrandController::class);

    //Width
    Route::resource('widths', WidthController::class);

    //Radius
    Route::resource('radii', RadiusController::class);


});
