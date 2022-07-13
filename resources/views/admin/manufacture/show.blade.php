@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('manufacture.index')}} ">manufacture</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$manufacture->title}}</li>
            </ol>
            </nav>
        </div>
        
            <div class="col-md-12">
                <img src="{{asset('storage/gallery/manufacture/'.$manufacture->image)}}" class="img-fluid" width="100%" alt="">
                <br>
                <br>
                <h3>{{ $manufacture->title }}</h3>
                <hr>
                <p>{{ $manufacture->description }}</p>
            </div>
        </div>
    </div>
@endsection
