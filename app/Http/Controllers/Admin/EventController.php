<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::paginate(9);

        return view('admin.events.index', compact( 'events'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {

        $event->delete();

        return redirect()->route('eventsRequest.index')->with('success', 'Event deleted successfully');
    }

    public function accept(Event $event)
    {
        $event->status = '1';
        $event->save();

        return redirect()->route('eventsRequest.index')->with('success', 'Event accepted successfully.');
    }

    public function reject(Event $event)
    {
        $event->status = '2';
        $event->save();

        return redirect()->route('eventsRequest.index')->with('success', 'Event rejected successfully.');
    }

}
