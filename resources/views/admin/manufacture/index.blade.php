@extends('layouts.admin')
@section('content')

<style>
    .search-custom p {
        padding-left: 30px;
        text-align: center;
        font-weight: bold;
    }

    .search-custom {
        padding-left: 0;
        margin-left: 0;
        border-left: none;
    }
</style>

<div class="row">
    <div class="col-sm-12 col-lg-12 col-xl-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item active " aria-current="page">Manufacture (<a href="{{route('manufacture.create')}}">Add Manufacture Product</a>)</li>
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
                        @foreach($manufactures as $manufacture)
                        <tr>
                            <th scope="row">{{ $loop->iteration  }}</th>
                            <td>{{$manufacture->title}}</td>
                            <td><img src="{{asset('storage/manufacture/'.$manufacture->image)}}" class="img-fluid" width="100" alt=""></td>
                            <td>{{ Str::limit($manufacture->description, 50)}}</td>
                            <td>
                                <a href="{{route('manufacture.show', $manufacture)}}" class="text-success"> <i class="fas fa-eye"></i></a>
                                <a href="{{route('manufacture.edit', $manufacture)}}" class="text-info"> <i class="fas fa-pencil-alt"></i></a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('manufacture.destroy', $manufacture) }}" accept-charset="UTF-8" enctype="multipart/form-data">
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
            {{ $manufactures ?? ''->links() }}
        </div>
    </div>
</div>


@endsection