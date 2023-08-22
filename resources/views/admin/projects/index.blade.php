@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Projects List</h1>
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Link</th>
                <th scope="col">Date of creation</th>
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
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $projects->links() }}
</div>
@endsection