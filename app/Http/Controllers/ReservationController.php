<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::paginate(10);
        if (Auth::user()->isAdmin){
            return view('reservation.admin', [
                'reservations' => $reservations
            ]); 
        }
        return view('reservation.client');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
