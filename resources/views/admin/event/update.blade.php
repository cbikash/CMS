@extends('layouts.admin')
@section('content')
    <style>
        .col-space{
            background-color: rgb(255, 255, 255);
            padding: 30px;
        }
    </style>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                        <li class="breadcrumb-item"><a href=" {{ route('event.index')}} ">Event List </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Event</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 col-space">
                <h3>Update Category</h3>
                <hr>

                {!! Form::open(['method'=>'PUT','action'=>['App\Http\Controllers\EventController@update',$event],'files'=>true,'class'=>'eventForm'])!!}

                <div class="form-group row">
                    <div class="col-sm-12">
                        <lable class="col-form-label">Event Title <span class="text-danger">*</span></lable>
                        <input type="text" name="title" class="form-control" value="{{$event->title}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <lable class="col-form-label">Event Start Date <span class="text-danger">*</span></lable>
                        <input type="text" name="startDate" value="{{$event->startDate}}" class="form-control datepicker" required>
                    </div>

                    <div class="col-sm-6">
                        <lable class="col-form-label">Event End Date <span class="text-danger">*</span></lable>
                        <input type="text" name="endDate" value="{{$event->endDate}}" class="form-control datepicker" required>
                    </div>
                </div>
                <label class="col-form-label">Event Description</label>
                <textarea class="form-control" name="description">{{$event->description}}</textarea>
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker(
                {
                    format: 'yyyy-mm-dd',
                }
            );
        })
    </script>
@endsection






