<?php

namespace App\Http\Controllers;

use App\Constant\Constant;
use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{


    public function index()
    {
        $abouts = About::paginate(10);
        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {

         $aboutTypes = Constant::$aboutTypes;
//         dd($aboutTypes);
        return view('admin.about.create',compact('aboutTypes'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [ 'title' => 'required',  'description' => 'required', 'type' => 'unique:abouts|required']);
        $about = new About();
        $about->title = $request->title;
        $about->description = $request->description;
        $about->type = $request->type;
        if($file=$request->file('image')){
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/about/'.$filename));
            if($path){
                $file->storeAs('gallery/about/',$filename,'public');
            }
            $about->image=$filename;
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
        $about->content = $request->description;
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
