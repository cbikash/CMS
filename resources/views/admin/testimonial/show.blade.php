@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('testimonial.index')}} ">Testimonial</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$testimonial->name}}</li>
            </ol>
            </nav>
        </div>
        <div class="col-md-4"></div>

            <div class="col-md-4">
                <div class="card" style="width: 100%;">
               <img src="{{asset('storage/gallery/testimonial/'.$testimonial->image)}}" class="img-fluid" width="100%" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$testimonial->name}}</h5>
                    <p class="card-text">{{$testimonial->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$testimonial->post_of}}</li>
                </ul>
                </div>
            </div>
        </div>
         <div class="col-md-4"></div>

    </div>
@endsection
