<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Organizer\EstablishmentController;
use App\Http\Controllers\Organizer\EventController;
use App\Http\Controllers\Organizer\OrganizerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EventController::class, 'index'])->name('home.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('cities', CityController::class);
});

Route::middleware(['auth', 'is_organizer'])->group(function () {
    Route::resource('events', EventController::class);
    Route::resource('organizers', OrganizerController::class);
});

Route::middleware('auth')->group(function () {
    Route::resource('establishments', EstablishmentController::class);
    Route::resource('events', EventController::class);
});



require __DIR__ . '/auth.php';
