<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable|string',
            'project_url' => 'nullable|string|max:255',
            'github_url' => 'nullable|string|max:255',
            'play_store_url' => 'nullable|string|max:255',
            'app_store_url' => 'nullable|string|max:255',
            'tags' => 'nullable|string', // We will accept a comma-separated string from the frontend
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,icon,svg|max:2048',
        ]);

        if($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        // Process tags into an array
        $tagsArray = [];
        if (!empty($validated['tags'])) {
            $tagsArray = array_map('trim', explode(',', $validated['tags']));
        }

        Project::create([
            'name' => $validated['name'],
            'description' => $validated['description'] ?? null,
            'image' => $validated['image'] ?? null,
            'tags' => $tagsArray,
            'project_url' => $validated['project_url'] ?? null,
            'github_url' => $validated['github_url'] ?? null,
            'play_store_url' => $validated['play_store_url'] ?? null,
            'app_store_url' => $validated['app_store_url'] ?? null,
        ]);

        return redirect()->route('project.index')->with('success-s', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Project $project)
    {
        $projectSingle = Project::find($request->id);
        return view('project.show', compact('projectSingle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable|string',
            'project_url' => 'nullable|string|max:255',
            'github_url' => 'nullable|string|max:255',
            'play_store_url' => 'nullable|string|max:255',
            'app_store_url' => 'nullable|string|max:255',
            'tags' => 'nullable|string', // Comma-separated string
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,icon,svg|max:2048',
        ]);

        $imagepath = $project->image;
        if ($request->hasFile('image')) {
            if ($imagepath && Storage::exists($imagepath)) {
                Storage::delete($imagepath);
            }
            $imagepath = $request->file('image')->store('projects', 'public');
        }

        $tagsArray = [];
        if (!empty($validated['tags'])) {
            $tagsArray = array_map('trim', explode(',', $validated['tags']));
        }

        $project->update([
            'name' => $validated['name'],
            'description' => $validated['description'] ?? null,
            'image' => $imagepath,
            'tags' => $tagsArray,
            'project_url' => $validated['project_url'] ?? null,
            'github_url' => $validated['github_url'] ?? null,
            'play_store_url' => $validated['play_store_url'] ?? null,
            'app_store_url' => $validated['app_store_url'] ?? null,
        ]);

        return redirect()->route('project.index')->with('success-u', 'Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->image && Storage::exists($project->image)) {
            Storage::delete($project->image);
        }
        $project->delete();
        return redirect()->route('project.index')->with('danger-d', 'Project deleted successfully!');
    }
}
