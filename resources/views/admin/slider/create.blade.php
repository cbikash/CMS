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
          <div class="col-sm-12 col-lg-12 col-xl-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('slider.index') }} ">Slider</a></li>
                <li class="breadcrumb-item active " aria-current="page">Add Slider</li>
            </ol>
        </nav>
        </div>
        
        <div class="col-md-12 col-space">
            <h3>Add Slider</h3>
            <hr>
              {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\SliderController@store','files'=>true])!!}
                <div class="form-group">
                    <label for="">Choose  Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" value="{{old('image')}}" id="customFile" required>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    @error('image')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label></label>
                    <textarea name="description" rows="5" id="ckeditor" class="form-control">{{old('description')}}</textarea>
                    @error('description')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>

                {!! Form::submit('Add slider',['class'=>'btn btn-primary shadow']) !!}
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

