<?php

use App\Http\Controllers\AppointmentController;
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
Route::get('/dentist', function () {
    return view('dentist');
})->name('dentist');

Route::prefix('appointment')->name('appointment.')->group(function () {
    Route::get('', [AppointmentController::class, 'index'])->name('index');
    Route::get('data', [AppointmentController::class, 'data'])->name('data');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('booking', BookingController::class);
    Route::resource('dashboard', DashboardBooking::class);
    Route::resource('user', ProfileController::class);
});


require __DIR__ . '/auth.php';
