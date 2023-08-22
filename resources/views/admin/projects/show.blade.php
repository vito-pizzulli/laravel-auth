@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-3">
        <img src="{{ $project->image_url }}" class="card-img-top" alt=" {{ $project->title }} ">
        <div class="card-body">
            <h5 class="card-title">Title: {{ $project->title }} </h5>
            <p class="card-text">Description: {{ $project->description }} </p>
            <p class="card-text">GitHub page link: {{ $project->link }} </p>
            <p class="card-text">Date of creation: {{ $project->creation_date }} </p>
        </div>
    </div>
</div>
@endsection