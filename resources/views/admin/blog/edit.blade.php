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
                <li class="breadcrumb-item"><a href=" {{ route('blog.index') }} ">Blog</a></li>
                <li class="breadcrumb-item active " aria-current="page">Update Blog</li>
            </ol>
        </nav>
        </div>
        
        <div class="col-md-12 col-space">
            <h3>Update Blog</h3>
            <hr>
              {!! Form::open(['method'=>'put','action'=>['App\Http\Controllers\BlogController@update',$blog],'files'=>true])!!}
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4"> Title</label>
                    <input type="text" name="title" class="form-control" id="inputEmail4" value="{{$blog->title}}" placeholder="Enter  Title">
                        @error('title')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Choose  Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" value="{{$blog->image}}" id="customFile" required>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    @error('image')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label></label>
                    <textarea name="content" rows="5" id="ckeditor" class="form-control">{{ $blog->content }}</textarea>
                    @error('content')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                
                {!! Form::submit('Update Blog',['class'=>'btn btn-primary shadow']) !!}
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

