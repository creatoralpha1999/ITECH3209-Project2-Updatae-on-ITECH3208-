@extends('layout')
@section('main_content')
You have Successfully Logged In.
<br>

<h1>
    <center>My Profile ({{auth()->user()->name}})</center>
</h1>
<hr>
<img src="data:image/png;base64,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"
    alt="Trulli" width="300" height="250">
<a class="btn btn-primary" href="{{route('addAProperty')}}">Add a property</a>
<hr>
<div class="alert alert-success">
    Interested Customers
</div>
<table class="table">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Date</th>
        {{-- <th>Property</th> --}}
    </tr>
    @foreach($properties as $property)
    <tr>
        <th>{{$property->name}}</th>
        <th>{{$property->email}}</th>
        <th>{{$property->mobile}}</th>
        <th>{{$property->date}}</th>
        {{-- <th>{{$property->}}</th> --}}
    </tr>
    @endforeach
</table>
@endsection
