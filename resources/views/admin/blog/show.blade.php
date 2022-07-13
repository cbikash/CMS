@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('team.index')}} ">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}</li>
            </ol>
            </nav>
        </div>
            <div class="col-md-6">
                <div class="card" style="width: 100%;">
               <img src="{{asset('storage/gallery/blog/'.$blog->image)}}" class="img-fluid" width="100%" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$blog->title}}</h5>
                    <p class="card-text">{{$blog->content}}</p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
