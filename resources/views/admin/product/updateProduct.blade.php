@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="container">
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
                <div class="form-group">
                    <label>Unit</label>
                    <input type="text" name="unit" value="{{$product->unit}}" class="form-control" placeholder="Enter the unit">
                    @error('unit')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label></label>
                    <input type="text" name="coverImage" value="{{$product->coverImage}}" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
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
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

                {!! Form::submit('Update Product',['class'=>'btn btn-primary shadow']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
