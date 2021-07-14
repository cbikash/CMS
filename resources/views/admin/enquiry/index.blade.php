@extends('layouts.admin')
@section('content')
    <style>
        .search-custom p{
            padding-left: 30px;
            text-align: center;
            font-weight: bold;
        }
        .search-custom{
            padding-left: 0;
            margin-left: 0;
            border-left: none;
        }

    </style>

    <div class="row">
        <div class="col-sm-12 col-lg-12 col-xl-12">

            <div class="search-custom">
                <p class="text-success">All Enquiry</p>
            </div>
            <div class="flex-class"></div>
        </div>

        <div class="col-sm-12 col-lg-12 col-xl-12">
            <div class="body-content">

                <table class="table table-hover">
                    <thead class="thead-custom">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message Details</th>
                        <th scope="col">Action</th>
                        <th scope="col">Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($enqueries as $enquiry)
                        <tr>
                            <th scope="row">{{  $loop->iteration  }}</th>
                            <td>{{$enquiry->name}}</td>
                            <td>{{$enquiry->address}}</td>
                            <td>{{$enquiry->phone}}</td>
                            <td>{{$enquiry->email}}</td>
                            <td>{{$enquiry->product->title}}</td>
                            <td>{{ Str::limit($enquiry->message, 50)}}</td>
                            <td>
                                <a href="{{route('message.show', $enquiry)}}" class="text-success"> <i class="fas fa-eye"></i></a>
                            </td><td>
                                {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\EnquiryController@destroy', $enquiry]]) !!}
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
                {{ $enqueries ?? ''->links() }}
            </div>
        </div>
    </div>
@endsection
