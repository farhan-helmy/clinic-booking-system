<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardBooking extends Controller
{
    public function index()
    {
        $data = User::find(Auth::user()->id);
        //dd($data);
        return view('dashboard.index', compact('data'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }
}
