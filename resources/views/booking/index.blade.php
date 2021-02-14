@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card text-center">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Slot has been taken!.<br><br>
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
            <form class="row g-4 needs-validation" method="POST" action="{{ route('booking.store') }}" novalidate>
                @csrf
                <div class="col-md-4 mx-auto">
                    <label class="control-label" for="date">Date and Time</label>
                    <input class="form-control" placeholder="MM/DD/YYY" type="datetime-local" name="booking_date" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                    <label for="validationTooltip04" class="form-label">Disease</label>
                    <select class="form-select" id="validationTooltip04" name="disease" required>
                        <option selected disabled value="">Choose...</option>
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