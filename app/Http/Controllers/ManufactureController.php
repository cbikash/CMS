<?php

namespace App\Http\Controllers;

use App\Models\Manufacture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Http\Requests\ManufactureRequest;

class ManufactureController extends Controller
{
   
    public function index()
    {
        $manufactures=Manufacture::paginate(20);
        
        return view('admin.manufacture.index',compact('manufactures'));
    }

    
    public function create()
    {
        return view('admin.manufacture.create');
    }

    
    public function store(ManufactureRequest $request)
    {
        $input = $request->all();
        $input['user_id']=Auth::id();
        $input['slug'] = Str::slug($request->title);
        if($file=$request->file('image')){
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/manufacture/'.$filename));
            if($path){
                $file->storeAs('gallery/manufacture/',$filename,'public');
            }

            $input['image']=$filename;
        }
        Manufacture::create($input);
        return redirect(route('manufacture.index'));
    }

    public function show(Manufacture $manufacture)
    {
        return view('admin.manufacture.show',compact('manufacture'));
    }

 
    public function edit(Manufacture $manufacture)
    {
        return view('admin.manufacture.update',\compact('manufacture'));
    }

  
    public function update(Request $request, Manufacture $manufacture)
    {

         $request->validate(['title'=>'required','description'=>'required']);
        $input=$request->all();
        $input['slug'] = Str::slug($request->title);

        if($file=$request->file('image')){
            $this->deleteoldimage($manufacture);
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/manufacture/'.$filename));
            $input['image']=$filename;
            if($path){
                $file->storeAs('gallery/manufacture/',$filename,'public');
            }
        }
        $manufacture->update($input);
        return redirect(route('manufacture.index'));
    }

      protected function deleteoldimage($file){
        if($path=$file->path){
            Storage::delete('public/manufacture/'.$path);
            Storage::delete('gallery/manufacture/'.$path);
        }
    }

   
    public function destroy(Manufacture $manufacture)
    {
        $manufacture->delete();
        return \redirect()->back();
    }
}
