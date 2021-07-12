@extends('layouts.admin')
@section('content')
<style>
    .col-space{
        background-color: rgb(255, 255, 255);
        padding: 30px;
    }
</style>
<div class="row">
    <div class="container">
        <div class="col-md-12 col-space">
            <h3>Add Product</h3>
            <hr>
              {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\ProductController@store','files'=>true])!!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Product Name</label>
                    <input type="text" name="title" class="form-control" id="inputEmail4" value="{{old('title')}}" placeholder="Enter Product Name">
                        @error('title')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Price</label>
                    <input type="text" name="price" class="form-control" value="{{old('price')}}"  placeholder="Enter Price">
                        @error('price')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Unit</label>
                    <input type="text" name="unit" value="{{old('unit')}}" class="form-control" placeholder="Enter the unit">
                    @error('unit')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Choose Product Cover Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="coverImage" value="{{old('coverImage')}}" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    @error('coverImage')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label></label>
                    <textarea name="description" rows="5" class="form-control">{{old('description')}}</textarea>
                    @error('description')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>

                {!! Form::submit('Add Product',['class'=>'btn btn-primary shadow']) !!}
                {!! Form::close() !!}
        </div>
    </div>
</div>




@endsection
