@extends('layouts.admin')
@section('content')
<style>
    .search-custom span a {
        text-align: right;
        font-size: 20px;
        color: #8e8e8e;
    }
</style>
<div class="row">
    <div class="col-sm-12 col-lg-12 col-xl-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item active " aria-current="page">Slider (<a href="{{route('slider.create')}}">Add Slider</a>)</li>
            </ol>
        </nav>
    </div>
    <div class="col-sm-12 col-lg-12 col-xl-12">
        <div class="body-content">
            <div class="table-responsive">
                <table class="table table-hover custom-table">
                    <thead class="thead-custom bg-table-head">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $slider)
                        <tr>
                            <th scope="row">{{ $loop->iteration  }}</th>
                            <td><img src="{{asset('storage/gallery/slider/'.$slider->image)}}" class="img-fluid" height="50" width="150" alt=""></td>
                            <td>{{ Str::limit($slider->description, 50)}}</td>
                            <td>
                                <form method="POST" action="{{ route('slider.destroy', $slider) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                    <input name="_method" type="hidden" value="DELETE">

                                    <button CLASS="btn"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection