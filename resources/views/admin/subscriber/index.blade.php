@extends('layouts.admin')
@section('content')
    <style>
        .search-custom span a{
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
                <li class="breadcrumb-item active " aria-current="page">Subscribers </li>
            </ol>
        </nav>
        </div>
        <div class="col-sm-12 col-lg-12 col-xl-12">
            <div class="body-content">
        <div class="table-responsive"> 
            <table class="table table-hover custom-table">
            <thead class="thead-custom bg-table-head">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Eamil</th>
                </tr>
            </thead>
            <tbody>
            @foreach($subscirbes as $subsciber)
                <tr>
                    <th scope="row">{{  $loop->iteration  }}</th>
                   
                    <td>{{$subsciber->email}}</td>
                </tr>
            @endforeach
            </tbody>
            </table>
            </div>
            </div>
    </div>
@endsection
