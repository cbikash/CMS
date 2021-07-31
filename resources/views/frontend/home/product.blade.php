@extends('frontend.index')
@section('content')


<section>

<div class="top-section">
    <div class="container">
        <div class="row">
        <div class="col-md-12 div-top-section">
         
          <p class="header-class">Products</p>
          <p> <a href="/">HOME</a> > PRODUCTS </p>
        </div>
      </div>
    </div>
</div>

    <div class="main-body">
        <div class="container">
            <div class="row">
              <div class="col-md-4">
                    <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('front')}}">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">All Product</li>
                  </ol>
                  </nav>
                @include('frontend.home.__partial.product.sidebar')
              </div>
              <style>
                .top-search{
                  margin-top: 5px;
                }
              </style>
              <div class="col-md-8">
                <div class="row">
                
                @include('frontend.home.__partial.product.searchbar')
                </div>

                <div class="row result-data">
                  @include('frontend.home.__partial.product.product')

                  @if($products->count() == 0)

                  <div class="col-md-12 text-danger">
                      Sorry No Result Found
                  </div>
                  @endif
                </div>
                <div class="d-flex justify-content-center">
                
                {{ $products ?? ''->links() }}</div>
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
    var url = '{{route("front.products")}}?sort='+sort;
    window.location.href = url;
  });
});
</script>
    
@endsection