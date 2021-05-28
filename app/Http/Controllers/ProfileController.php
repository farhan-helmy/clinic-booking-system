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
        return view('profile.index', compact('booking', 'user'));
    }

    public function edit(User $user)
    {

        return view('profile.edit', compact('user'));

    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'address' => 'required'
        ]);
    
        $user->update($request->all());
    
        return redirect()->route('user.index')
                        ->with('success','User updated successfully');
    }
}


// select * from user a where user_id=1
// INNER JOIN booking b ON booking_id.a=id.b