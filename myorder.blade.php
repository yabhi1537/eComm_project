@extends('Pmaster')
@section('content')

 <div class="container">
   <div class="col-sm-10">
   <a href="/" class="btn btn-info">Go Back</a>

     <div class="tranding-blog">
        <h2> Order List</h2>
         <div class="">
 @foreach($orders as $item)
     <div class="row search-item cart-list-devider">
       <div class="col-sm-3">
          <a href="detail/{{$item->id}}">
            <img class="tranding-img" src="{{$item->gallery}}">
         </a>
       </div>
       <div class="col-sm-3">
            <div class="">
              <h3>{{$item->name}}</h3>
              <h5>1.Delivery status :{{$item->status}}</h5>
              <h5>2.Payment status :{{$item->payment_status}}</h5>
              <h5>3.Payment method :{{$item->peyment_method}}</h5>
              <h5>4.Delivery address :{{$item->address}}</h5>
              <h5>5.Price :{{$item->price}}</h5>
           </div>
       </div>
       
      </div>
      @endforeach
     </div>

    </div>
  </div>

</div>

@endsection