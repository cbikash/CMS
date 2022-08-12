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
                    <li class="breadcrumb-item active " aria-current="page">Media (<a href="{{route('image.index')}}">Media List</a>)</li>
                </ol>
            </nav>
        </div>

        <div class="col-sm-12 col-lg-12 col-xl-12">
            <div class="body-content" style="text-align: center">
                <h3 class="text-info">Upload Media for you websites</h3>
                <br>
                <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                    @csrf
                    <div>
                        <h4>Upload Multiple Image By Click On Box</h4>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        Dropzone.autoDiscover = false;
        var dropzone = new Dropzone('#image-upload', {
            thumbnailWidth: 200,
            maxFilesize: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        });
    </script>
@endsection
