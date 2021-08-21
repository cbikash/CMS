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
          <div class="col-sm-12 col-lg-12 col-xl-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=" {{ route('home') }} ">Home</a></li>
                <li class="breadcrumb-item"><a href=" {{ route('project.index') }} ">Project</a></li>
                <li class="breadcrumb-item active " aria-current="page">Update Project</li>
            </ol>
        </nav>
        </div>
        
        <div class="col-md-12 col-space">
            <h3>Update Project</h3>
            <hr>
              {!! Form::open(['method'=>'put','action'=>['App\Http\Controllers\ProjectController@update',$project],'files'=>true])!!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4"> Title</label>
                    <input type="text" name="title" class="form-control" id="inputEmail4" value="{{$project->title}}" placeholder="Enter Project Title">
                        @error('title')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputPassword4">Porject Location.</label>
                    <input type="text" name="location" class="form-control" value="{{$project->location}}"  placeholder="Enter Project Location">
                        @error('location')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputPassword4">Project Owner</label>
                        <input type="text" name="project_owner" class="form-control" value="{{$project->project_owner}}"  placeholder="Enter Name of Project owner">
                        @error('project owner')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Project Start Date</label>
                        <input type="date" name="project_start_date" class="form-control" value="{{$project->project_start_date}}"  placeholder="Enter Project Start date">
                            @error('project_start_date')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Project End Date</label>
                        <input type="date" name="project_end_date" class="form-control" value="{{$project->project_end_date}}"  placeholder="Enter Project End Date">
                            @error('project_end_date')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="joined_at">Project Status</label>
                        <input type="text" name="project_status" class="form-control" value="{{$project->project_status}}"  placeholder="Enter Project Status">
                        @error('project_status')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Project Type</label>
                        <input type="text" name="project_type" class="form-control" value="{{$project->project_type}}"  placeholder="Enter Project Type">
                            @error('project_type')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Project Amount</label>
                        <input type="text" name="project_value" class="form-control" value="{{$project->project_value}}"  placeholder="Enter Project End Date">
                            @error('project_value')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Project URL</label>
                        <input type="text" name="project_url" class="form-control" value="{{$project->project_url}}"  placeholder="Enter Project Status">
                        @error('project_url')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Choose  Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" value="{{$project->image}}" id="customFile" required>
                        <label class="custom-file-label" for="customFile">Choose Project Image</label>
                    </div>
                    @error('image')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label></label>
                    <textarea name="description" rows="5" id="ckeditor" class="form-control">{{$project->description}}</textarea>
                    @error('description')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>

                {!! Form::submit('Update Project',['class'=>'btn btn-primary shadow']) !!}
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

