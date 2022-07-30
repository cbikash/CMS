<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Message;
use App\Models\Enquiry;
use App\Models\Manufacture;
use App\Models\About;
use App\Models\Service;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product=Product::all()->count();
        $category=Category::all()->count();
        $message=Message::all()->count();
        $enquiry=Enquiry::all()->count();
        $manufacture=Manufacture::all()->count();
        $about=About::all()->count();
        $service=Service::all()->count();
        return view('admin.home.home',compact('product','category','message','enquiry','manufacture','about','service'));
    }



    public function changePassword(Requet $request){
        
        
    }
}
