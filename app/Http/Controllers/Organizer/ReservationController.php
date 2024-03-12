<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizer = Auth::user()->organizer;

        $reservations = $organizer->events()
            ->with(['reservations' => function ($query) {
                $query->with('user');
            }])
            ->get()
            ->pluck('reservations')
            ->flatten()
            ->sortByDesc('created_at');

        return view('organizer.reservations.index', compact('reservations'));
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
     * Update the specified resource in storage.
     */
    public function update(Reservation $reservation)
    {
        // dd($reservation);
        $reservation->status = '1';
        $reservation->event->decrement('capacity');
        $reservation->save();

        return redirect()->route('reservationRequest.index')->with('success', 'Reservation accepted successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {

        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reservation rejected successfully.');
    }
}
