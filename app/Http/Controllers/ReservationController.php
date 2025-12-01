<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::paginate(10);
        if (request()->routeIs('reservation.admin')) {
            return view('reservation.admin', [
                'reservations' => $reservations
            ]);    
        } else {
            return view('reservation.client', [
                'reservations' => $reservations
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservation = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'date_of_entry' => 'required',
            'date_of_exit' => 'required'
        ]);

        $reservation['user_id'] = Auth::id();
        
        Reservation::create($reservation);

        return redirect()->route('reservation.client');
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
    public function update(Request $request, Reservation $reservation)
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
