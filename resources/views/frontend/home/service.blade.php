@extends('frontend.index')
@section('content')

<section>


<div class="top-section">
    <div class="container">
        <div class="row">
        <div class="col-md-12 div-top-section">
         
          <p class="header-class">Services</p>
          <p> <a href="/">HOME</a> > SERVICES </p>
        </div>
      </div>
    </div>
</div>
<style>
  .service_img-next{
    width: 100%;
    filter: brightness(0.50);
    height: 300px;
    border-radius: 13px;
    position: relative;
  }
  .content-service{
    left: 50px;
    right: 30px;
    color: #fff;
    position: absolute;
    top: 80px;
  }
  .content-service h3{
    font-weight: 700;
    font-size: 2em;
  }
  .content-service p{
    display: none;
  }
  .content-service span{
    position: relative;
    font-weight: lighter;
    font-size: 2em;
    top: 40px;
  }
  .background-white-maker{
    width: 100%;
    height: 300px;
    border-radius: 13px;
    position: relative;
    box-shadow: 0px 0px 21px -2px rgba(0,0,0,0.53);
    -webkit-box-shadow: 0px 0px 21px -2px rgba(0,0,0,0.53);
    -moz-box-shadow: 0px 0px 21px -2px rgba(0,0,0,0.53);
  }

  .cont-serv-title{
    transition: 1s;
    color: rgb(0, 0, 0);
  }

  .cont-serv-p{
    transition: 1s;
    margin-top: 10px;
    display: block !important;
    color: rgb(107, 107, 107);
  }
  .fas-class{
    transition: 1s;
    display: none;
  }
  .next-img{
    transition: 1s;
    display: none;
  }
  .new-service-style{
    margin: 20px 0;
  }
  
  .contact-class{
    background-image: url("{{asset('frontend/asset/slider1.jpeg')}}");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-blend-mode: multiply;
    background-color: rgba(0, 0, 0, 0.5);
    width: 100%;
    color: #ffffff;
    padding: 30px 0;
  }

  .col-number{
    background-color: hsl(206, 37%, 12%);
    border-radius: 18px;
    padding: 100px 0;
    color: white;
    margin: 20px 0;
    position: relative;
  }
  .col-number h3{
    font-size: 3em;
    top:-60px;
    color: #ff4a17;
  }

  .col-number span{
    color: rgb(56, 56, 56);
  }
  .col-number p{
    font-size: 1em;
    font-weight: bold;
  }
  @media only screen and (max-width: 990px) { 
   .col-number span{
     position: absolute;
     left: 55%;
     top:-15px;
   }
   .span-c1{
     left: 56% !important;
   }
   
  }
  @media only screen and (min-width: 990px){

  .col-number h3{
    left: 49%;
    position: absolute;
  }
  .col-number span{
    position: absolute;
    left: 70%;
    top:-75px;
  }
  .col-number p{
    font-size: 1em;
    font-weight: bold;
    position: absolute;
    left: 40% ;
    
  }}
</style>
    <div class="main-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                 <p class="text-center-s">"Our Service"</p> 
                <p class="text-center-s1">We deal with all range of electrical and electronics products from sales and supplies to maintenance and repairing at our end-user clients.</p>
                </div>

                @foreach ($services as $service)
                <div class="col-md-4 new-service-style" id="new-{{$loop->iteration}}"> <a  href="{{route('front.service',$service)}}">
                  <nav class="service-top"></nav>
                  <img  src="{{asset('storage/service/'.$service->coverImage)}}" class="img-fluid service_img-next " alt="">
                  <div class="content-service">
                    <h3 class=" addt"> {{$service->title}} </h3>
                    <p class=" addcon"> {{ Str::limit($service->description, 150)}} </p>
                    <span><i class="fas fa-long-arrow-alt-right"></i></span>
                  </div>
                 </a>
                </div>


                <script>
                $(document).ready(function(){
                  $("#new-{{$loop->iteration}}").hover(function(){
                    
                    $('#new-{{$loop->iteration}}').find('h3').addClass('cont-serv-title');
                    $('#new-{{$loop->iteration}}').find('p').addClass('cont-serv-p');
                    $('#new-{{$loop->iteration}}').find('i').addClass('fas-class');
                    $('#new-{{$loop->iteration}}').find("nav").addClass('background-white-maker');
                    $('#new-{{$loop->iteration}}').find('img ').addClass('next-img');

                    }, function(){
                    $('#new-{{$loop->iteration}}').find('h3').removeClass('cont-serv-title');
                    $('#new-{{$loop->iteration}}').find('p').removeClass('cont-serv-p');
                    $('#new-{{$loop->iteration}}').find('i').removeClass('fas-class');
                    $('#new-{{$loop->iteration}}').find('nav').removeClass('background-white-maker');
                    $('#new-{{$loop->iteration}}').find('img').removeClass('next-img');

                  });
                });
                </script>


               @endforeach
            </div>
        </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 col-number">
          <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-12 col-lg-3">
              <h3  class="text-center-s">15</h3>
              <span class="text-center-s1" ><i class="fas fa-plus"></i></span>
              <p class="text-center-s1" >YEARS OF 
                <br> EXPERIENCE</p>
            </div>
            <div class="col-md-3 col-sm-12 col-lg-3">
              <h3  class="text-center-s">250</h3>
              <span class="text-center-s1 span-c1" style="left:78%" ><i class="fas fa-plus"></i></span>
              <p class="text-center-s1 " style="left:50%;" >TRUSTED
                <br> CLIENT</p>
            </div>
            <div class="col-md-3 col-sm-12 col-lg-3">
              <h3  class="text-center-s">20</h3>
              <span class="text-center-s1" ><i class="fas fa-plus"></i></span>
              <p class="text-center-s1" >VISITED
                <br>CONFERENCES</p>
            </div>
            <div class="col-md-3 col-sm-12 col-lg-3">
              <h3  class="text-center-s">10</h3>
              <span class="text-center-s1" ><i class="fas fa-plus"></i></span>
              <p class="text-center-s1" >MASTER
                <br>CERTIFICATION</p>

            </div>
          </div>
          </div>

        </div>
      </div>
    </div>

  <div class="contact-class">
    <div class="firstcontainer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center-s">WHY US</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
      </div>
    </div>
    </div>
   </div>
</section>
@endsection