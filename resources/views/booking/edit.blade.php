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
                    <label class="control-label" for="date">Date and Time</label>
                    <input class="form-control" placeholder="MM/DD/YYY" type="datetime-local" name="booking_date" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                    <label for="validationTooltip04" class="form-label">Disease</label>
                    <select class="form-select" id="validationTooltip04" name="disease" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="Cosmetic Dentistry ">Cosmetic Dentistry</option>
                        <option value="General Dentistry">General Dentistry</option>
                        <option value="Preventive Dentistry">Preventive Dentistry </option>
                        <option value="Children's Dentistry">Children's Dentistry</option>
                        <option value="Extraction">Extraction</option>
                        <option value="Implant">Implant</option>
                        <option value="Braces">Braces</option>
                        <option value="Crown">Crown</option>
                        <option value="White Filling">White Filling</option>
                        <option value="Root Canal Treatment">Root Canal Treatment</option>
                        <option value="Scaling">Scaling</option>
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