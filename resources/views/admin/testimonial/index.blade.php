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
                <li class="breadcrumb-item active " aria-current="page">Testimonial (<a href="{{route('testimonial.create')}}">Add Testimonial</a>)</li>
            </ol>
        </nav>
        </div>
        
        <div class="col-sm-12 col-lg-12 col-xl-12">
            <div class="body-content">
        <div class="table-responsive"> 
            <table class="table table-hover custom-table ">
            <thead class="thead-custom bg-table-head">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Post</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                <th scope="col">Delete</th>

                </tr>
            </thead>
            <tbody>
            @foreach($testimonials as $testimonial)
                <tr>
                <th scope="row">{{  $loop->iteration  }}</th>
                <td>{{$testimonial->name}}</td>
                <td>{{$testimonial->post_of}}</td>
                <td><img src="{{asset('storage/testimonial/'.$testimonial->image)}}" class="img-fluid" height="50" width="150"  alt=""></td>
                <td>{{ Str::limit($testimonial->description, 50)}}</td>
                <td>
                    <a href="{{route('testimonial.show', $testimonial)}}" class="text-success"> <i class="fas fa-eye"></i></a>
                    <a href="{{route('testimonial.edit', $testimonial)}}" class="text-info"> <i class="fas fa-pencil-alt"></i></a>
                </td><td>
                    {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\TestimonialController@destroy', $testimonial]]) !!}
                    @csrf
                    <button CLASS="btn text-danger"><i class="fas fa-trash"></i></button>
                    {!! Form::close() !!}
                </td>

                </tr>
            @endforeach
            </tbody>
            </table>
            </div>
            </div>
        <div class="pagination-custom">
            {{ $testimonials->links() }}
            </div>
        </div>
    </div>
@endsection
