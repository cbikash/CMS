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
        return view('admin.about.create');
    }

  
    public function store(Request $request)
    {
        $this->validate($request, [ 'title' => 'required', 'content' => 'required' ]);
        $about = new About();
        $about->title = $request->title;
        $about->content = $request->content;
        $about->feature = $request->feature;
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
        $about->feature = $request->feature;
        $about->save();
        return redirect(route('about.index'));
    }

    
    public function destroy(About $about)
    {
        $about->delete();
        return redirect(route('about.index'));
    }
}
