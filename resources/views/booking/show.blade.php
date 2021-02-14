@extends('layouts.app')

@section('content')
<div class="container mt-5 p-auto">
    <div class="card text-center bg-warning mb-3 p-5">
        <div class="card-header">
            <h1>Booking number #{{ $booking->id }}</h1>
        </div>
        <div class="card-body">
            <h5 class="card-title">Booking for <b> {{ $booking->disease }}</b> disease</h5>
            <p class="card-text"> <b>Booking date and time:</b> {{ $booking->booking_date }}</p>
            <p class="card-text"> <b>Booking created on:</b> {{ $booking->created_at }}</p>
            <a href="{{  route('dashboard.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>

</div>

@endsection