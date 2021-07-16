@extends('frontend.index')
@section('content')


<section>

<div class="top-section">
    <div class="container">
        <div class="top-section-main">
            <div class="top-section-desc">
                <h5>Our Products</h5>
                <p>We Deal with Multiple type of electric and elotronics products</p>
            </div>
        </div>
    </div>
</div>

    <div class="main-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                 <p class="text-center-s">"Our products"</p> 
                 <p class="text-center-s1">We deal with all range of electrical and electronics products from sales and supplies to maintenance and repairing at our end-user clients.</p>
                </div>

                <div class="col-md-12">
                    <div class="center-search">
                      <form class="form-inline form-serarch" id="search-form">
                        <input class="form-control serach-form col-md-8 col-sm-8" type="search" id="search-data" placeholder="Search" aria-label="Search">
                        <input type="submit" class="btn btn-ser btn-outline-success serach-form  col-md-2 col-sm-2 " id="btn-search" Value="Search" >
                        </form>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-md-4">
                <ul class="list-group">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('front')}}">Home</a></li>
                      <li class="breadcrumb-item"> <a href="{{route('front.products')}}">Product</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{$activeCategory->name}}</li>
                    </ol>
                  </nav>
                   <li class="list-group-item bg-secondary text-white active">Product Categories</li>
                  @foreach ($categories as $category)
                      <li class="list-group-item "><a href="{{route('front.product.category',$category)}}">{{$category->name}}</a></li>
                  @endforeach
                </ul>
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
                <div class="row result-data">


                  @foreach ($products as $product)
                    
                  
                        <div class="col-md-4">
                                      <a href="{{route('front.product', $product)}}" class="prod-a">
                                      <div class="card-product">
                                      <div class="card" style="width: 100%;">
                                      <img class="card-img-top" style="height: 140px;" src="{{asset('storage/gallery/'.$product->coverImage)}}" alt="Card image cap">
                                      <div class="card-body center">
                                          <h5 class="card-title">{{$product->title}}</h5>
                                          <h6 class="card-subtitle mb-2 text-muted">NRP {{$product->price}} Per {{$product->unit}}</h6> 
                                          <br>
                                          <p class="a-p-enq"> <a class="btn-enq" href="#"> <i class="fas fa-info"> </i> Enquiry</a></p>
                                      </div>
                                      </div>
                                      </div>
                                      </a>
                                  </div>

                                    
                  @endforeach

                  @if($products->count() == 0)

                  <div class="col-md-12 text-danger">
                      Sorry No Result Found
                  </div>


                  @endif
                </div>
              </div>
            </div>
            </div>
            {{ $products ?? ''->links() }}
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
     $(document).ready(function(){

         $('#btn-search').click(function(evt){
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
    
@endsection