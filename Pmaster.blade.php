
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Comm Project</title>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   
</head>
<body>
    @include('header')
    @yield('content')
    @include('Pfooter')
</body>

<style>
    .custom-login{
       height: 500px;
       padding: 10px;
    }
    img.slider-img{
        height: 400px !important;
    }
    .carousel-caption{
        background-color: transparent;
        color: black;
    }
    .tranding-img{
        height: 100px;
    }
    .tranding-item{
        float: left;
        width: 20%;
    }
    .tranding-blog{
        margin: 20px;
    }
    .detail-img{
       height: 200px;
    }
    .search-box{
        width: 400px !important;
    }
    .cart-list-devider {
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
}
</style>
</html>