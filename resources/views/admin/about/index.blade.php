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
                <li class="breadcrumb-item active " aria-current="page">About (<a href="{{route('about.create')}}">Add About</a>)</li>
            </ol>
        </nav>
        </div>
        
                        

                        <div class="col-sm-12 col-lg-12 col-xl-12">
                         <div class="body-content">

                           <table class="table table-hover">
                            <thead class="thead-custom">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($abouts as $about)
                                <tr>
                                <th scope="row">{{  $loop->iteration  }}</th>
                                <td>{{$about->title}}</td>
                               
                                    <td>{{ Str::limit($about->content, 50)}}</td>
                                    <td>@if($about->feature == 1) featured @else - @endif</td>
                                    <td>
                                        <a href="{{route('about.show', $about)}}" class="text-success"> <i class="fas fa-eye"></i></a>
                                        <a href="{{route('about.edit', $about)}}" class="text-info"> <i class="fas fa-pencil-alt"></i></a>
                                    </td><td>
                                        {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\AboutController@destroy', $about]]) !!}
                                        @csrf
                                        <button CLASS="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                            </table>
                         </div>
                        <div class="pagination-custom">
                            {{ $abouts->links() }}
                            </div>
                        </div>
                    </div>
@endsection
