@extends('frontend.index')
@section('content')

<section>

<div class="top-section">
    <div class="container">
        <div class="row">
        <div class="col-md-12 div-top-section">
          <p class="header-class">{{$activeCategory->name}}</p>
          <p> <a href="/">HOME</a> > <a href="{{route('front.products')}}">PRODUCT</a> > {{$activeCategory->name}}  </p>
        </div>
      </div>
    </div>
</div>
@php
  $url = route('front.product.category',$activeCategory);
@endphp

    <div class="main-body">
        <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('front')}}">Home</a></li>
                      <li class="breadcrumb-item"><a href="{{route('front.products')}}">Products</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{$activeCategory->name}}</li>
                  </ol>
                  </nav>
                @include('frontend.home.__partial.product.sidebar')
              </div>
              <style>
                .link-cat{
                  color:rgb(73, 72, 72);
                
                }
                .link-cat:hover{
                  color:rgb(73, 72, 72);
                }
                .btn-enq{
                  width: 100%;
                }
                
                .btn-enq i {
                  font-size: 15px;
                  margin-right: 3px;
                }
                
              </style>
              
              <div class="col-md-8">
                <div class="row">
                @include('frontend.home.__partial.product.searchbar')
                   @include('frontend.home.__partial.product.product')

                  @if($products->count() == 0)

                  <div class="col-md-12 text-danger">
                      Sorry No Result Found
                  </div>
                  @endif
                </div>
                 <div class="d-flex justify-content-center">
                {{ $products ?? ''->links() }} </div>
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

@section('scripts')
<script>
     $(document).ready(function(){
         $('#search-data').keyup(function(evt){
             evt.preventDefault();
               var search = $('#search-data').val();
               var url = "";
               var data= "data="+search;
               url = '{{ route('front.product.search') }}?'+data
               
               console.log(url);
               $.ajax({
                url: url,
                data:{search:search},
                type: 'GET',
                success:function(data){
                  if(!data.error){
                    $('.result-data').html(data);
                    $("#search-data")[0].rest();
                  }
                }
               });
           });

    });
</script>
<script>
$(document).ready(function(){
  $('#sort-by').click(function(){
    var sort = $('#sort-by').val();
    var loc = "{{$url}}";
    var url =  loc+'?sort='+sort;
    window.location.href = url;
  });
});
</script>
    
@endsection