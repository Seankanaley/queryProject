<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{
	public function index()
	{
		$projects = \App\Project::all();

		// return $projects;

		return view('projects.index', ['projects' => $projects]);
	}

	public function create ()
	{
		return view('projects.create');
	}

		public function store()
	{
		$attributes = request()->validate([

			'title' => ['required', 'min:3'],
			'description' => ['required', 'max:255']

		]);

		Project::create($attributes);
		//Normal Long Validation passing attributes
		// Project::create(request(['title', 'description']));

		// Project::create([
		// 	'title' => request('title'),
		// 	'description' => request('description')
		// ]);

		// $project = new Project();

		// $project->title = request('title');
		// $project->description = request('description');

		// $project->save();

		return redirect('/projects');
	}

	public function show(Project $project)
	{
		return view('projects.show', compact('project'));
	}

	// public function show ()
	// {
	// 	$project = Project::findorFail($id);

	// 	return view('projects.show', compact('project'));
	// }

	public function edit(Project $project) // example.com/projects/1/edit
	{

		return view('projects.edit', compact('project'));
	}

	public function update(Project $project)
	{

		$project -> update(request(['title', 'description']));

		// $project->title = request('title');
		// $project->description = request('description');
		// $project->save();

		return redirect('/projects');
	}

	public function destroy(Project $project)
	{
		$project->delete();
		return redirect('/projects');
	}

}
