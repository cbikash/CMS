<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\About;
use App\Models\Service;
use App\Http\Requests\MessageRequest;
use App\Models\Message;
use App\Models\Enquiry;

class FrontendController extends Controller
{
    public function index(){
        $products=\App\Models\Product::all()->sortByDesc('created_at')->take(3);
        $abouthome= About::where('home','1')->get();
        
        return view('frontend.home.index',compact('products','abouthome'));
    }

    public function about(){
        $aboutsFeature=\App\Models\About::where('feature','1')->get();
        $aboutsNormal=\App\Models\About::where('feature','0')->where('home','0')->get();
        return view('frontend.home.about',compact('aboutsFeature','aboutsNormal'));
    }

    public function contact(){
        
        return view('frontend.home.contact');
    }


    public function storemessage(MessageRequest $request){
        Message::create($request->all());
        return (redirect(route('front.enquiry')))->with('messageafter',"Thank you for messaging us");
    }

    public function services(){
        $services=Service::all();
        return view('frontend.home.service',compact('services'));
    }


    public function products(){
        $categories=Category::all();
        $products=Product::paginate();
      return view('frontend.home.product',Compact('categories','products'));
    }



    public function enquiry(){
        return view('frontend.home.enquiry-us');
    }

    public function productsearch(Request $request){
        $title=$request->data;
         $products= Product::query()
                        ->where('title','LIKE','%'.$title.'%')
                        ->get();
         return response()->view('frontend.home.__partial.serachdata',compact('products'));
    }

    public function product(Product $product){

        $relatedproduct=Product::where('category_id',$product->category_id)->get()->take(4);
        
        $categories = Category::all();
        return view('frontend.home.__partial.productDetails',compact('relatedproduct','categories','product'));

    }

    public function productcategory(Category $category){
        $categories=Category::all();
        $activeCategory=$category;
        $products=Product::where('category_id',$category->id)->paginate(30);
        return view('frontend.home.__partial.productCategory',compact('products','categories','activeCategory'));

    }

    public function storeenquery(Request $request){
        Enquiry::create($request->all());
        return (redirect(route("front")))->with("message","Message");
    }
    
    


}
