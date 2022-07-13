<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(10);
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 'title' => 'required|max:255',
        'description' => 'required|max:255',
        'slug' => 'unique:projects,slug', 
        'image' => 'required|mimes:jpeg,png,gif,bmp,webp', 
        'project_start_date' => 'required' ,
        'project_end_date' => 'required', 
        'project_status' => 'required',
        'project_type' => 'required'  ]);

        $project = new Project;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->slug = Str::slug($request->title);
        if($file=$request->file('image')){
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/project/'.$filename));
            if($path){
                $file->storeAs('gallery/project/',$filename,'public');
            }
            $project->image=$filename;
        }
        $project->project_start_date = $request->project_start_date;
        $project->project_end_date = $request->project_end_date;
        $project->project_status = $request->project_status;
        $project->project_type = $request->project_type;
        $project->location = $request->location;
        $project->project_value = $request->project_value;
        $project->project_owner = $request->project_owner;
        $project->project_url = $request->project_url;
        $project->user_id = Auth::user()->id;
        $project->save();
        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $this->validate($request, [ 'title' => 'required|max:255',
        'description' => 'required|max:255',
        'slug' => 'unique:projects,slug',
        'image' => 'required|mimes:jpeg,png,gif,bmp,webp',
        'project_start_date' => 'required' ,
        'project_end_date' => 'required',
        'project_status' => 'required',
        'project_type' => 'required' ]);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->slug = Str::slug($request->title);

        if($file=$request->file('image')){
            $this->deleteoldimage($project);
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/project/'.$filename));
            if($path){
                $file->storeAs('gallery/project/',$filename,'public');
            }
            $project->image=$filename;
        }
        $project->project_start_date = $request->project_start_date;
        $project->project_end_date = $request->project_end_date;
        $project->project_status = $request->project_status;
        $project->project_type = $request->project_type;
        $project->location = $request->location;
        $project->project_value = $request->project_value;
        $project->project_owner = $request->project_owner;
        $project->user_id = Auth::user()->id;
        $project->save();
        return redirect()->route('project.index');
        
    }
     protected function deleteoldimage($file){
        if($path=$file->image){
            Storage::delete('public/project/'.$path);
            Storage::delete('gallery/project/'.$path);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.project.index');
    }
}
