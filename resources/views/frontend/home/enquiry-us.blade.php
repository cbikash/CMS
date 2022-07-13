@extends('frontend.index')
@section('content')

<section>

<div class="top-section">
    <div class="container">
        <div class="row">
        <div class="col-md-12 div-top-section">
         
          <p class="header-class">Contacts</p>
          <p> <a href="/">HOME</a> > CONTACT </p>
        </div>
      </div>
    </div>
</div>

 <div class="main-body">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <div class="contact-page">
                    <h2> <b> Drop Us a Line</b></h2>
                    <p>
                      Your email address will not be published. Required fields are marked *</p>
                    <hr>
                    @if (session('messageafter'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Thank you for messaging us.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                    @endif
                     {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\FrontendController@storemessage'])!!}
                     @csrf
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           
                            <input type="text" name="name" value="{{ old('name')}}" class="form-control" id="inputAddress" placeholder="Your Name *">
                         @error('name')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                        </div>
                        <div class="form-group col-md-6">
                            
                            <input type="text" name="address" value="{{old('address')}}" class="form-control" id="inputAddress2" placeholder="Your Address *">
                         @error('address')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                    </div>
                    <div class="form-row">
                        </div>
                        <div class="form-group col-md-6">
                            
                            <input type="email" name="email" value="{{old('email')}}" class="form-control" id="inputAddress2" placeholder="Your Email *">
                        @error('email')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                        </div>
                        <div class="form-group col-md-6">
                            
                            <input type="text" name="contact" value="{{old('contact')}}" class="form-control" id="inputAddress2" placeholder="Your Number *">
                             @error('contact')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                    </div>
                        </div>

                         <div class="form-group">
                        
                            <textarea class="form-control" name="message" placeholder="Your Message *" id="exampleFormControlTextarea1" rows="4">{{old('message')}}</textarea>
                             @error('message')
                            <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                            @enderror
                        </div>
   
                         {!! Form::submit('Send Message',['class'=>'btn-message shadow']) !!}
                        {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="address-data">
                    <h6><b>Address</b> </h6>
                    <ul><li> <i class="fas fa-map-marker-alt"></i>Mills Area, Kshetrapur,
                    Bharatpur- 02, Chitwan, Nepal</li></ul>

                    <h6><b>Contact Person</b> </h6>
                    <ul><li><i class="fas fa-user"></i> Rajendra Chaudhary</li>
                        <li><i class="fas fa-phone"></i> +977- 9845248098, 9845178110</li>
                        <li><i class="fas fa-envelope"></i> info@acpower.com.np</li>
                        <li><i class="fas fa-blog"></i>www.acpower.com.np</li>
                    </ul>
                    <h6><b>India Office</b> </h6>
                    <ul>
                        <li> <b>A. P. Enterprises</b></li>
                        <li><i class="fas fa-user"></i>Jeet Kumar Chaudhary</li>
                        <li><i class="fas fa-map-marker-alt"></i>
                              8/20, Gali No. 2, Ravinagar
                                Nearby Lady Florence Convent School,
                                Basai Road, Gurgaon (Hr.)
                          </li>
                          <br>
                        <li><i class="fas fa-phone"></i>+91- 9811443037</li>
                        
                    </ul>

                </div>

            </div>
        </div>
    </div>
 </div>
  <div class="container-map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.6170661813053!2d84.32170838650818!3d27.45004244880658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994f5117ab32c1f%3A0xa2a87b2386d40dd4!2sMadhusudan%20Pokhrels%20home!5e0!3m2!1sen!2snp!4v1626000581139!5m2!1sen!2snp" style="border:0; margin-top: 50px;margin-bottom: 0; width: 100%; min-height: 100px; height: 400px; " allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>
@endsection