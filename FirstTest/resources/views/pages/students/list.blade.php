@extends('layouts.app')
@section('content')

<table class="table table-borded">

<tr>
    <th>ID</th>
    <th>S_ID</th>
    <th>Name</th>
    <th>DOB</th>
    <th>Email</th>
    <th>Phone</th>
    <th></th>
</tr>

@foreach($students as $student)


<tr>
    <td><a href="{{route('student.profile',['id'=>$student->id])}}">{{$student->id}}</a></td>
    <td>{{$student->s_id}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->dob}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->phone}}</td>
    <td><a href="/student/edit/{{$student->id}}/{{$student->name}}">Edit</a></td>
    <td><a href="/student/delete/{{$student->id}}/{{$student->name}}">Delete</a></td>
    
   
    
</tr>
@endforeach
</table>
@endsection