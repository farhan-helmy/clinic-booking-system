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
            <h1>Edit user here</h1>
        </div>
        <div class="card-body">
            <form class="row g-4 needs-validation" method="POST" action="{{ route('user.update',$user->id) }}" novalidate>
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$user->name}}" >
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{$user->email}}" >
                   
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input class="form-control" name="address" value="{{$user->address}}" >
                   
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>

@endsection