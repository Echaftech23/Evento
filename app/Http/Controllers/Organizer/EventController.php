<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Establishment;
use App\Models\Organizer;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $singleEvent = Event::latest()->first();

        $events = Event::where('id', '!=', $singleEvent->id)->get();

        return view('home.index', compact('singleEvent', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Event::class);

        $categories = Category::latest()->get();
        $cities = City::latest()->get();

        return view('home.event-create', compact('categories', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {

        $data = $request->validated();

        $organizer = Auth::user()->organizer;
        $organizer->events()->create($data);

        return redirect()->route('home.index')->with('success', 'Event created Successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('home.event-details', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $this->authorize('update', [$event]);

        $categories = Category::latest()->get();
        $cities = City::latest()->get();

        return view('home.event-edit', compact('categories', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->update($request->validated());
        return redirect()->route('home.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $this->authorize('delete', [$event]);

        $event->delete();

        return redirect()->route('home.index')->with('success', 'Event deleted successfully');
    }
}
