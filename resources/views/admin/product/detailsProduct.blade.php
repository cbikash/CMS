@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('product.index')}} ">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->title}}</li>
            </ol>
            </nav>
        </div>

            <div class="col-md-12">
                <img src="{{asset('storage/gallery/product/'.$product->coverImage)}}" class="img-fluid" width="100%" alt="">
                <br>
                <br>
                <h3>{{ $product->title }}</h3>
                <p>{{ $product->price }} Per {{$product->unit}}</p>
                <hr>
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
@endsection
