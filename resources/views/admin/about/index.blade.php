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
            <div class="table-responsive">
                <table class="table table-hover custom-table">
                    <thead class="thead-custom bg-table-head ">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($abouts as $about)
                        <tr>
                            <th scope="row">{{ $loop->iteration  }}</th>
                            <td>{{$about->title}}</td>

                            <td>{{ Str::limit(strip_tags($about->description), 50)}}</td>
                            <td>{{$about->type}}</td>
                            <td>@if($about->feature == 1) featured @endif @if($about->home == 1) Home @endif</td>
                            <td>
                                <a href="{{route('about.show', $about)}}" class="text-success"> <i class="fas fa-eye"></i></a>
                                <a href="{{route('about.edit', $about)}}" class="text-info"> <i class="fas fa-pencil-alt"></i></a>
                                <a href="#" class="text-danger" id="delete" data-url="{{ route('about.destroy', $about) }}"><i class="fas fa-trash"></i> </a>

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pagination-custom">
            {{ $abouts->links() }}
        </div>
    </div>
</div>
@endsection
