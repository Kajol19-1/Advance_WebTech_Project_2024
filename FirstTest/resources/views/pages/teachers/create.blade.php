@extends('layouts.app')
@section('content')

<form action ="{{route('teacher.create')}}" class="col-md-6" method="post">

    {{csrf_field()}}

    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}" class = "form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{old('phone')}}" class = "form-control">
        @error('phone')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="password" value="{{old('password')}}" class = "form-control">
        @error('password')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

   

    <input type ="submit" class="btn btn-success" value="Add">

</form>
@endsection