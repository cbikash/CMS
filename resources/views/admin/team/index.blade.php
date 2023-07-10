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
                <li class="breadcrumb-item active " aria-current="page">Team (<a href="{{route('team.create')}}">Add Team</a>)</li>
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
                            <th scope="col">Name/Post/Phone/Email</th>
                            <th scope="col">Image</th>
                            <th scope="col">Joined Date</th>
                            <th scope="col">Address</th>
                            <th scope="col">Details</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teams as $team)
                        <tr>
                            <th scope="row">{{ $loop->iteration  }}</th>
                            <td>{{$team->name}}
                                <p>{{$team->post}}</p>
                                <p> {{$team->phone}}</p>
                                <p> {{$team->email}}</p>
                            </td>
                            <td><img src="{{asset('storage/gallery/team/'.$team->image)}}" class="img-fluid" height="50" width="100" alt=""></td>
                            <td>{{$team->joined_at}}</td>
                            <td>{{$team->address}}</td>
                            <td>{{ Str::limit($team->description, 50)}}</td>
                            <td>
                                <a href="{{route('team.show', $team)}}" class="text-success"> <i class="fas fa-eye"></i></a>
                                <a href="{{route('team.edit', $team)}}" class="text-info"> <i class="fas fa-pencil-alt"></i></a>
                                <a href="#" class="text-danger" id="delete" data-url="{{  route('team.destroy', $team)  }}  }}"><i class="fas fa-trash"></i> </a>

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pagination-custom">
            {{ $teams->links() }}
        </div>
    </div>
</div>
@endsection
