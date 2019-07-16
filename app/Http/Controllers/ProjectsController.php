<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Mail\ProjectCreated;
class ProjectsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index()
  {
    $projects = auth()->user()->projects;
    return view('projects.index',['projects' => $projects]);
  }

  public function create()
  {
    return view('projects.create');
  }

  public function store()
  {
    $attribute = $this->validateProject();
    $attribute['owner_id'] = auth()->id();
    Project::create($attribute);

    // \Mail::to('hassanshahzadaheer@gmail.com')->send(
    //   new ProjectCreated($project)
    // );

    return redirect('/projects');
  }

  public function show(Project $project)
  {
    $this->authorize('update',$project);
    // if($project->owner_id !== auth()->id()){
    //   abort(403);
    // }
    return view('projects.show',['projects' => $project]);
  }

  public function edit(Project $project)
  {

    return view('projects.edit',['projects' => $project]);
  }

  public function update(Project $project)
  {
    
    $project->update($this->validateProject());
    return  redirect('/projects');
  }

  public function destroy(Project $project )
  {

     $project->delete();
     return  redirect('/projects');

  }
  public function validateProject()
  {
    return $attribute = request()->validate([
          'title' => ['required','min:3'],
          'description' => ['required','min:3']
      ]);
  }
}
