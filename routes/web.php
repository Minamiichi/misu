<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/about', [LandingPageController::class, 'about'])->name('about');
Route::get('/ppdb', [LandingPageController::class, 'ppdb'])->name('ppdb');

Route::get('/blog', [LandingPageController::class, 'blog'])->name('blog');
Route::get('/blog/details', [LandingPageController::class, 'details'])->name('details');

Route::middleware(['auth:sanctum', 'verified'])->name('dashboard.')->prefix('dashboard')->group(function (){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/admin', [DashboardController::class, 'admin'])->name('admin');

    Route::middleware(['admin'])->group(function (){
        Route::resource('ppdb', PpdbController::class);
        Route::resource('user', UserController::class)->only([
            'index', 'edit', 'update', 'destroy'
        ]);
    });
});
