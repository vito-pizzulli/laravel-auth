@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('editSuccess'))
        <div class="alert alert-success">
            {{ session('editSuccess') }}
        </div>
    @endif
    <div class="card mb-3">
        <img src="{{ $project->image }}" class="card-img-top" alt=" {{ $project->title }} ">
        <div class="card-body">
            <h5 class="card-title">Title: {{ $project->title }} </h5>
            <p class="card-text">Description: {{ $project->description }} </p>
            <p class="card-text">GitHub Page Link: {{ $project->link }} </p>
            <p class="card-text">Date Of Creation: {{ $project->creation_date }} </p>
        </div>
    </div>

    <a class="btn btn-warning" href="{{route('admin.projects.edit', $project) }}">Edit Project</a>
    <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project ) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?')">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete Project</button>
    </form>
    <a class="btn btn-secondary" href="{{ url('/projects') }}">Return to Projects List</a>
</div>
@endsection