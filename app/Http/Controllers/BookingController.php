<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|integer',
            'room_id' => 'required|integer',
            'phone' => 'required|string|max:20',
            'checkin_date' => 'required|string|max:255',
            'checkout_date' => 'required|string|max:255',
            'total_adults' => 'required|integer',
            'total_children' => 'nullable|integer',
        ]);

        Booking::create($request->all());
        return redirect()->route('bookings.index')->with('Success', 'Booking created successfully.');
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'customer_id' => 'required|integer',
            'room_id' => 'required|integer',
            'phone' => 'required|string|max:20',
            'checkin_date' => 'required|string|max:255',
            'checkout_date' => 'required|string|max:255',
            'total_adults' => 'required|integer',
            'total_children' => 'nullable|integer',
        ]);

        $booking->update($request->all());
        return redirect()->route('bookings.index')->with('Success', 'Booking updated successfully.');
    }

    public function destroy(int $id)
    {
        Booking::where('id',$id)->delete();
        return redirect()->route('bookings.index')->with('Success', 'Booking deleted successfully.');
    }
}
