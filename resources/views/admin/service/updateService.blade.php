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
                <h3>Update Service</h3>
                <hr>
                {!! Form::open(['method'=>'put','action'=>['App\Http\Controllers\ServiceController@update',$service],'files'=>true])!!}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Service Title</label>
                        <input type="text" name="title" class="form-control" id="inputEmail4" value="{{$service->title}}" placeholder="Enter Service Title">
                        @error('title')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Choose Service Cover Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="coverImage" value="{{$service->coverImage}}" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    @error('coverImage')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label></label>
                    <textarea name="description" rows="5" class="form-control">{{ $service->description }}</textarea>
                    @error('description')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>

                {!! Form::submit('Update Service',['class'=>'btn btn-primary shadow']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection
