@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
  <h1 class="text-center ">Your Bookings</h1>
  <table class="table table-success table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Disease Name</th>
        <th scope="col">Date and time</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data->bookings as $bookings)
      <tr class="table-active">
        <th scope="row">{{ ++$i }}</th>
        <td>{{ $bookings->disease }}</td>
        <td>{{ $bookings->booking_date }}</td>
        <td>
          <form action="{{ route('booking.destroy',$bookings->id) }}" method="POST">
            <a class="btn btn-danger" href="{{ route('booking.edit',$bookings->id) }}">Edit Booking</a>
            <a class="btn btn-info" href="{{ route('booking.show',$bookings->id) }}">Show Booking</a>
            
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>

  </table>
</div>
@endsection