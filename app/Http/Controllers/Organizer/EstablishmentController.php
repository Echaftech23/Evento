<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Establishment;
use App\Http\Requests\StoreEstablishmentRequest;
use App\Http\Requests\UpdateEstablishmentRequest;
use App\Models\Organizer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreEstablishmentRequest $request)
    {
        DB::transaction(function () use ($request) {
            $establishment = Establishment::create($request->validated());

            Organizer::create(['user_id' => Auth::id(), 'establishment_id' => $establishment->id]);

            $user = Auth::user();
            if (!$user->roles()->where('id', 2)->exists()) {
                $user->roles()->attach(2);
            }
        });



        return redirect()->route('home.index')->with('success', 'Establishment and Organizer created successfully.');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEstablishmentRequest $request, Establishment $establishment)
    {
        $establishment->update($request->validated());

        return redirect()->route('home.index')->with('success', 'Establishment Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Establishment $establishment)
    {
        $establishment->delete();

        return redirect()->route('establishments')->with('success', 'Establishments deleted successfully');
    }
}
