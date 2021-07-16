 
 @foreach ($products as $product)
  
 
      <div class="col-md-4">
                    <a href="#" class="prod-a">
                    <div class="card-product">
                    <div class="card" style="width: 100%;">
                    <img class="card-img-top" style="height: 140px;" src="asset/p1.jpg" alt="Card image cap">
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