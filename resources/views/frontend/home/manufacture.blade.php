@extends('frontend.index')
@section('content')


<section>

<div class="top-section">
    <div class="container">
        <div class="row">
        <div class="col-md-12 div-top-section">
         
          <p class="header-class">Manufacture</p>
          <p> <a href="/">HOME</a> > MANUFACTURE </p>
        </div>
      </div>
    </div>
</div>

<div class="main-body">
        <div class="container">
            <div class="row">
              @foreach ($manufactures as $manufacture)

                  
                <div class="col-md-4">
                  <div class="card" style="width: 100%;">
                  <img class="card-img-top img-fluid" style="height: 200px;" src="{{ asset('storage/manufacture/'.$manufacture->image)}}" alt="Card image cap">
                  <div class="card-body card-manf">
                    <h5 class="card-title">{{$manufacture->title}}</h5>
                    <p class="card-text">{{ Str::limit($manufacture->description, 60)}}</p>
                    <a href="{{route('front.manufacture', $manufacture)}}"> <b>Read More ></b></a>
                  </div>
                </div>
                </div>

              @endforeach

              <div class="col-md-12">
                {{ $manufactures ?? ''->links() }}</div>
              </div>

            </div>
        </div>

    </div>
@endsection

@section('scripts')

    
@endsection