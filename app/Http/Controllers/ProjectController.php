<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNewProject;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $projects = Project::where('user_id', auth()->id())
                  ->orderBy('created_at', 'desc')
                  ->take(10)->get();
        $tasks = Task::where('user_id', auth()->id())->get();

        return view('project.index',compact('projects','tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewProject $request)
    {
        //
        $project = new Project(request(['title','description']));
        auth()->user()->make($project);


        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        $tasks = $project->tasks;
        return view('project.show',compact('project','tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Project::find($id)->delete();
        return back();

    }
}
