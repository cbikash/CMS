@extends('layouts.admin')
@section('content')
    <style>
        .hd-message{
            margin-left: 20px;
        }
    </style>

    <div class="row">

        <div class="col-sm-12 col-lg-12 col-xl-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('message.index')}} ">Message</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$message->name}}</li>
            </ol>
            </nav>
            <div class="body-content">
                <div class="jumbotron">
                    <h1 class="display-4">{{$message->name}}</h1>
                    <p class="text-secondary">{{$message->email}} <br> {{$message->contact}} <br>{{$message->address}}</p>
                    <hr class="my-4">
                    <p></p>
                    <p class="lead">{{$message->message}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
