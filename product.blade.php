@extends('Pmaster')
@section('content')


<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  

 <div class="container">
<div class="row">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
       @foreach($products as $item)
     <div class="item {{$item['id']==1?'active':''}}">
        <a href="detail/{{$item['id']}}">
        <img class="slider-img" src="{{$item['gallery']}}" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>{{$item['name']}}</h3>
          <p>{{$item['description']}}</p>
        </div>
        </a>
      </div>
      @endforeach
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div>
  <h1> Trending Products</h1>
  <div class="tranding-blog">
       @foreach($products as $item)
     <div class="tranding-item">
     <a href="detail/{{$item['id']}}">
        <img class="tranding-img" src="{{$item['gallery']}}">
        <div class="">
          <h3>{{$item['name']}}</h3>
        </div>
     </a>
      </div>
      @endforeach
    </div>
  </div>




@endsection