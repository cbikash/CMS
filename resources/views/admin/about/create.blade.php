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
                <li class="breadcrumb-item"><a href=" {{ route('about.index') }} ">About</a></li>
                <li class="breadcrumb-item active " aria-current="page">Create About</li>
            </ol>
        </nav>
        </div>

        <div class="col-md-12 col-space">
            <h3>Add About</h3>
            <hr>
              {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\AboutController@store','files'=>true])!!}
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">About Title</label>
                    <input type="text" name="title" class="form-control" id="inputEmail4" value="{{old('title')}}" placeholder="Enter Title">
                        @error('title')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label></label>
                    <textarea name="content" rows="10" class="form-control">{{old('content')}}</textarea>
                    @error('content')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                  <div class="form-check">
                    <input type="checkbox" name="feature" value="1" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Feature Content</label>
                </div>
                @if ($counth != 1)
                     <div class="form-check">
                    <input type="checkbox" name="home" value="1" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Home Page Content</label>
                </div>
                @endif
               
                <br>

                {!! Form::submit('Add About',['class'=>'btn btn-success shadow']) !!}
                {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection
