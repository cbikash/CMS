@extends('frontend.index')
@section('content')


<section>

<div class="top-section">
    <div class="container">
        <div class="top-section-main">
            <div class="top-section-desc">
                <h5>Enquiry</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
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
                    <form>
                        <div class="form-group">
                            <label for="inputAddress">Name</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Email</label>
                            <input type="email" class="form-control" id="inputAddress2" placeholder="Enter you Email">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Contact</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Contact Number">
                        </div>
                         <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                    
                        <button type="submit" class="btn btn-success">Send Enquery</button>
                        </form>
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