@extends('Pmaster')
@section('content')

 <div class="custom-product">
   <div class="col-sm-6">
   <table class="table table-bordered">
    <tbody>
      <tr>
        <td>Price</td>
        <td>{{$total}} Ruppes</td>
      </tr>
      <tr>
        <td>Tex</td>
        <td>0 Rupees</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>100</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total+100}}</td>
      </tr>
    </tbody>
  </table>
  <form action="orderplace" method="POST">
    @csrf
  <div class="form-group">
    <textarea placeholder="Enter Your Address..." name="address" class="form-control" ></textarea>
  </div>
  <div class="form-group">
    <label for="">Payment Method</label>
    <p><input type="radio" value="cash"  name="payment" ><span> Payment Online</span></p>  
    <p><input type="radio" value="cash"  name="payment" ><span> Payment EMI</span></p>  
    <p><input type="radio" value="cash" name="payment" ><span> Payment On Delivery</span></p>  
</div>
 
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
    
  </div>
</div>

@endsection