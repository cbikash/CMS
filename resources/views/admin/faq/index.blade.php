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
                <li class="breadcrumb-item active " aria-current="page">FAQ (<a href="{{route('faq.create')}}">Add FAQ</a>)</li>
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
                        <th scope="col">Question/Answer</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($faqs as $faq)
                        <tr>
                            <th scope="row">{{  $loop->iteration  }}</th>
                            <td> <h4 class="text-secondary">{{ $faq->question }}</h4>
                                <p>{{ $faq->answer }}</p>
                            </td>
                            <td>
                                <a href="{{route('faq.edit', $faq)}}"> <button CLASS="btn btn-danger"><i class="fas fa-pencil-alt">  </i> </button></a>
                                {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\FaqController@destroy', $faq]]) !!}
                                @csrf
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
          </div>
            </div>
            <div class="pagination-custom">
                {{ $faqs ?? ''->links() }}
            </div>
        </div>
    </div>
@endsection
