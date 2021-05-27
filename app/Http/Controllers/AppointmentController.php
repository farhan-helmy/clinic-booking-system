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
        return Datatables::of(Booking::query())->make(true);
    }
}
