<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::paginate(10);
        return view('admin.image.index', compact('images'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.image.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = $request->file('file');

//        $imageName = time().'.'.$image->extension();
//        $image->move(public_path('images'),$imageName);
//
        if($file=$request->file('file')){
            $imageName = time().'.'.$image->extension();
            $path= \Intervention\Image\Facades\Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/images/'.$imageName));
            if($path){
                $file->storeAs('gallery/images/',$imageName,'public');
            }
            $input['name']=$imageName;
            $input['url'] = $imageName;

        }
        Image::create($input);
        return response()->json(['success'=>$imageName]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $this->deleteoldimage($image);
        $image->delete();
        return redirect(route('image.index'));
    }

    protected function deleteoldimage($file){
        if($path=$file->path){
            Storage::delete('public/product/'.$path);
            Storage::delete('gallery/product/'.$path);
        }
    }

}
