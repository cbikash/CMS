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
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                    <li class="breadcrumb-item"><a href=" {{ route('category.index')}} ">Category </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Category</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 col-space">
            <h3>Update Category</h3>
            <hr>
            <form method="POST" action="{{ route('category.update', $category) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <input name="_method" type="hidden" value="PATCH">

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Category</label>
                        <input type="text" name="name" class="form-control" id="inputEmail4" value="{{ $category->name }}" placeholder="Enter Product Name">
                        @error('name')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>

                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-success shadow" />
                </div>
            </form>
        </div>
    </div>
</div>




@endsection