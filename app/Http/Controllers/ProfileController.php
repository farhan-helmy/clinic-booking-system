<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() 
    {   
        $user = User::find(Auth::user()->id);
        $date = date('m-d');
        $booking = $user->bookings()->orderBy('booking_date', 'asc')->first();
        return view('profile.index', compact('booking','user'));
    }

}


