@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Projects List</h1>
    <a class="btn btn-sm btn-success mb-3" href="{{route('admin.projects.create')}}">Add New Project</a>
    @if (session('createSuccess'))
        <div class="alert alert-success">
            {{ session('createSuccess') }}
        </div>
    @endif
    @if (session('destroySuccess'))
        <div class="alert alert-success">
            {{ session('destroySuccess') }}
        </div>
    @endif
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">GitHub Page Link</th>
                <th scope="col">Date Of Creation</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row"> {{ $project->id }} </th>
                    <td> {{ $project->title }} </td>
                    <td> {{ $project->link }} </td>
                    <td> {{ $project->creation_date }} </td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{route('admin.projects.show', $project->id)}}">View</a>
                        <a class="btn btn-sm btn-warning" href="{{route('admin.projects.edit', $project->id)}}">Edit</a>
                        <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project ) }}" method="POST">
                            @csrf
                            @method('DELETE')
    
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $projects->links() }}
</div>
@endsection