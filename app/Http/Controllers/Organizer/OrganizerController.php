<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Organizer;
use App\Http\Requests\UpdateOrganizerRequest;
use App\Models\Event;
use App\Models\Reservation;

class OrganizerController extends Controller
{


    public function statistics()
    {

        $events = Event::with(['reservations' => function ($query) {
            $query->where('status', '1');
        }])
            ->where('organizer_id', auth()->id())
            ->get();

        $statisticsData = [
            'eventsCreated' => $events->count(),
            'totalBookings' => $events->flatMap->reservations->count(),
            'pendingReservations' => Reservation::whereHas('event', function ($query) {
                $query->where('organizer_id', auth()->id());
            })->where('status', '0')->count(),
        ];

        return view('organizer.reservations.statistics', compact('statisticsData', 'events'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Organizer $organizer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organizer $organizer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrganizerRequest $request, Organizer $organizer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organizer $organizer)
    {
        //
    }
}
