<?php

namespace App\Http\Controllers\PublicController;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Http\Resources\BlogResource;
use App\Http\Resources\TesimonialResource;
use App\Models\Blog;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

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

}
