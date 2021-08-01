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
                <li class="breadcrumb-item active">Service (<a href="{{route('service.create')}}">Add Service</a>)</li>
            </ol>
        </nav>
        </div>
       

        <div class="col-sm-12 col-lg-12 col-xl-12">
            <div class="body-content">
                 <div class="table-responsive"> 

                <table class="table table-hover">
                    <thead class="thead-custom">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        <th scope="col">Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($services as $service)
                        <tr>
                            <th scope="row">{{  $loop->iteration  }}</th>
                            <td>{{$service->title}}</td>
                            <td><img src="{{asset('storage/service/'.$service->coverImage)}}" width="40" alt=""></td>
                            <td>{{ Str::limit($service->description, 50)}}</td>
                            <td>
                                <a href="{{route('service.show', $service)}}" class="text-success"> <i class="fas fa-eye"></i></a>
                                <a href="{{route('service.edit', $service)}}" class="text-info"> <i class="fas fa-pencil-alt"></i></a>
                            </td><td>
                                {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\ServiceController@destroy', $service]]) !!}
                                @csrf
                                <button CLASS="btn btn-danger"><i class="fas fa-trash"></i></button>
                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>

            </div>
            <div class="pagination-custom">
                {{ $services->links() }}
            </div>
        </div>
    </div>
@endsection
