@extends('frontend.index')
@section('content')
<section>
  <div class="top-section">
    <div class="container">
       <div class="row">
        <div class="col-md-12 div-top-section">
          <p class="header-class">{{$manufacture->title}}</p>
          <p> <a href="/">HOME</a> > <a href="{{route('front.manufactures')}}">Manufacture</a> > {{$manufacture->title}}  </p>
        </div>
      </div>
    </div>
</div>


 <div class="main-body">
     <div class="container">
         <div class="row">
            <div class="col-md-3">
                 <h3> <b>Our manufactures </b></h3>
                 <ul class="list-group list-group-flush">
                   @foreach ($manufactures as $item)
                       <li class="list-group-item"><a href="{{route('front.manufacture',$item)}}"> {{$manufacture->title}} </a></li>
                   @endforeach
                </ul>

             </div>

             <div class="col-md-6">

            <div class="colver-img">
                <h3 class="title-product-man"><a href="#"><b>{{$manufacture->title}}</b></a> </h3> 
                      
                <img src="{{asset('storage/gallery/manufacture/'.$manufacture->image)}}" class="img-fluid img-cover" alt="{{$manufacture->title}}">
                <div class="row">
                    <div class="col-md-12">
                        <h3>{{$manufacture->title}}</h3>
                    </div>
                </div>
                <hr>

                <h4>Description</h4>
                <p>
                    {{$manufacture->description}}
                </p>
            </div>
             </div>
             <style>
               .title-product-man b{
                 border-bottom: 2px solid rgb(212, 105, 34);
               }
               .title-product-man a:hover{
                 text-decoration: none;

               }
                 .div-col-usefullink{
                     height: 248px;
                     margin: 0;
                     padding: 0px 20px;
                     padding-top: 10px;
                     color: white;
                     background-color: #13202a;
                 }
                 .div-col-usefullink li{
                     color: inherit;
                     background-color: inherit;
                 }
                 .div-col-usefullink li a{
                     color: white;
                 }
                 .div-col-usefullink li a:hover{
                     margin-right: 0 !important;
                     color: rgb(191, 194, 243);
                 }
                 .div-col-usefullink h4{
                     border-bottom: 1px solid #ffffff;
                 }
                 .mes-useful{
                     text-align: center;
                     padding: 5px;
                     color: #ffffff;
                     background-color: #00254a;
                 }
                 .mes-useful a{
                   color: #fff;
                 }
                 .product-useful a{
                   color: #fff;
                 }
                .product-useful{
                    text-align: center;
                     padding: 5px;
                     color: #ffffff;
                     background-color: #ff4a17;
                 }
             </style>
             <div class="col-md-3">
                 <div class="row">
                     <div class="col-md-12 div-col-usefullink">
                        <h4>Useful Links</h4>
                        <ul class="list-group">
                        <li class="list-group-item"><a href="{{route('front.manufactures')}}">Manufactures</a></li>
                        <li class="list-group-item"><a href="{{route('front.services')}}">Services</a></li>
                        <li class="list-group-item"><a href="{{route('front.about')}}">About</a></li>
                        <li class="list-group-item"><a href="{{route('front')}}">Home</a></li>
                        </ul>
                     </div>
                     <div class="col-md-6 mes-useful"><a href="{{route('front.enquiry')}}">Message</a> </div>
                    <div class="col-md-6 product-useful"><a href="{{route('front.products')}}">Shop</a></div>
                
                 </div>
             </div>

          {{-- <div class="col-md-12">
            <div class="colver-img">
                <img src="{{asset('storage/gallery/'.$manufacture->image)}}"  class="img-fluid img-cover" alt="">
                <div class="row">
                    <div class="col-md-8">
                        <h3>{{$manufacture->title}}</h3>
                    </div>
                </div>
                <hr>
                <h4>Description</h4>
                <p>
                    {{$manufacture->description}}
                </p>
            </div>
             </div> --}}

         </div>
     </div>
</div>

</section>
    
      

@endsection