@extends('frontend.index')
@section('content')

<section>


<div class="top-section">
    <div class="container">
        <div class="top-section-main">
            <div class="top-section-desc">
                <h5>Our Service</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
            </div>
        </div>
    </div>
</div>

    <div class="main-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                 <p class="text-center-s">"Our Service"</p> 
                <p class="text-center-s1">We deal with all range of electrical and electronics products from sales and supplies to maintenance and repairing at our end-user clients.</p>
                </div>
                @foreach ($services as $service)
                     <div class="col-md-12">
                    <div class="box-service">
                        <div class="row">

                            <div class="col-md-3"><img src="{{asset('storage/service/'.$service->coverImage)}}" class="img-fluid service_img" alt=""></div>
                            <div class="col-md-9"><h4> {{$service->title}} </h4> 
                                    <p class="service-des">
                                          {{$service->description}}
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


</section>
@endsection