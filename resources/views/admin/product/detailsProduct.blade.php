@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-12 col-space">
                <img src="{{asset('storage/gallery/'.$product->coverImage)}}" class="img-fluid" width="100%" alt="">
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
