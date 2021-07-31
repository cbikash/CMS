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
use App\Models\User;
use App\Notifications\OrderNotification;
use App\Notifications\MessageNotification;


class FrontendController extends Controller
{
    public function index(){
        $products=\App\Models\Product::all()->sortByDesc('created_at')->take(4);
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
        $check=Message::create($request->all());
        if($check){
            User::find(1)->notify(new MessageNotification($check));
        }

        return (redirect(route('front.enquiry')))->with('messageafter',"Thank you for messaging us");
    }

    public function services(){
        $services=Service::all();
        return view('frontend.home.service',compact('services'));
    }
    
    public function service(Service $service){
        $services=Service::all()->take(10);
        return view('frontend.home.__partial.service',compact('service','services'));
    }


    public function products(Request $request){
        $filter = $request->input('sort');
        if(!empty($filter)){
            if($filter=='AscPrice'){
                 $products=Product::orderBy('price', 'ASC')->paginate(6);
            }
            if($filter=='DescPrice'){
                $products=Product::orderBy('price', 'DESC')->paginate(6);
            }
            if($filter=='AscName'){
                $products=Product::orderBy('title', 'ASC')->paginate(6);
            }
            if($filter=='descName'){
                $products=Product::orderBy('title', 'DESC')->paginate(6);
            }
        }else{
            $products=Product::paginate(6);
        }

        $categories=Category::all();
        
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

    public function productcategory(Category $category,Request $request){
        $categories=Category::all();
        $activeCategory=$category;
        $filter = $request->input('sort');
        if(!empty($filter)){
            if($filter=='AscPrice'){
                 $products=Product::where('category_id',$category->id)->orderBy('price', 'ASC')->paginate(6);
            }
            if($filter=='DescPrice'){
                $products=Product::where('category_id',$category->id)->orderBy('price', 'DESC')->paginate(6);
            }
            if($filter=='AscName'){
                $products=Product::where('category_id',$category->id)->orderBy('title', 'ASC')->paginate(6);
            }
            if($filter=='descName'){
                $products=Product::where('category_id',$category->id)->orderBy('title', 'DESC')->paginate(6);
            }
        }else{
            $products=Product::where('category_id',$category->id)->paginate(6);
        }

       // $products=Product::where('category_id',$category->id)->paginate(6);
        return view('frontend.home.__partial.productCategory',compact('products','categories','activeCategory'));

    }

    public function storeenquery(Request $request){

        $check=Enquiry::create($request->all());
        
         if($check){
           User::find(1)->notify(new OrderNotification($check));
          }

        return back()->with("message","Message");
    }
    
    public function manufactures(){
        $manufactures=\App\Models\Manufacture::paginate(1);
        return view('frontend.home.manufacture',compact('manufactures'));
    }

    public function manufacture(\App\Models\Manufacture $manufacture){
        
        $manufactures = \App\Models\Manufacture::all()->take(10);
        return view('frontend.home.__partial.manufacture.manufacture',compact('manufacture','manufactures'));
    }
}
