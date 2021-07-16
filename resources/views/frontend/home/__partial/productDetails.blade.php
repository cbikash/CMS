@extends('frontend.index')
@section('content')
<section>
  <div class="top-section">
    <div class="container">
        <div class="top-section-main">
            <div class="top-section-desc">
                <h5>About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
            </div>
        </div>
    </div>
</div>
 <div class="main-body">
     <div class="container">
         <div class="row">
          <div class="col-md-9">
            <div class="colver-img">
                <img src="{{asset('storage/gallery/'.$product->coverImage)}}"  class="img-fluid img-cover" alt="">
                <div class="row">
                    <div class="col-md-8">
                        <h3>{{$product->title}}</h3>
                        <p>Nrp {{$product->price}} </p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn-buy" href="#">Get Enquiry</a>
                    </div>
                </div>
                <hr>

                <h4>Description</h4>
                <p>
                    {{$product->description}}
                </p>
            </div>
             </div>
             <div class="col-md-3">
                 <h4>Product Category</h4>
                 <ul class="list-group list-group-flush">
               
                 @foreach ($categories as $category)
                      <li class="list-group-item "><a href="{{route('front.product.category',$category)}}">{{$category->name}}</a></li>
                  @endforeach
                </ul>
             </div>
         </div>

         <div class="row">
             <div class="col-md-12">
                 <h3>Related Products</h3>
                 <hr>
             </div>
                @foreach ($relatedproduct as $product)
                <div class="col-md-3">
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
         </div>
     </div>
</div>

</section>
    
@endsection