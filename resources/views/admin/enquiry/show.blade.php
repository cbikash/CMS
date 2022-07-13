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
                <li class="breadcrumb-item"><a href=" {{ route('enquiry.index')}} ">Enquiry</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$enquiry->name}}</li>
            </ol>
            </nav>
        </div>

        <div class="col-sm-12 col-lg-12 col-xl-12">
            <div class="body-content">
                
                <div class="jumbotron">
                    <h1 class="display-4">{{$enquiry->name}}</h1>
                    <p class="text-secondary">{{$enquiry->email}} <br> {{$enquiry->contact}} <br>{{$enquiry->address}}</p>
                    <hr class="my-4">
                    <p></p>
                    <p class="lead">{{$enquiry->message}}</p>
                    <hr>
                    <h5>Product Details</h5>
                    <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route("product.show",$enquiry->product->id) }}"> Product Name:</a>
                        <span class="badge badge-primary badge-pill"> {{ $enquiry->product->title }} </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Quntity:
                        <span class="badge badge-primary badge-pill"> {{ $enquiry->quantity}} </span>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
