<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $singleEvent = Event::where('status', '1')
            ->where('title',  'Developer Conference 2024')
            ->with(['city', 'category'])
            ->latest()
            ->first();

        $events = Event::where('id', '!=', $singleEvent->id)
            ->where('status', '=', '1')
            ->get();

        $timerData = $singleEvent ? $this->timer($singleEvent) : [];

        return view('home.index', compact('singleEvent', 'events', 'timerData'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {

        $timerData = $event ? $this->timer($event) : [];


        $events = Event::where('id', '!=', $event->id)
            ->where('status', '=', '1')
            ->get();

        return view('home.event-details', compact('event', 'events', 'timerData'));
    }


    public function searchEvents(Request $request)
    {
        $query = $request->input('query');
        $events = Event::where('status', 1)
        ->where('title', 'like', "%$query%")
        ->pluck('title');

        return response()->json(['events' => $events]);
    }


    public function timer(Event $event)
    {
        $startDate = \Carbon\Carbon::parse($event->startDate);
        $endDate = \Carbon\Carbon::parse($event->endDate);

        $formattedStartDate = $startDate->format('F');
        $formattedDayStart = $startDate->format('d');
        $formattedYearStart = $startDate->format('Y');

        $formattedDayEnd = $endDate->format('d');
        $formattedEndDateTimer = $endDate->format('F j, Y');

        return compact('formattedStartDate', 'formattedDayStart', 'formattedYearStart', 'formattedDayEnd', 'formattedEndDateTimer');
    }
}
