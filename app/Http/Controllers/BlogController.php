<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs= Blog::paginate(10);
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 'title' => 'required', 'content' => 'required', 'slug' => 'unique:blogs', 'image' => 'required' ]);
        $blog= new Blog;
        $blog->title=$request->title;
        $blog->content=$request->content;
        $blog->slug=Str::slug($request->title);
        if($file=$request->file('image')){
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/blog/'.$filename));
            if($path){
                $file->storeAs('gallery/blog/',$filename,'public');
            }
            $blog->image=$filename;
        }
        $blog->user_id = Auth::user()->id;
        $blog->save();
        return redirect('/admin/blog');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->validate($request, [ 'title' => 'required', 'content' => 'required', 'slug' => 'unique:blogs', 'image' => 'required' ]);
        $blog->title=$request->title;
        $blog->content=$request->content;
        $blog->slug=Str::slug($request->title);
        
        if($file=$request->file('image')){
            $this->deleteoldimage($blog);
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/blog/'.$filename));
            if($path){
                $file->storeAs('gallery/blog/',$filename,'public');
            }
            $blog->image=$filename;
        }
      
        $blog->save();
        return redirect('/admin/blog');
    }

    protected function deleteoldimage($file){
    if($path=$file->image){
        Storage::delete('public/blog/'.$path);
        Storage::delete('gallery/blog/'.$path);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $this->deleteoldimage($blog);
        $blog->delete();
        return redirect('/admin/blog');

    }
}
