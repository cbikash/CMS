<?php

namespace App\Http\Controllers;

use App\Constant\Constant;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Constant::$TYPE_SLIDER;

        $sliders = Slider::where('type','=', $type)->get();
        return view('admin.slider.index', compact('sliders'));
    }
    public function indexPlace(){
        $type = Constant::$TYPE_PLACE;
        $sliders = Slider::where('type','=', $type)->get();
        DB::table('sliders')
            ->where('type', '=', $type)
            ->get();
        return view('admin.places.index', compact('sliders'));
    }
    public function createPlace(){

        return view('admin.places.create');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 'description'   => 'required',
                                    'image'         => 'required',
                                    'type' => 'required'
            ]);
        $slider = new Slider;
        $slider->description = $request->description;
        if($file=$request->file('image')){
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(400,800);
            $path->save(storage_path('app/public/slider/'.$filename));
            if($path){
                $file->storeAs('gallery/slider/',$filename,'public');
            }
            $slider->image=$filename;
        }

        $slider->user_id = Auth::user()->id;
        $slider->type = $request->type;
        $slider->save();
        $route = route('slider.index');
        if($request->type == '202'){
            $route = route('places');
        }

        return redirect($route);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect('/admin/slider');
    }
}
