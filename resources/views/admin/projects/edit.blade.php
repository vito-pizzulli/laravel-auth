@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit of "{{ $project->title }}"</h1>
    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old( 'title' , $project->title) }}">
        </div>
        @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old( 'description' , $project->description) }}</textarea>
        </div>
        @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="link" class="form-label">GitHub Page Link:</label>
            <input type="text" class="form-control" id="link" name="link" value="{{ old( 'link' , $project->link) }}">
        </div>
        @error('link')
                    <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="creation_date" class="form-label">Date Of Creation:</label>
            <input type="date" class="form-control" id="creation_date" name="creation_date" value="{{ old( 'creation_date' , $project->creation_date) }}">
        </div>
        @error('creation_date')
                    <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="image_url" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="image_url" name="image_url" value="{{ old( 'image_url' , $project->image_url) }}">
            <div id="imageHelp" class="form-text">A preview image for your project.</div>
        </div>
        @error('image_url')
                    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <button type="submit" class="btn btn-success">Confirm</button>
        <button type="reset" class="btn btn-warning">Reset All Fields</button>
        <a class="btn btn-primary" href="{{route('admin.projects.show', $project->id)}}">View Project</a>
        <a class="btn btn-secondary" href="{{ url('/projects') }}">Return to Projects List</a>
        <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project ) }}" method="POST">
            @csrf
            @method('DELETE')
    
            <button type="submit" class="btn btn-danger">Delete Project</button>
        </form>
    </form>
</div>
@endsection