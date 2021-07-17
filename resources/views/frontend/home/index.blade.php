@extends('frontend.index')
@section('content')
<section>
<div class="carousel-div">
<div id="carouselExampleIndicators" class="carousel slide carousel-div1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 img-c" src="{{asset('frontend/asset/slider1.jpeg')}}" alt="First slide">
       <div class="carousel-caption carousel-caption1  d-none d-md-block">
         <div class="coursole-p">
          <h1 class="text-info bold animate__animated animate__bounce"> <b>Professanal Service</b> </h1>
           <p class="animate__animated animate__lightSpeedInLeft">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          <br> <a class="btn-caro animate__animated animate__lightSpeedInRight" href="#">Contact us</a><a class="btn-caroI animate__animated animate__lightSpeedInRight" href="#">Our Service</a>
         </div>
    </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-c" src="{{asset('frontend/asset/slider1.jpeg')}}" alt="Second slide">
       <div class="carousel-caption carousel-caption2  d-none d-md-block">
         <div class="coursole-p">
          <h1 class="text-success bold animate__animated animate__bounce"> <b>Professanal Service</b> </h1>
           <p class="animate__animated animate__lightSpeedInLeft">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          <br> <a class="btn-caro animate__animated animate__lightSpeedInRight" href="#">Contact us</a> <a class="btn-caroI animate__animated animate__lightSpeedInRight" href="#">Our Service</a>
         </div>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-c" src="{{asset('frontend/asset/slider1.jpeg')}}" alt="Third slide">
      <div class="carousel-caption carousel-caption3 d-none d-md-block">
     <div class="coursole-p">
          <h1 class="text-success bold animate__animated animate__bounce"> <b>Professanal Service</b> </h1>
           <p class="animate__animated animate__lightSpeedInLeft">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          <br> <a class="btn-caro animate__animated animate__lightSpeedInRight" href="#">Contact us</a> <a class="btn-caroI animate__animated animate__lightSpeedInRight" href="#">Our Service</a>
         </div>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</section>

<!-- Main Section -->

<section >
  <div class="main-body">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-lg-6 wow slideInLeft"  data-wow-duration="2s" data-wow-delay="1s">
          @foreach ($abouthome as $about)
            <h4> <b>{{$about->title}}</b></h4><br>
           <p>{{ Str::limit($about->content, 500)}}</p>
          <br> <a href="{{route('front.about')}}" class="btn-readmore">Read More</a> <br> <br>
        
          @endforeach
        </div>
        <div class="col-md-6 col-sm-12 col-lg-6 wow slideInRight"  data-wow-duration="2s" data-wow-delay="1s">
          <img src="{{asset('frontend/asset/cover.jpg')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="section-callI">
  <div class="section-call">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
        <h3>Complete Residential and Commercial Plumbing & Drain Services
