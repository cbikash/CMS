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
                    <li class="breadcrumb-item"><a href=" {{ route('category.index') }} ">Category</a></li>
                    <li class="breadcrumb-item active " aria-current="page"> Sub Category (<a href="{{route('sub.category.create', $category)}}">Add</a>)</li>
                </ol>
            </nav>
        </div>

        <div class="col-sm-12 col-lg-12 col-xl-12">
            <div class="body-content">
                <div class="table-responsive">

                    <table class="table table-hover custom-table">
                        <thead class="thead-custom bg-table-head ">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">slug</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subCategories as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration  }}</th>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>
                                    <a href="{{route('category.edit', $category)}}" class="text-info"> <i class="fas fa-pencil-alt"></i></a>
                                    <i class="fas fa-folder-tree"></i>
                                    <a href="#" class="text-danger" id="delete" data-url="{{ route('category.destroy', $category)  }}"><i class="fas fa-trash"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
            <div class="pagination-custom">
                {{ $subCategories->links() }}
            </div>
        </div>
    </div>
@endsection
