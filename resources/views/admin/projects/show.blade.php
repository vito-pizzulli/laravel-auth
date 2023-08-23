@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('editSuccess'))
        <div class="alert alert-success">
            {{ session('editSuccess') }}
        </div>
    @endif
    <div class="card mb-3">
        <img src="{{ $project->image_url }}" class="card-img-top" alt=" {{ $project->title }} ">
        <div class="card-body">
            <h5 class="card-title">Title: {{ $project->title }} </h5>
            <p class="card-text">Description: {{ $project->description }} </p>
            <p class="card-text">GitHub Page Link: {{ $project->link }} </p>
            <p class="card-text">Date Of Creation: {{ $project->creation_date }} </p>
        </div>
    </div>
    <a class="btn btn-warning" href="{{route('admin.projects.edit', $project->id)}}">Edit Project</a>
    <a class="btn btn-secondary" href="{{ url('/projects') }}">Return to Projects List</a>
</div>
@endsection