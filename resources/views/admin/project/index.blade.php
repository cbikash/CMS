@extends('layouts.admin')
@section('content')
    <style>
        .search-custom span a{
            text-align: right;
            font-size: 20px;
            color: #8e8e8e;
        }
    </style>

    <div class="row">
        <div class="col-sm-12 col-lg-12 col-xl-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item active " aria-current="page">Project (<a href="{{route('project.create')}}">Add Project</a>)</li>
            </ol>
        </nav>
        </div>
        <div class="col-sm-12 col-lg-12 col-xl-12">
            <div class="body-content">
        <div class="table-responsive"> 
            <table class="table table-hover ">
            <thead class="thead-custom">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Project Title</th>
                <th scope="col">Image</th>
                <th scope="col">Project Start Date</th>
                <th scope="col">Project End Date</th>
                <th scope="col">Project Description</th>
                <th scope="col">Project Owner</th>
                <th scope="col">Action</th>
                <th scope="col">Delete</th>

                </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr>
                <th scope="row">{{  $loop->iteration  }}</th>
                <td>{{$project->title}} </td>
                <td><img src="{{asset('storage/gallery/project/'.$project->image)}}" class="img-fluid" height="50" width="100"  alt=""></td>
                <td>{{$project->project_start_date}}</td>
                <td>{{$project->project_end_date}}</td>
                <td>{{ Str::limit($project->description, 50)}}</td>
                <td>{{$project->project_owner}}</td>
                    <td>
                        <a href="{{route('project.show', $project)}}" class="text-success"> <i class="fas fa-eye"></i></a>
                        <a href="{{route('project.edit', $project)}}" class="text-info"> <i class="fas fa-pencil-alt"></i></a>
                    </td><td>
                        {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\ProjectController@destroy', $project]]) !!}
                        @csrf
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        {!! Form::close() !!}
                    </td>

                </tr>
            @endforeach
            </tbody>
            </table>
            </div>
            </div>
        <div class="pagination-custom">
            {{ $projects->links() }}
            </div>
        </div>
    </div>
@endsection
