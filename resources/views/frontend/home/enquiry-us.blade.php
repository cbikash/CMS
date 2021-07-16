@extends('frontend.index')
@section('content')

<section>

<div class="top-section">
    <div class="container">
        <div class="top-section-main">
            <div class="top-section-desc">
                <h5>Message us</h5>
                <p>If you have any query.please message us we will response you as soon as possible.</p>
            </div>
        </div>
    </div>
</div>

 <div class="main-body">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <div class="contact-page">
                    <h2>Message Us</h2>
                    <p>If you have any enquery about us. Feel free to Message us. we will respond you as soon as possible.</p>
                    <br>
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
                        <div class="form-group">
                            <label for="inputAddress">Name</label>
                            <input type="text" name="name" value="{{ old('name')}}" class="form-control" id="inputAddress" placeholder="Enter Your Name">
                         @error('name')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address</label>
                            <input type="text" name="address" value="{{old('address')}}" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                         @error('address')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Email</label>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control" id="inputAddress2" placeholder="Enter you Email">
                        @error('email')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Contact</label>
                            <input type="text" name="contact" value="{{old('contact')}}" class="form-control" id="inputAddress2" placeholder="Contact Number">
                             @error('contact')
                    <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                    @enderror
                        </div>
                         <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Message</label>
                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="4">{{old('message')}}</textarea>
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
                    <ul><li>Mills Area, Kshetrapur,
                    Bharatpur- 02, Chitwan, Nepal</li></ul>

                    <h6><b>Contact Person</b> </h6>
                    <ul><li>Rajendra Chaudhary</li>
                        <li>+977- 9845248098, 9845178110</li>
                        <li>info@acpower.com.np</li>
                        <li>www.acpower.com.np</li>
                    </ul>
                    <h6><b>India Office</b> </h6>
                    <ul>
                        <li> <b>A. P. Enterprises</b></li>
                        <li>Jeet Kumar Chaudhary</li>
                        <li>
                              8/20, Gali No. 2, Ravinagar
                                Nearby Lady Florence Convent School,
                                Basai Road, Gurgaon (Hr.)
                          </li>
                          <br>
                        <li>+91- 9811443037</li>
                        
                    </ul>

                </div>

            </div>
        </div>
    </div>
 </div>
</section>
@endsection