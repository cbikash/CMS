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
                    <textarea name="description" rows="10" id="ckeditor" class="form-control description">{{old('description')}}</textarea>
                    @error('description')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>

            <div class="form-group">
                <select name="type" class="form-select form-control" aria-label="Default select example">
                    <option selected>-- Select About Type --</option>
                    @foreach($aboutTypes as $key => $aboutType  )
                        <option value="{{$key}}"> {{$aboutType}}</option>
                    @endforeach
                </select>

                @error('type')
                <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                @enderror
            </div>

                <br>
            <div class="form-group">
                <label for="">Choose Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" value="{{old('image')}}" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                @error('image')
                <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                @enderror
            </div>

                {!! Form::submit('Add About',['class'=>'btn btn-success shadow']) !!}
                {!! Form::close() !!}
        </div>
    </div>
</div>

<script>
    ClassicEditor
        .create(document.querySelector( '#ckeditor' ))
        .then( editor => {
            window.editor = editor;
        } )
        .catch( error => {
            console.error( error );
        });
</script>


@endsection
