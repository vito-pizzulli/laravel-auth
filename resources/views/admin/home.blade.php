@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-5">Admin Panel</h1>
    <h2>Welcome, {{ $user->name }}!</h2>
    <h3>Your mail is: {{ $user->email }}.</h3>
</div>
@endsection