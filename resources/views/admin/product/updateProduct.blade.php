@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-12 col-lg-12 col-xl-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('product.index') }} ">product</a></li>
                <li class="breadcrumb-item active " aria-current="page">Update Product</li>
            </ol>
        </nav>
        </div>
            <div class="col-md-12 col-space">
                <h3>Update Product</h3>
                <hr>
                {!! Form::open(['method'=>'PUT','action'=>['App\Http\Controllers\ProductController@update',$product],'files'=>true])!!}

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Product Name</label>
                        <input type="text" name="title" class="form-control" id="inputEmail4" value="{{$product->title}}" placeholder="Enter Product Name">
                        @error('title')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Price</label>
                        <input type="text" name="price" class="form-control" value="{{$product->price}}"  placeholder="Enter Price">
                        @error('price')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                   <div class="form-group col-md-6">
                    <label>Stock</label>
                    <select name="stock" class="form-control">
                        <option value="1" @if($product->stock == 1) Selected @endif>On Stock</option>
                        <option value="0" @if($product->stock == 0) Selected @endif>Out of Stock</option>
                    </select>
                     @error('stock')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                    <div class="form-group col-md-6">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" @if($product->category_id == $category->id) Selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Discount Amount</label>
                    <input type="text" name="discountAmount" value="{{ $product->discountAmount }}" class="form-control" placeholder="Enter Discount Amount">
                    @error('discountAmount')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                
                <div class="form-group col-md-6">
                    <label>Discount Status</label>
                    <select name="discountStatus" class="form-control">
                        <option value="1" @if($product->discountStatus == 1) Selected @endif>Active</option>
                        <option value="0" @if($product->discountStatus == 0) Selected @endif>Inactive</option>
                    </select>
                     @error('discountStatus')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                </div>
                <div class="form-group">
                    <label for="">Choose Product Cover Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="coverImage"  value="{{$product->coverImage}}" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    @error('coverImage')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label></label>
                    <textarea name="description" rows="5" class="form-control">{{$product->description}}</textarea>
                    @error('description')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>

                {!! Form::submit('Update Product',['class'=>'btn btn-primary shadow']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
