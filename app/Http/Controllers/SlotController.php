<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slots = Slot::orderBy('start_time')->get();

        // This keeps the FIRST Slot object found for each unique day
        $dateSlots = $slots->unique(function ($slot) {
            // We parse the date to ensure uniqueness is based on the Day only (ignoring time)
            return Carbon::parse($slot->start_time)->format('Y-m-d');
        });

        return view('welcome', [
            'dateSlots' => $dateSlots
        ]);
    }

    public function search(Request $request)
    {
        $day = $request->day;
        $slots = Slot::whereDate('start_time', $day)->get();
        return view('components.searchTable', [
            'slots' => $slots
        ]);
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
        //
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
