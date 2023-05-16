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
                <li class="breadcrumb-item active " aria-current="page">Enquiry</a></li>
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
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Level</th>
                            <th scope="col">Want to Apply</th>
                            <th scope="col">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enqueries as $enquiry)
                        <tr>
                            <th scope="row">{{ $loop->iteration  }}</th>
                            <td>{{$enquiry->name}}</td>
                            <td>{{$enquiry->phone}}</td>
                            <td>{{$enquiry->email}}</td>
                            <td>{{$enquiry->levels}}</td>
                            <td>{{$enquiry->apply}}</td>
                            <td>
                                <form method="POST" action="{{ route('enquiry.destroy', $enquiry) }}" accept-charset="UTF-8" enctype="multipart/form-data">
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
            {{ $enqueries ?? ''->links() }}
        </div>
    </div>
</div>
@endsection