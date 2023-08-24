@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add a New Project</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="link" class="form-label">GitHub Page Link:</label>
            <input type="text" class="form-control" id="link" name="link">
        </div>
        @error('link')
                    <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="creation_date" class="form-label">Date Of Creation:</label>
            <input type="date" class="form-control" id="creation_date" name="creation_date">
        </div>
        @error('creation_date')
                    <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="text" class="form-control" id="image" name="image">
            <div id="imageHelp" class="form-text">A preview image for your project.</div>
        </div>
        @error('image_url')
                    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <button type="submit" class="btn btn-success">Confirm</button>
        <button type="reset" class="btn btn-warning">Reset All Fields</button>
        <a class="btn btn-secondary" href="{{ url('/projects') }}">Return to Projects List</a>
    </form>
</div>
@endsection