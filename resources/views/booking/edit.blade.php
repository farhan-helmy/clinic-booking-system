@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card text-center">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card-header">
            <h1>Booking here</h1>
        </div>
        <div class="card-body">
            <form class="row g-4 needs-validation" method="POST" action="{{ route('booking.update',$booking->id) }}" novalidate>
                @csrf
                @method('PUT')
                <div class="col-md-4 mx-auto">
                    <label class="control-label" for="date">Date</label>
                    <input class="date form-control" placeholder="MM/DD/YYY" type="text" name="booking_date" value="{{ $booking->booking_date }}" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                    <label for="validationTooltip03" class="form-label">Time</label>
                    <input type="text" class="timepicker form-control" name="booking_time" value="{{ $booking->booking_time }}" required>
                    <label for="validationTooltip04" class="form-label">Disease</label>
                    <select class="form-select" id="validationTooltip04" name="disease" required>
                        <option selected disabled value="{{ $booking->booking_disease }}">Choose...</option>
                        <option value="cakid gigi">Cakid gigi</option>
                    </select>
                    <div class="invalid-tooltip">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection