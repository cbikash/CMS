@extends('layouts.admin')
@section('content')
<style>
    .col-space {
        background-color: rgb(255, 255, 255);
        padding: 30px;
    }
</style>
<div class="row">
    <div class="container">
        <div class="col-sm-12 col-lg-12 col-xl-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                    <li class="breadcrumb-item"><a href=" {{ route('faq.index') }} ">Faq</a></li>
                    <li class="breadcrumb-item active " aria-current="page">Create Faq</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 col-space">
            <h3>Add FAQ</h3>
            <hr>
            <form method="POST" action="{{ route('faq.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Question</label>
                        <input type="text" name="question" class="form-control" id="inputEmail4" value="{{old('question')}}" placeholder="Enter Question">
                        @error('question')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Answer</label>
                        <textarea name="answer" class="form-control" id="inputEmail4" placeholder="Enter Answer">{{ old('answer') }}</textarea>
                        @error('answer')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-success shadow" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection