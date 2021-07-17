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
                      <li class="breadcrumb-item active" aria-current="page">All Product</li>
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
                              <p class="a-p-enq"> <a class="btn-enq" href="#" data-toggle="modal" data-target="#{{$product->slug}}"> <i class="fas fa-info"> </i> Enquiry</a></p>
                          </div>
                          </div>
                          </div>
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
              </div>
            </div>
            </div>
            {{ $products ?? ''->links() }}
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