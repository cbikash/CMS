@extends('frontend.index')
@section('content')

<div class="top-section">
    <div class="container">
        <div class="row">
        <div class="col-md-12 div-top-section">
          <p class="header-class">About</p>
          <p> <a href="/">HOME</a> > ABOUT </p>
        </div>
      </div>
    </div>
</div>

<section>
<div class="colver-img">
    <img src="asset/about_1.jpg" class="img-fluid img-cover" alt="">
</div>
 <div class="main-body">
    <div class="container">
         <div class="row">
           
             <div class="col-md-12 about-first">
                 <h3> <b> "All Range of Electrical & Electronics Products" </b> </h3>
                 <p>We provide all range of electrical and electronics power solutions from sales to maintenance. Our top level engineers with more than 25 years of experience in regarding field will give you full assurance of your electrical machines to work.</p>
             </div>
         </div>
         <hr>
         <div class="row">
             
           <div class="col-md-5 about-section">
               <div class="row">
                   @foreach($aboutsFeature as $aboutf)
                   <div class="col-md-12">
                       <h3><b>{{$aboutf->title}}</b></h3>
                        <p>
                            {{$aboutf->content }}
                       </p>
                       
                   </div>
                   @endforeach
               </div>
             
             </div>
           <div class="col-md-7">
             <div class="row">
                 @foreach ($aboutsNormal as $aboutn)
                     <div class="col-md-12">
                 <div class="about-content">
                   <h5><b>{{ $aboutn->title }}</b></h5>
                   <p> {{$aboutn->content}} </p>
                 </div>
               </div>
                 @endforeach
               
             </div>

           </div>
         </div>
     </div>
 </div>
</section>
    
@endsection