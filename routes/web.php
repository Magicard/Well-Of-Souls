<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

//    Route::get('/posts', [\App\Http\Controllers\PostController::class,'index']);
//    Route::post('/posts', [\App\Http\Controllers\PostController::class,'store']);

    // See here for more info on the auto-generated routes: https://laravel.com/docs/8.x/controllers#resource-controllers
    Route::resource('posts', \App\Http\Controllers\PostController::class);
    Route::resource('pat', \App\Http\Controllers\PatController::class);

    Route::post('/upload', [\App\Http\Controllers\ImageController::class, 'imageUpload'])->name('name');
    Route::get('/upload', [\App\Http\Controllers\ImageController::class, 'imageUpload']);

    Route::get('/u/{user}', [\App\Http\Controllers\UserController::class, 'showProfile'])->name('user');
    Route::get('/u/{user}/{post}', [\App\Http\Controllers\UserController::class, 'showPost'])->name('post');

});


