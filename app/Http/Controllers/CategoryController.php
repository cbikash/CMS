<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index(){
        $categories=Category::whereNull('parent_id')->paginate(10);
        return view('admin.category.index',compact('categories'));
    }
    public function create(){
        return view('admin.category.add');
    }

    public function store(Request $request){
        $this->validate($request, ['name'=>'required|unique:categories']);
        $request['slug']=Str::slug($request['name']);
        $request['user_id']= Auth::user()->id;
        $category = new Category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->user_id = $request->user_id;
        $category->save();
        return redirect('/admin/category');

    }

    public function subCategory(Request $request, Category $category)
    {
        $subCategories = Category::where('parent_id', '=', $category->id)->paginate(10);

        return view('admin.category.sub-category.index', compact('category', 'subCategories'));
    }

    public function subCategoryCreate(Request $request, Category $category)
    {
        return view('admin.category.sub-category.add', compact('category'));
    }

    public function subCategoryStore(Request $request, Category $category)
    {
        $this->validate($request, ['name'=>'required|unique:categories']);
        $request['slug']=Str::slug($request['name']);
        $request['user_id']= Auth::user()->id;
        $subCategory = new Category;
        $subCategory->name = $request->name;
        $subCategory->slug = $request->slug;
        $subCategory->user_id = $request->user_id;
        $subCategory->parent_id = $category->id;
        $subCategory->save();
        return redirect('/admin/category');

    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('admin.category.edit',compact('category'));
    }
    public function update(Request $request, Category $category){
        $this->validate($request, ['name'=>'required']);
        $request['slug']=Str::slug($request['name']);
        $request['user_id']=Auth::user()->id;

        $category->update($request->all());

        return redirect('/admin/category');


    }
    public function destroy(Category $category){
        $category->delete();
        return redirect(route('category.index'));

    }

}
