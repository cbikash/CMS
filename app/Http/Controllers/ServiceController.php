<?php

namespace App\Http\Controllers;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{

    public function index(){
        $services=Service::paginate(10);
        return view('admin.service.index', compact('services'));
    }
    public function create(){
        return view('admin.service.addService');
    }

    public function store(ServiceRequest $serviceRequest){
        $input=$serviceRequest->all();
        $input['user_id']=Auth::id();
        if($file=$serviceRequest->file('coverImage')){
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/service/'.$filename));
            $input['coverImage']=$filename;
        }
        Service::create($input);
        return redirect(route('service.index'));

    }
    public function edit($id){
        $service=Service::find($id);
        return view('admin.service.updateService',compact('service'));
    }
    public function update(ServiceRequest $request,Service $service){
        $input=$request->all();
        if($file=$request->file('coverImage')){
            $this->deleteoldimage($service);
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/service/'.$filename));
            $input['coverImage']=$filename;
        }
        $service->update($input);
        return redirect(route('service.index'));

    }

    protected function deleteoldimage($file){
        if($path=$file->path){
            Storage::delete('public/service/'.$path);
        }
    }



    public function destroy(Service $service)
    {   $this->deleteoldimage($service);
        $service->delete();
        return redirect(route('service.index'));

    }
    public function show($id){
        $service = Service::find($id);
        return view('admin.service.show',compact('service'));
    }


}
