@extends('Pmaster')
@section('content')

  
 <div class="container">
  <div class="row">
   <div class="col-sm-6">
    <img class="detail-img" src="{{$product['gallery']}}" alt="">
   </div>
   <div class="col-sm-6">
   <a href="/" class="btn btn-info">Go Back</a>
   <h2> Name : {{$product['name']}}</h2>
   <h4> Price : {{$product['price']}}</h4>
   <h5> Catagory : {{$product['category']}}</h5>
   <h6> Description : {{$product['description']}}</h6>
   <br><br>
   <form action="/add_to_cart" method="POST">
    @csrf
   <input type="hidden" name="product_id" value="{{$product['id']}}">
   <button class="btn btn-success" >Add to card</button>

   </form>
   <br><br>
   <button class="btn btn-primary">Buy Now</button>
   </div>

    
    </div>
  </div>




@endsection