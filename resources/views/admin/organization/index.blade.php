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
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">

                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
