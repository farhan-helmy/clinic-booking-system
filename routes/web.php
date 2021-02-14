<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardBooking;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {
    Route::resource('booking', BookingController::class);
    Route::resource('dashboard', DashboardBooking::class);
    Route::resource('profile', ProfileController::class);
});


require __DIR__ . '/auth.php';
