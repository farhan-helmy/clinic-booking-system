@extends('layouts.app')

@section('content')

<div class="container mt-5">
  <div class="main-body">
    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
                <h4> {{ $user->name }}</h4>
                <p class="text-muted font-size-sm">Selangor</p>
                <p class="text-muted font-size-sm">User id: {{ $user->id }}</p>
                <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary">Edit Profile</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Full Name</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{ $user->name }}
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{ $user->email }}
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Profile Created</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{ $user->created_at }}
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Address</h6>
              </div>
              <div class="col-sm-9 text-secondary">
              {{ $user->address }}
              </div>
            </div>
          </div>
        </div>
        @if($booking !== NULL)
        <div class="row gutters-sm">
          <div class="col-sm-6 mb-3">
            <div class="card h-100 text-center">
              <div class="card-body">
                <h6 class="align-items-center text-center mb-3 px-5"><i class="material-icons text-info text-center mr-2">Upcoming Booking Date</i></h6>
                <h5>Date and time:</h5>
                <p>{{ $booking->booking_date }}</p>
                <h5>For:</h5>
                <p>{{ $booking->disease }}</p>
              </div>
            </div>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection