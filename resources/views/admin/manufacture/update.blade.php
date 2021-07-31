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
                <li class="breadcrumb-item"><a href=" {{ route('service.index') }} ">Manufacture</a></li>
                <li class="breadcrumb-item active " aria-current="page">Add Manufacture</li>
            </ol>
        </nav>
        </div>
            <div class="col-md-12 col-space">
                <h3>Add Manufacture</h3>
                <hr>
                {!! Form::open(['method'=>'PUT','action'=>['App\Http\Controllers\ManufactureController@update',$manufacture],'files'=>true])!!}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="text" name="title" class="form-control" id="inputEmail4" value="{{$manufacture->title}}" placeholder="Enter Service Title">
                        @error('title')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Choose Service Cover Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" value="{{old('coverImage')}}" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    @error('image')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea name="description" rows="5" placeholder="Description" class="form-control">{{$manufacture->description}}</textarea>
                    @error('description')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>

                {!! Form::submit('Update Manufacture',['class'=>'btn btn-success shadow']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
