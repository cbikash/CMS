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
                <li class="breadcrumb-item active " aria-current="page">Blog (<a href="{{route('blog.create')}}">Add Blog</a>)</li>
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
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
                <th scope="col">Delete</th>

                </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                <th scope="row">{{  $loop->iteration  }}</th>
                <td>{{$blog->title}} 
                </td>
                <td><img src="{{asset('storage/gallery/blog/'.$blog->image)}}" class="img-fluid" height="50" width="100"  alt=""></td>
                <td>{{ Str::limit(strip_tags($blog->content), 50)}}</td>
                    <td>
                        <a href="{{route('blog.show', $blog)}}" class="text-success"> <i class="fas fa-eye"></i></a>
                        <a href="{{route('blog.edit', $blog)}}" class="text-info"> <i class="fas fa-pencil-alt"></i></a>
                    </td><td>
                        {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\BlogController@destroy', $blog]]) !!}
                        @csrf
                        <button class="btn text-danger text-small"><i class="fas fa-trash"></i></button>
                        {!! Form::close() !!}
                    </td>

                </tr>
            @endforeach
            </tbody>
            </table>
            </div>
            </div>
        <div class="pagination-custom">
            {{ $blogs->links() }}
            </div>
        </div>
    </div>
@endsection
