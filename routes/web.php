<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pages\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require 'admin.php';

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
    Route::get('/{post}', [PostsController::class, 'show'])->name('show');
});

Route::group(['prefix' => 'brands', 'as' => 'brands.'], function () {
    Route::get('/', [BrandController::class, 'index'])->name('index');
    Route::get('/{brand}', [BrandController::class, 'show'])->name('show');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
