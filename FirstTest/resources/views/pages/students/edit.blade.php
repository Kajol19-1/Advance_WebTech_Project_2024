@extends('layouts.app')
@section('content')

<form action ="{{route('student.edit')}}" class="col-md-6" method="post">

    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$student->id}}">

    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{$student->name}}" class = "form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group">
        <span>ID</span>
        <input type="text" name="s_id" value="{{$student->s_id}}" class = "form-control">
        @error('id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group">
        <span>Date of Birth</span>
        <input type="date" name="dob" value="{{$student->dob}}" class = "form-control">
        @error('dob')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{$student->email}}" class = "form-control">
    </div>


    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{$student->phone}}" class = "form-control">
        @error('phone')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <input type ="submit" class="btn btn-success" value="Add">

</form>
@endsection