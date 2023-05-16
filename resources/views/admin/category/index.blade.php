@extends('layouts.admin')
@section('content')
<style>
    .search-custom span a {
        text-align: right;
        font-size: 20px;
        color: #8e8e8e;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item active " aria-current="page">Category (<a href="{{route('category.create')}}">Add Category</a>)</li>

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
                            <th scope="col">Title</th>
                            <th scope="col">slug</th>
                            <th scope="col">Action</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{ $loop->iteration  }}</th>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>
                                <a href="{{route('category.edit', $category)}}" class="text-info"> <i class="fas fa-pencil-alt"></i></a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('category.destroy', $category) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                    <input name="_method" type="hidden" value="DELETE">

                                    <button CLASS="btn"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
        <div class="pagination-custom">
            {{ $categories->links() }}
        </div>
    </div>
</div>
@endsection