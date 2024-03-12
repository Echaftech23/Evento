<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Models\Event;
use Barryvdh\DomPDF\Facade\Pdf;
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


    public function generatePdf(Reservation $reservation)
    {
        $data = ['example' => 'Hello, this is a PDF!'];

        $pdf = PDF::loadView('users.reservations.ticket', compact('reservation'));

        return $pdf->download('ticket.pdf');
    }
}
