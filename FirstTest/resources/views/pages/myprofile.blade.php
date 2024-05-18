@extends('layouts.app')
@section('content')

    <h1> Name: {{$name}} </h1>
    <h3> ID: {{$id}} </h3>
    <h3> DOB: {{$dob}} </h3>

    @foreach($names as $n)
    <tr><td class="border"> {{$n}} </td></tr>
    @endforeach

@endsection