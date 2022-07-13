@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('team.index')}} ">Teams</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$project->title}}</li>
            </ol>
            </nav>
        </div>
            <div class="col-md-6">
                <div class="card" style="width: 100%;">
               <img src="{{asset('storage/gallery/project/'.$project->image)}}" class="img-fluid" width="100%" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$project->title}}</h5>
                    <p class="card-text">{{$project->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$project->project_start_date}}</li>
                    <li class="list-group-item">{{$project->project_end_date}}</li>
                    <li class="list-group-item">{{$project->project_status}}</li>
                    <li class="list-group-item">{{$project->project_type}}</li>
                    <li class="list-group-item">{{$project->project_owner}}</li>
                    <li class="list-group-item">{{$project->project_value}}</li>
                    <li class="list-group-item">{{$project->location}}</li>
                    <li class="list-group-item">{{$project->project_}}</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
