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
                <li class="breadcrumb-item active " aria-current="page">Upload Media (<a href="{{route('image.create')}}">Add Media</a>)</li>
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
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $image)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{asset('storage/gallery/images/'.$image->name)}}" class="img-fluid" width="100" alt=""></td>
                            <td><input type="hidden"><a data-url="{{asset('storage/gallery/images/'.$image->name)}}" id="copyImgurl" data-toggle="tooltip" data-placement="top" title="copy image url"><i style="font-size: 20px;" class="fa fa-cp text-info fa-regular fa-copy"></i></a></td>
                            <td>
                            <form method="POST" action="{{ route('image.destroy', $image) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                    <input name="_method" type="hidden" value="DELETE">

                                    <button CLASS="btn"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    <i class="fa-solid fa-clipboard"></i>
                    </tbody>
                </table>
               </div>

            </div>
            <div class="pagination-custom">
                {{ $images ?? ''->links() }}
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#copyImgurl').on('click', function (e) {
                e.defaultPrevented
                let $temp = $("<input>");
                $("body").append($temp);
               let url = $(this).data('url');
                $temp.val(url).select();
                document.execCommand("copy");
                $temp.remove();
                $('.fa-cp').removeClass('fa-copy')
                $('.fa-cp').addClass('fa-clipboard')
            })

        })
    </script>
@endsection
