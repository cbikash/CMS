@extends('layouts.admin')
@section('content')
<style>
    .col-space {
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
                    <li class="breadcrumb-item active " aria-current="page">Update About</li>
                </ol>
            </nav>
        </div>

        <div class="col-md-12 col-space">
            <h3>Update About</h3>
            <hr>
            <form method="POST" action="{{ route('about.update', $about) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">About Title</label>
                        <input type="text" name="title" class="form-control" id="inputEmail4" value="{{$about->title}}" placeholder="Enter Title">
                        @error('title')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label></label>
                    <textarea name="content" rows="10" id="ckeditor" class="form-control description">{{$about->description}}</textarea>
                    @error('content')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                @if ($about->home == 0)
                <div class="form-check">
                    <input type="checkbox" name="feature" value="1" class="form-check-input" id="exampleCheck1" @if($about->feature == 1) checked @endif>
                    <label class="form-check-label" for="exampleCheck1">Feature Content</label>
                </div>
                @endif

                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-success shadow" />
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#ckeditor'))
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection