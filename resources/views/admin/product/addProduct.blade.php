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
                <li class="breadcrumb-item"><a href=" {{ route('product.index') }} ">Menu</a></li>
                <li class="breadcrumb-item active " aria-current="page">Create Menu</li>
            </ol>
        </nav>
        </div>

        <div class="col-md-12 col-space">
            <h3>Add Menu</h3>
            <hr>
            <form method="POST" action="{{ route('product.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">Title</label>
                    <input type="text" name="title" class="form-control" id="inputEmail4" value="{{old('title')}}" placeholder="Enter Course Title">
                        @error('title')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Price</label>
                        <input type="text" name="price" class="form-control" id="inputEmail4" value="{{old('price')}}" placeholder="Price">
                        @error('price')
                        <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Choose Cover Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="coverImage" value="{{old('coverImage')}}" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    @error('coverImage')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label></label>
                    <textarea name="description" rows="5" id="ckeditor" class="form-control">{{old('description')}}</textarea>
                    @error('description')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                </div>
                <select id="category" name="category" class="form-control">

                </select>


                <div class="form-group">
                    <input type="submit" class="btn btn-success shadow" />
                </div>
        </div>
    </div>
</div>

<script>
    ClassicEditor
        .create(document.querySelector( '#ckeditor' ))
        .then( editor => {
            window.editor = editor;
        } )
        .catch( error => {
            console.error( error );
        });
</script>
<script>



</script>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var nestedCategories = {!! json_encode($categories) !!};

            function formatCategory(category) {
                if (!category.id) {
                    return category.text;
                }

                return $('<span>' + category.text + '</span>');
            }

            function formatCategoryChildren(category) {
                if (!category.id) {
                    return category.text;
                }

                var $category = $('<span>' + category.text + '</span>');
                var $children = $('<span class="children"> (' + category.children.length + ' children)</span>');
                $category.append($children);
                return $category;
            }

            function populateSelect(data) {
                $('#category').empty(); // Clear any existing options
                $('#category').append('<option></option>'); // Add an empty option

                $.each(data, function(index, category) {
                    var option = new Option(category.text, category.id, false, false);
                    $('#category').append(option);
                });

                $('#category').select2({
                    placeholder: 'Select a category',
                    allowClear: true,
                    templateResult: formatCategory,
                    templateSelection: formatCategoryChildren
                });
            }

            populateSelect(nestedCategories);
        });
    </script>


@endsection

