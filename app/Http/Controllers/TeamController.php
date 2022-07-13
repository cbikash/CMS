<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::paginate(10);
        return view('admin.team.index', compact('teams'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        ['name'=>'required|max:255',
         'email'=>'required|email|max:255',
         'image'=>'image|mimes:jpeg,png,bmp,gif, or svg',
         'post' => 'required',
         'description' => 'required',
         'phone' => 'required',
         'address' => 'required',
         'joined_at'  => 'required',
        ]);
        $team = new Team;
        $team->name = $request->name;
        $team->email = $request->email;
        $team->post = $request->post;
        $team->description = $request->description;
        $team->phone = $request->phone;
        $team->address = $request->address;
        $team->joined_at = $request->joined_at;
        $team->facebook = $request->facebook;
        $team->instagram = $request->instagram;
        $team->viber = $request->viber;
        $team->user_id = Auth::user()->id;

        if($file=$request->file('image')){
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/team/'.$filename));
            if($path){
                $file->storeAs('gallery/team/',$filename,'public');
            }
            $team->image=$filename;
        }

        $team->save();
        return redirect('admin/team');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('admin.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $this->validate($request,
        ['name'=>'required|max:255',
         'email'=>'required|email|max:255',
         'image'=>'image|mimes:jpeg,png,bmp,gif, or svg',
         'post' => 'required',
         'description' => 'required',
         'phone' => 'required',
         'address' => 'required',
         'joined_at'  => 'required',
        ]);
        $team->name = $request->name;
        $team->email = $request->email;
        $team->post = $request->post;
        $team->description = $request->description;
        $team->phone = $request->phone;
        $team->address = $request->address;
        $team->joined_at = $request->joined_at;

        if($file=$request->file('image')){
            $this->deleteoldimage($team);
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/team/'.$filename));
            $team->image=$filename;
            if($path){
                $file->storeAs('gallery/team/',$filename,'public');
            }
        }

        $team->save();
        return redirect('admin/team');
    }

      protected function deleteoldimage($file){
        if($path=$file->image){
            Storage::delete('public/team/'.$path);
            Storage::delete('gallery/team/'.$path);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect('admin/team');
    }
}
