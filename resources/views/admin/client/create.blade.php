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
                <li class="breadcrumb-item"><a href=" {{ route('client.index') }} ">Client</a></li>
                <li class="breadcrumb-item active " aria-current="page">Add Client</li>
            </ol>
        </nav>
        </div>
        
        <div class="col-md-12 col-space">
            <h3>Add Client</h3>
            <hr>
              {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\ClientController@store','files'=>true])!!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Company Name</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" value="{{old('name')}}" placeholder="Enter  Name">
                        @error('name')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Company URL</label>
                    <input type="text" name="url" class="form-control" value="{{old('url')}}"  placeholder="Enter Url">
                        @error('url')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Choose Client  Logo</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" value="{{old('image')}}" id="customFile" required>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    @error('image')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                {!! Form::submit('Add Client',['class'=>'btn btn-primary shadow']) !!}
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

