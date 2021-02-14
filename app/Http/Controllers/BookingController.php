<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        return view('booking.index');
    }

    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'booking_date' => 'required|unique:bookings',
            'disease' => 'required'
        ]);


        $user_id = Auth::user()->id;
        $create = Booking::create($request->all());
        $create->users()->attach($user_id);

        return redirect()->route('dashboard.index')
            ->with('success', 'Booking Success!');
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'booking_date' => 'required',
            'disease' => 'required'
        ]);
    
        $booking->update($request->all());
    
        return redirect()->route('dashboard.index')
                        ->with('success','Booking updated successfully');
    }

    public function show(Booking $booking)
    {
        return view('booking.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        return view('booking.edit',compact('booking'));
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
    
        return redirect()->route('dashboard.index')
                        ->with('success','Product deleted successfully');
    }
}
