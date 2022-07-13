<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(10);
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 'name' => 'required',
         'post_of' => 'required',
          'description' => 'required', 
          'image' => 'required' ]);
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->post_of = $request->post_of;
        $testimonial->description = $request->description;
        $testimonial->user_id = Auth::user()->id;
        if($file=$request->file('image')){
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/testimonial/'.$filename));
            if($path){
                $file->storeAs('gallery/testimonial/',$filename,'public');
            }
            $testimonial->image=$filename;
        }

        $testimonial->save();
        return redirect('/admin/testimonial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonial.show', compact('testimonial'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $this->validate($request,[ 'name' => 'required', 'post_of' => 'required', 'description' => 'required', 'image' => 'required' ]);
        $testimonial->name = $request->name;
        $testimonial->post_of = $request->post_of;
        $testimonial->description = $request->description;
        
        if($file=$request->file('image')){
            $this->deleteoldimage($testimonial);
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/testimonial/'.$filename));
            if($path){
                $file->storeAs('gallery/testimonial/',$filename,'public');
            }
            $testimonial->image=$filename;
        }
        $testimonial->save();
        return redirect('/admin/testimonial');
    }

    protected function deleteoldimage($file){
        if($path=$file->image){
            Storage::delete('public/testimonial/'.$path);
            Storage::delete('gallery/testimonial/'.$path);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect('/admin/testimonial');
    }
}
