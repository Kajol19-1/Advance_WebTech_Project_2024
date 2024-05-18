@extends('layouts.app')
@section('content')

<table class="table table-borded">

<tr>
    <th>Name</th>
    <th>ID</th>
    <th>DOB</th>
    <th></th>
</tr>

@foreach($students as $student)
<tr>
    <td>{{$student->name}}</td>
    <td>{{$student->id}}</td>
    <td>{{$student->dob}}</td>
    <td><a href="/student/edit/{{$student->id}}/{{$student->name}}">Edit</a></td>
    
</tr>
@endforeach
</table>
@endsection