in San Francisco, Albany, Brisbane, Dublin and Palo Alto.</h3>
      </div>
      <div class="col-md-2">
        <br>
        <a href="{{route('front.enquiry')}}" class="btn-call">GET A CALL</a>

      </div>
      </div>
    </div>

  </div>
  </div>


  <div class="main-body">
    <div class="container">


      <div class="row product-section wow bounceInDown" data-wow-delay="1S">
        <div class="col-md-12">
          <h4 class="title-product"> <b> OUR PRODUCT</b></h4> <a href="{{route('front.products')}}" class="btn-readmore btn-right float-right">All Product</a>
        </div>
        <style>
          .card-body p{
            text-align: center;
          }
          .card-title{
            font-size: 20px;
            font-weight: bold;
          }
        </style>

        @foreach($products as $product)
            <div class="col-md-3">
                 <a href="{{route('front.product', $product)}}" class="prod-a">
                    <div class="card-product">
                    <div class="card" style="width: 100%;">
                    <img class="card-img-top" style="height: 140px;" src="{{asset('storage/gallery/'.$product->coverImage)}}" alt="Card image cap">
                    <div class="card-body align-content-center">
                    <p class="card-title text-primary">{{$product->title}}</p>
                    <p class="text-secondary">NRP {{$product->price}} Per {{ $product->unit}} </p>
                    <p>{{ Str::limit($product->description, 60)}}</p>
                   <p class="a-p-enq"> <a class="btn-enq" href="#" data-toggle="modal" data-target="#{{$product->slug}}"> <i class="fas fa-info"> </i> Enquire</a></p>
                </div>
                </div>
                </div>
                </a>
            </div>
        <!-- Modal -->
        <div class="modal fade text-muted" id="{{$product->slug}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-muted bold" id="exampleModalLongTitle">Enquire To Product: <u><a href="{{route('front.product', $product)}}">{{$product->title}}</a></u></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                     {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\FrontendController@storeenquery'])!!}
                     @csrf
                     <div class="form-row">
                       <div class="form-group col-md-6">
                            <label for="inputAddress">Name</label>
                            <input type="text" name="name" required value="{{ old('name')}}" class="form-control" id="inputAddress" placeholder="Enter Your Name">
                         @error('name')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                        </div>
                         <div class="form-group col-md-6">
                            <label for="inputAddress2">Address</label>
                            <input type="text" name="address" required value="{{old('address')}}" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                         @error('address')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                        </div>

                     </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                            <label for="inputAddress2">Email</label>
                            <input type="email" name="email" required value="{{old('email')}}" class="form-control" id="inputAddress2" placeholder="Enter you Email">
                        @error('email')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Contact</label>
                            <input type="text" name="phone" required value="{{old('contact')}}" class="form-control" id="inputAddress2" placeholder="Contact Number">
                             @error('contact')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                        </div>

                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                            <label for="inputAddress2">Product Name</label>
                            <input type="text"  value="{{$product->title}}" disabled class="form-control" id="inputAddress2">
                            <input type="hidden" value="{{$product->id}}" name="product_id">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Quntity</label>
                            <input type="text" name="quantity" required value="{{old('quantity')}}" class="form-control" id="inputAddress2" placeholder="Quantiy">
                             @error('contact')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                        </div>

                        </div>
                         <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Message</label>
                            <textarea class="form-control" name="message" value="no thing" id="exampleFormControlTextarea1" rows="2">{{old('message')}}</textarea>
                             @error('message')
                            <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                            @enderror
                        </div>
                        
              </div>
              <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> --}}
                 {!! Form::submit('Send Enquiry',['class'=>'btn-message shadow']) !!}
                        {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  
        <div class="col-color">
            <p>NEED SERVICE? GIVE US A CALL TODAY AT</p>
            <p><i class="fas fa-phone"></i> +977 9845969704</p>
        </div>


        <div class="container">
          <div class="row">
             <div class="col-md-12 col-title-w">WHY CHOOSE US </div>

             <div class="col-md-4">
               <div class="card card-s text-center">
                  <img class="card-img-w" style="width: 40px;" src="{{asset('frontend/asset/c1.png')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"> <b>NO EXTRA CHARGE</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
             </div>
              <div class="col-md-4">
               <div class="card card-s text-center">
                  <img class="card-img-w"src="{{asset('frontend/asset/c2.png')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"> <b>24/7 emergency service</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
             </div>
              <div class="col-md-4">
               <div class="card card-s text-center">
                  <img class="card-img-w"src="{{asset('frontend/asset/c3.png')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"> <b>Licensed & insured</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
             </div>
              <div class="col-md-4">
               <div class="card card-s text-center">
                  <img class="card-img-w"src="{{asset('frontend/asset/c4.png')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"> <b>Special Offers</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
             </div>
             <div class="col-md-4">
               <div class="card card-s text-center">
                  <img class="card-img-w"src="{{asset('frontend/asset/c5.png')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"> <b>Customer Satisfaction</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
             </div>
             <div class="col-md-4">
               <div class="card card-s text-center">
                  <img class="card-img-w"src="{{asset('frontend/asset/c6.png')}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"> <b>On Time Service</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
             </div>
          </div>
        </div>
   
  </div>
</section>
@if (session('message'))
  <script>
    $(document).ready(function(){
      alert("Thank you for Enquery will contact you very soon.")
    })
  </script>                 
 @endif


@endsection