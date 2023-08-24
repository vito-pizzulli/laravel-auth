<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>"required|unique:projects|min:3|max:255",
            'description'=>"required|min:3",
            'link'=>"url:https",
            'creation_date'=>"required|date",
            'image'=>"required|image"
        ]);

        $img_path = Storage::put('uploads/posts', $request['image']);
        $data['image'] = $img_path;
        $data['slug'] = Str::of($data['title'])->slug('-');
        $newProject = Project::create($data);
        $newProject->slug = Str::of("$newProject->id " . $data['title'])->slug('-');
        return redirect()->route('admin.projects.index')->with('createSuccess', 'Project successfully added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            "title" => ["required", "min:3", "max:255", Rule::unique('projects')->ignore($project->id)],
            'description'=>"required|min:3",
            'link'=>"url:https",
            'creation_date'=>"required|date",
            'image'=>"required|image"
        ]);

        Storage::delete($post->image);
        $img_path = Storage::put('uploads/posts', $request['image']);
        $data['image'] = $img_path;
        $project->slug = Str::of("$project->id " . $data['title'])->slug('-');
        $project->update($data);
        return redirect()->route('admin.projects.show', compact('project'))->with('editSuccess', 'Project successfully edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('destroySuccess', 'Project successfully moved to the Recycle Bin!');
    }

    public function trashed()
    {
        $projects = Project::onlyTrashed()->paginate(10);
        return view('admin.projects.trashed', compact('projects'));
    }
}
