@extends('Pmaster')
@section('content')

 <div class="custom-product">
   <div class="col-sm-10">
   <a href="/" class="btn btn-info">Go Back</a>

     <div class="tranding-blog">
        <h2> Cart List</h2>
        <a class="btn btn-success" href="/ordernow">Order Now</a><br><br>
         <div class="">
 @foreach($products as $item)
     <div class="row search-item cart-list-devider">
       <div class="col-sm-3">
          <a href="detail/{{$item->id}}">
            <img class="tranding-img" src="{{$item->gallery}}">
         </a>
       </div>
       <div class="col-sm-3">
            <div class="">
              <h3>{{$item->name}}</h3>
              <h5>{{$item->description}}</h5>
           </div>
       </div>
       <div class="col-sm-3">
        <a href="/removecart/{{$item->card_id}}" class="btn btn-warning">Remove From Cart</a>
       </div>
       
      </div>
      @endforeach
     </div>
     <a class="btn btn-success" href="/ordernow">Order Now</a><br><br>

    </div>
  </div>

</div>

@endsection