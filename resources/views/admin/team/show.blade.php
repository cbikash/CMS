@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('team.index')}} ">Teams</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$team->name}}</li>
            </ol>
            </nav>
        </div>
            <div class="col-md-12">
                <div class="card" style="width: 100%;">
               <img src="{{asset('storage/gallery/team/'.$team->image)}}" class="img-fluid" width="100%" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$team->name}}</h5>
                    <p class="card-text">{{$team->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$team->phone}}</li>
                    <li class="list-group-item">{{$team->email}}</li>
                    <li class="list-group-item">{{$team->joined_at}}</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
