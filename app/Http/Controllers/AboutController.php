<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   
    public function index()
    {
        $abouts = About::paginate(10);
        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        $counth=About::where("home",'1')->count();
        return view('admin.about.create',compact('counth'));
    }

  
    public function store(Request $request)
    {
        $this->validate($request, [ 'title' => 'required', 'content' => 'required' ]);
        $about = new About();
        $about->title = $request->title;
        $about->content = $request->content;
        $about->content = $request->content;
        $about->home = $request->home;

        if($request->home == ""){
            $about->home = "0";
        }
         if($request->feature == ""){
            $about->feature = "0";
            
        }
             

        $about->save();
        return redirect(route('about.index'));
    }

  
    public function show(About $about)
    {
        return view('admin.about.show', compact('about'));
    }


    public function edit(About $about)
    {
        return view('admin.about.update', compact('about'));
    }

    
    public function update(Request $request, About $about)
    {
        
        $this->validate($request, [ 'title' => 'required', 'content' => 'required' ]);
        $about->title = $request->title;
        $about->content = $request->content;
        $about->home = $request->home;
        $about->feature = $request->feature;
         if($request->home == ""){
            $about->home = "0";
        }
        if($request->feature == ""){
            $about->feature = "0";
        }
        
        
       
        $about->save();
        return redirect(route('about.index'));
    }

    
    public function destroy(About $about)
    {
        $about->delete();
        return redirect(route('about.index'));
    }
}
