<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Establishment;
use App\Models\Event;
use App\Models\Reservation;
use App\Policies\EstablishmentPolicy;
use App\Policies\EventPolicy;
use App\Policies\ReservationPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Event::class => EventPolicy::class,
        Establishment::class => EstablishmentPolicy::class,
        Reservation::class => ReservationPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
