@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-5">Admin Panel</h1>
    <h2>Welcome, {{ $user->name }}!</h2>
    <h3 class="mb-5">Your mail is: {{ $user->email }}.</h3>
    <a class="btn btn-success" href="{{ url('/projects') }}">
        Projects List
    </a>
</div>
@endsection