<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&family=Roboto+Condensed:wght@300&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('frontend/asset/css/css.css')}} ">
<link rel="stylesheet" href="{{asset('frontend/asset/css/all.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Josefin+Sans&family=Poppins:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="asset/css/wow.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<style>
  .nav-top-fix-a{
box-shadow: -1px 15px 34px -31px rgba(0,0,0,0.93);
-webkit-box-shadow: -1px 15px 34px -31px rgba(0,0,0,0.93);
-moz-box-shadow: -1px 15px 34px -31px rgba(0,0,0,0.93);
}
</style>
 
             
<title></title>
@yield('scripts')
   
  </head>


  <body>
   
<style>
  </style>

<section class="header">
    <div class="navbar-top1">
      <p class="nav-link-top toplink"><i class="fas fa-phone"></i> +977 9845969704</span></p>
      
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light top-nav">
    <div class="container">
  <a class="navbar-brand top-nav-brand" href="#">"Electrician since 1998"</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link nav-link-top " href="#"><i class="fas fa-phone"></i> +977 9845969704</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link nav-link-top " href="#"><i class="fas fa-envelope"></i> info@acpower.com.np</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light bottom-nav" id="nav-top-fix">
    <div class="container">
  <a class="navbar-brand" href="{{ route('front') }}"><img src="{{asset('frontend/asset/acpower-logo.png')}}" height="50px" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fas fa-align-left"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link main-nav" href="{{ route('front') }}">HOME</a>
      </li>
       <li class="nav-item">
        <a class="nav-link main-nav" href=" {{route('front.about')}} ">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link main-nav" href=" {{ route('front.products')}}">SHOP</a>
      </li>
      <li class="nav-item main-nav">
        <a class="nav-link main-nav " href=" {{route('front.manufactures')}} ">MANUFACTURE</a>
      </li>
      
      <li class="nav-item main-nav">
        <a class="nav-link main-nav " href=" {{route('front.services')}} ">OUR SERVICE</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link main-nav" href="{{ route('front.enquiry') }}">CONTACT US</a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link main-nav" href="{{ route('front.contact') }}">CONTACT US</a>
      </li> --}}
    </ul>
  </div>
  </div>
</nav>
</section>

{{-- end of Header Section --}}

@yield('content')


<!-- footer section -->
  <section>
   <div class="top-footer">
     <div class="container">
       <div class="row">
         <div class="col-sm-12 col-md-4 col-lg-4">
           <img src="asset/logo-footer.png" height="30" alt="">
           <p>
             <br>
             Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.
           </p>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-4 col-f">
           <h3><span class="div-line">Useful Links</span></h3>
           <ul class="list-group list-group-flush dis">
            <li class="list-group-item "><a href="{{route('front')}}">Home</a></li>
            <li class="list-group-item"><a href="{{route('front.about')}}">About</a></li>
            <li class="list-group-item"><a href="{{route('front.contact')}}">Contact</a></li>
            <li class="list-group-item"><a href="{{route('front.enquiry')}}">Enquery</a></li>
            <li class="list-group-item"><a href="{{route('front.products')}}">Products</a></li>
          </ul>
         </div>
         <div class="col-sm-12 col-md-4 col-lg-4 col-f">
           <h3><span class="div-line">Contacts</span></h3>
           <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fas fa-phone"></i> +977 9845969704</li>
            <li class="list-group-item"><i class="fas fa-envelope"></i> info@abcn.com</li>
          </ul>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28268.571640025668!2d84.31325796718939!3d27.45350446076768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994f5c4c1be3559%3A0xab02289a2fb379e6!2zTWFkaSBNdW5pY2lwYWxpdHkg4KSu4KS-4KSh4KWAIOCkqOCkl-CksOCkquCkvuCksuCkv-CkleCkvg!5e0!3m2!1sen!2snp!4v1625990777227!5m2!1sen!2snp" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
         </div>
       </div>
       <div class="row line-f"></div>
       <br>
       <div class="row">
         <div class="col">
            <p class="footer-soc"> 
              <span class="soc-icon"><a href="#"><i class="fab fa-facebook"></i></a></span>
               <span class="soc-icon"><a href="#"> <i class="fab fa-instagram"></i></a></span>
               <span class="soc-icon"><a href="#"> <i class="fas fa-envelope"></i> </a></span>   
              </p>

        </div>
       </div>
     </div>
   </div>

   <div class="footer-bottom">
     <div class="container">
       <div class="row">
         <div class="col">
           <p class="p-footer">© Electrician 2021 - All rights reserved.
              <br> <span class="p-ff-d"><i> Site By <a href="#">Bikas chaudhary (+977 9845969704)</a></i> </span></p>
         </div>
       </div>

     </div>
   </div>

  </section>
 <script src="{{asset('frontend/asset/js/wow.js')}}"></script>
  
   <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
 
              </script>
              <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60eee5d1649e0a0a5ccc2ee6/1faij3g1c';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<script>
    document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('nav-top-fix').classList.add('fixed-top');
        document.getElementById('nav-top-fix').classList.add('nav-top-fix-a');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('nav-top-fix').classList.remove('nav-top-fix-a');
        document.getElementById('nav-top-fix').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
}); 
</script>
<!--End of Tawk.to Script-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>