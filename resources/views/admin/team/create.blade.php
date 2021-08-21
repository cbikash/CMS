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
                <li class="breadcrumb-item"><a href=" {{ route('team.index') }} ">Team</a></li>
                <li class="breadcrumb-item active " aria-current="page">Add Team</li>
            </ol>
        </nav>
        </div>
        
        <div class="col-md-12 col-space">
            <h3>Add Team</h3>
            <hr>
              {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\TeamController@store','files'=>true])!!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4"> Name</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" value="{{old('name')}}" placeholder="Enter  Name">
                        @error('name')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputPassword4">Phone No.</label>
                    <input type="text" name="phone" class="form-control" value="{{old('phone')}}"  placeholder="Enter Phone">
                        @error('phone')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Email</label>
                        <input type="email" name="email" class="form-control" value="{{old('email')}}"  placeholder="Enter Email">
                        @error('email')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Address</label>
                        <input type="text" name="address" class="form-control" value="{{old('address')}}"  placeholder="Enter Address">
                            @error('address')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Post</label>
                        <input type="text" name="post" class="form-control" value="{{old('post')}}"  placeholder="Enter Post">
                            @error('post')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="joined_at">Joined At</label>
                        <input type="date" name="joined_at" class="form-control" value="{{old('joined_at')}}"  placeholder="Enter Joined At">
                        @error('joined_at')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>

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

                {!! Form::submit('Add Team',['class'=>'btn btn-primary shadow']) !!}
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

