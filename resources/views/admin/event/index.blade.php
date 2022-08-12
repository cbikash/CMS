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
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                    <li class="breadcrumb-item active " aria-current="page">Events</a></li>
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
                            <th scope="col">Description</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Action</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event)
                            <tr>
                                <th scope="row">{{  $loop->iteration  }}</th>
                                <td>{{$event->title}}</td>
                                <td>{{$event->description}}</td>
                                <td>{{$event->startDate}}</td>
                                <td>{{$event->endDate}}</td>
                                <td>
                                    <a href="{{route('event.edit', $event)}}" class="text-info"> <i class="fas fa-pencil-alt"></i></a>
                                </td>

                                <td>

                                    {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\EventController@destroy', $event]]) !!}
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
                {{ $events ?? ''->links() }}
            </div>
        </div>
    </div>
@endsection
