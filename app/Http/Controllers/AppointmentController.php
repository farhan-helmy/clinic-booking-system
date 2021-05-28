<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('appointment.index');
    }

    public function data()
    {
        $booking = Booking::with('users')->select('bookings.*');

        return Datatables::of($booking)->make(true);
    }
}
