<?php

namespace App\Http\Controllers\PublicController;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Http\Resources\BlogResource;
use App\Http\Resources\EventResource;
use App\Http\Resources\TesimonialResource;
use App\Http\Resources\CourseResource;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Product;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\ResourceResponse;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        About::all();

        return AboutResource::Collection(About::latest()->get());

    }


    /**
     * Display the specified resource.
     *
     * @param $type
     * @return AboutResource
     */
    public function show($type)
    {

        return new AboutResource(About::where( 'type','=',$type)->first());

    }

    public function blogList(){
       return BlogResource::collection(Blog::latest()->get());
    }

    public function singleBlog($id){
        return new BlogResource(Blog::where( 'id','=',$id)->first());
    }

    public function testimonialList(){
        return TesimonialResource::collection(Testimonial::latest()->get());
    }

    public function coursesList(){
        return CourseResource::collection(Product::latest()->get());
    }

    public function events(){

        return EventResource::collection(Event::latest()->limit(10)->get());
    }
}
