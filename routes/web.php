<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Organizer\EstablishmentController;
use App\Http\Controllers\Organizer\EventController;
use App\Http\Controllers\Admin\EventController as EventRequestController;
use App\Http\Controllers\Organizer\OrganizerController;
use App\Http\Controllers\Organizer\ReservationController as OrganizerReservationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ReservationController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::resource('home', HomeController::class);
Route::get('/home/show/{event}', [HomeController::class, 'show'])->name('home.show');
Route::get('/search-events', [HomeController::class, 'searchEvents'])->name('search.events');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('cities', CityController::class);
    Route::resource('eventsRequest', EventRequestController::class);
    Route::patch('eventsRequest/{event}/reject', [EventRequestController::class, 'reject'])->name('eventsRequest.reject');
    Route::patch('eventsRequest/{event}/accept', [EventRequestController::class, 'accept'])->name('eventsRequest.accept');
});

Route::middleware(['auth', 'is_organizer'])->group(function () {
    Route::resource('events', EventController::class);
    Route::resource('organizers', OrganizerController::class);
    Route::resource('reservations', OrganizerReservationController::class);
});

Route::middleware('auth')->group(function () {
    Route::resource('establishments', EstablishmentController::class);
    Route::resource('events', EventController::class)->except(['show']);
    Route::resource('reservationRequest', ReservationController::class);
});



require __DIR__ . '/auth.php';
