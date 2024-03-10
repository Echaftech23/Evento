<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $reservations = $user->reservations()->paginate(6);

        return view('users.reservations.index', compact('reservations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request)
    {
        $this->authorize('create', Reservation::class);

        $event = Event::find($request->event_id);
        
        $eventIsOpenForReservation = $event->capacity > 0 && $event->registerEndDate > now();
        $reservationStatus = $event->isAuto;

        if ($eventIsOpenForReservation) {

            if ($reservationStatus) {
                $event->decrement('capacity');
            }

            Reservation::create(array_merge($request->validated(), ['user_id' => Auth::id(), 'status' => $reservationStatus]));
        }

        return redirect()->route('home.index')->with('success', 'Reservation created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
