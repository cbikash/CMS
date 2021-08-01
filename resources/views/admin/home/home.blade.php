@extends('layouts.admin')
@section('content')
<div class="boxes">
<div class="row">
    <div class="col-md-4">
        <div class="box">

            <div class="row">
                <div class="col">
                    <div class="box-header">
                        <h5>Products</h5>
                    </div>
                    <div class="box-content">
                        <p class="text-info"><a href="{{route('product.index')}}">{{$product}}</a> </p>
                    </div>
                </div>

                <div class="col">
                    <i class="fas fa-copy icon-box text-info"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="box">

            <div class="row">
                <div class="col">
                    <div class="box-header">
                        <h5 class="text-info">Messages</h5>
                    </div>
                    <div class="box-content">
                        <p class="text-info"> <a href="{{route('message.index')}}">{{$message}} </a> </p>
                    </div>
                </div>

                <div class="col">
                    <i class="fas fa-copy icon-box text-info"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="box">

            <div class="row">
                <div class="col">
                    <div class="box-header">
                        <h5 class="text-primary">Enquries</h5>
                    </div>
                    <div class="box-content">
                        <p class="text-primary"> <a href="{{route('enquiry.index')}}">{{$enquiry}}</a> </p>
                    </div>
                </div>

                <div class="col">
                    <i class="fas fa-copy icon-box text-primary"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="box">

            <div class="row">
                <div class="col">
                    <div class="box-header">
                        <h5 class="text-secondary">Manufactures</h5>
                    </div>
                    <div class="box-content">
                        <p class="text-secondary"> <a href="{{route('manufacture.index')}}">{{$manufacture}}</a></p>
                    </div>
                </div>

                <div class="col">
                    <i class="fas fa-copy icon-box text-secondary"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="box">

            <div class="row">
                <div class="col">
                    <div class="box-header">
                        <h5 class="text-success">Total About</h5>
                    </div>
                    <div class="box-content">
                        <p class="text-success"> <a href="{{route('about.index')}}">{{$about}}</a> </p>
                    </div>
                </div>

                <div class="col">
                    <i class="fas fa-copy icon-box text-success"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="box">

            <div class="row">
                <div class="col">
                    <div class="box-header">
                        <h5 class="text-danger">Total Service</h5>
                    </div>
                    <div class="box-content">
                        <p class="text-danger"> <a href="{{route('service.index')}}">{{$service}}</a></p>
                    </div>
                </div>

                <div class="col">
                    <i class="fas fa-copy icon-box text-danger"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="box">

            <div class="row">
                <div class="col">
                    <div class="box-header">
                        <h5 class="text-info">Total Category</h5>
                    </div>
                    <div class="box-content">
                        <p class="text-info"> <a href="{{route('category.index')}}"> {{$category}}</a></p>
                    </div>
                </div>

                <div class="col">
                    <i class="fas fa-copy icon-box text-info"></i>
                </div>
            </div>
        </div>
    </div>
    

</div>
<div class="row">
    <div class="col-md-12">
        <br>
        <iframe src="https://www.hamropatro.com/widgets/calender-full.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"
    style="border:none; overflow:hidden; width:800px; height:840px;" allowtransparency="true"></iframe>

    </div>
</div>

</div>
@endsection