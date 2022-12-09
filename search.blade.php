@extends('Pmaster')
@section('content')



 <div class="container">
  
     <div class="col-sm-4">
        <a href="#">Filter</a>
     </div>
     <div class="col-sm-4">
     <h2> Result for Products</h2>
  <div class="tranding-blog">
       @foreach($products as $item)
     <div class="search-item">
     <a href="detail/{{$item['id']}}">
        <img class="tranding-img" src="{{$item['gallery']}}">
        <div class="">
          <h2>{{$item['name']}}</h2>
          <h5>{{$item['description']}}</h5>
        </div>
     </a>
      </div>
      
      @endforeach
     </div>
    </div>
  </div>

@endsection