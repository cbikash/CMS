











@extends('layouts.admin')
@section('content')
<style>
    .col-space{
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
                <li class="breadcrumb-item active " aria-current="page">{{$about->title}}</li>
            </ol>
        </nav>
        </div>

        <div class="col-sm-12 col-lg-12 col-xl-12">
            <div class="jumbotron">
                <h1 class="display-4"> {{$about->title}} </h1>
                <hr class="my-4">
                <p>{{$about->content}}</p>
                
                </div>
        </div>
    </div>
</div>


@endsection



