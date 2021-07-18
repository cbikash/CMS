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
              <div class="col-md-4">
                <ul class="list-group">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('front')}}">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">All Product</li>
                    </ol>
                  </nav>
                   <li class="list-group-item category-title text-white">Product Categories</li>
                  @foreach ($categories as $category)
                      <li class="list-group-item "><a class="link-cat" href="{{route('front.product.category',$category)}}"><i class="fas fa-hand-point-right hide-normal"></i>  {{$category->name}}</a></li>
                  @endforeach
                </ul>
              </div>
              <style>
                .top-search{
                  margin-top: 5px;
                }
               
              </style>
              <div class="col-md-8">
                <div class="row">
                <div class="col-md-12 top-search">
                    <div class="row">
                      <div class="col-md-8">
                        <form class="form-inline" id="search-form">
                        <input class="form-control serach-form col-md-8 col-sm-8" type="search" id="search-data" placeholder="Search" aria-label="Search">
                        <input type="submit" class="btn btn-ser btn-outline-success btns btn-search col-md-4" id="btn-search" Value="Search" >
                        </form>
                      </div>
                      <div class="col-md-4">
                      <div class="sort">
                      <div class="form">
                        <form action="">
                          <div class="form-group">
                            <label class="sr-only" for="sort-by">Sort By</label>
                            <select class="form-control" id="sort-by" name="sort-by">
                              <option value="">Sort By</option>
                              <option value="name">Highest Price</option>
                              <option value="price">Lowest Price</option>
                              <option value="rating">Accending Order</option>
                              <option value="desc">Descending Order</option>
                            </select>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                  </div>
                    <hr>
                  </div>
                </div>
                <div class="row result-data">
                  @foreach ($products as $product)
                    
                        <div class="col-md-4">
                          <a href="{{route('front.product', $product)}}" class="prod-a">
                             <div class="card-product">
                              <div class="card" style="width: 100%;">
                              <img class="card-img-top" style="height: 140px;" src="{{asset('storage/gallery/'.$product->coverImage)}}" alt="Card image cap">
                            <span class="sell-product">SELL</span>
                              <div class="card-body card-bd center">
                                  <h5 class="card-title card-tit">{{$product->title}}</h5>
                                  <h6 class="card-subtitle  sb-title mb-2 text-muted">Rs {{$product->price}}</h6>
                                  
                                  <h6 class="card-subtitle sb-titleoprice mb-2">NRP <s>200000</s></h6>
                        
                                  <p class="a-p-enq"> <a class="btn-enq" href="#" data-toggle="modal" data-target="#{{$product->slug}}"> <i class="fas fa-info"> </i> Enquiry</a></p>
                              </div>
                              </div>
                              </div>
                          






                          {{-- <div class="card-product">
                          <div class="card" style="width: 100%;">
                          <img class="card-img-top" style="height: 140px;" src="{{asset('storage/gallery/'.$product->coverImage)}}" alt="Card image cap">
                          <span class="sell-product">SELL</span>
                          <div class="card-body center card-bd">
                              <h5 class="card-title card-tit">{{$product->title}}</h5>
                              <h6 class="card-subtitle mb-2 sb-title text-muted">Rs {{$product->price}} Per {{$product->unit}}</h6> 
                                <h6 class="card-subtitle sb-titleoprice mb-2"><s>NRP 200000</s></h6>
              
                              <p class="a-p-enq"> <a class="btn-enq" href="#"  data-toggle="modal" data-target="#{{$product->slug}}"> <i class="fas fa-info"> </i> Enquiry</a></p>
                          </div>
                          </div>
                          </div> --}}
                          </a>
                          </div>

                            <div class="modal fade text-muted" id="{{$product->slug}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-muted bold" id="exampleModalLongTitle">Enquire To Product: <u><a href="{{route('front.product', $product)}}">{{$product->title}}</a></u></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                      {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\FrontendController@storeenquery'])!!}
                                      @csrf
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                              <label for="inputAddress">Name</label>
                                              <input type="text" name="name" required value="{{ old('name')}}" class="form-control" id="inputAddress" placeholder="Enter Your Name">
                                          @error('name')
                                      <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                                      @enderror
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label for="inputAddress2">Address</label>
                                              <input type="text" name="address" required value="{{old('address')}}" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                          @error('address')
                                      <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                                      @enderror
                                          </div>

                                      </div>
                                          <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <label for="inputAddress2">Email</label>
                                              <input type="email" name="email" required value="{{old('email')}}" class="form-control" id="inputAddress2" placeholder="Enter you Email">
                                          @error('email')
                                      <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                                      @enderror
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label for="inputAddress2">Contact</label>
                                              <input type="text" name="phone" required value="{{old('contact')}}" class="form-control" id="inputAddress2" placeholder="Contact Number">
                                              @error('contact')
                                      <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                                      @enderror
                                          </div>

                                          </div>
                                          <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <label for="inputAddress2">Product Name</label>
                                              <input type="text"  value="{{$product->title}}" disabled class="form-control" id="inputAddress2">
                                              <input type="hidden" value="{{$product->id}}" name="product_id">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label for="inputAddress2">Quntity</label>
                                              <input type="text" name="quantity" required value="{{old('quantity')}}" class="form-control" id="inputAddress2" placeholder="Quantiy">
                                              @error('contact')
                                      <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                                      @enderror
                                          </div>

                                          </div>
                                          <div class="form-group">
                                              <label for="exampleFormControlTextarea1">Your Message</label>
                                              <textarea class="form-control" name="message" value="no thing" id="exampleFormControlTextarea1" rows="2">{{old('message')}}</textarea>
                                              @error('message')
                                              <small class="form-text text-danger" style="font-size: 17px">{{$message}}</small>
                                              @enderror
                                          </div>
                                          
                                </div>
                                <div class="modal-footer">
                                  {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button> --}}
                                  {!! Form::submit('Send Enquiry',['class'=>'btn-message shadow']) !!}
                                          {!! Form::close() !!}
                                </div>
                              </div>
                            </div>
                          </div>

                
                  @endforeach

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
    
@endsection