<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(){
        $productlists=Product::paginate(10);
        return view('admin.product.product',compact('productlists'));
    }

    public function create()
    {
        $categories=Category::all();
        return view('admin.product.addProduct',compact('categories'));
    }
    public function store(ProductRequest $productRequest){

        $categories = Category::select('id', 'name as text', 'slug')
            ->with(['children' => function ($query) {
                $query->select('id', 'name as text', 'slug', 'parent_id');
            }])
            ->whereNull('parent_id')
            ->get();

        $input=$productRequest->all();
        $input['user_id']=Auth::id();
        $input['slug'] = Str::slug($productRequest->title);
        if($file=$productRequest->file('coverImage')){
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/product/'.$filename));
            if($path){
                $file->storeAs('gallery/product/',$filename,'public');
            }

            $input['coverImage']=$filename;
        }
        Product::create($input);
        return redirect(route('product.index'));
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'));
    }

    public function show(Product $product){
        return view('admin.product.detailsProduct',compact('product', 'categories'));
    }


    public function edit($id){
        $product=Product::find($id);
         $categories=Category::all();
        return view('admin.product.updateProduct',compact('product','categories'));
    }
    public function update(Request $productRequest,Product $product){
        $productRequest->validate(['title'=>'required','description'=>'required']);
        $input=$productRequest->all();
        $input['slug'] = Str::slug($productRequest->title);

        if($file=$productRequest->file('coverImage')){
            $this->deleteoldimage($product);
            $filename=$file->getClientOriginalName();
            $path= Image::make($file->getRealPath());
            $path->fit(600,400);
            $path->save(storage_path('app/public/product/'.$filename));
            $input['coverImage']=$filename;
            if($path){
                $file->storeAs('gallery/product/',$filename,'public');
            }
        }

        $product->update($input);
        return redirect(route('product.index'));
    }


    protected function deleteoldimage($file){
        if($path=$file->path){
            Storage::delete('public/product/'.$path);
            Storage::delete('gallery/product/'.$path);
        }
    }



}
