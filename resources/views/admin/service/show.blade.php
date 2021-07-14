@extends('layouts.admin')
@section('content')
    <style>
        .hd-message{
            margin-left: 20px;
        }
    </style>

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('service.index')}} ">Service </a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$service->title}}</li>
            </ol>
            </nav>
        </div>

        <div class="col-sm-12 col-lg-12 col-xl-12">
            <div class="body-content">
                
                <div class="jumbotron">
                    <h1>{{$service->title}}</h1>
                    <img src="{{asset('storage/service/'.$service->coverImage)}}" class="img-fluid" alt="">
                    <hr>
                    <p>{{$service->description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
