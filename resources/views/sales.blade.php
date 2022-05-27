<head>
  <style>
body 
{
  background-color: lightgray;
}
  font-family: Arial, Helvetica, sans-serif;
}

</style>
<body>
 <div >
 @include("menu")

</div>
<div>
<a href="newSale">New Sale </a><br>
<form action="search" method="POST">
  @csrf<input type="text" name="sText" class="form-control-sm" placeholder="Quantity">
  <button type="submit" class="btn btn-primary">Search</button>
</form>
<table class="table table-bordered">
<tr><th>Name</th><th>Quantity</th><th>Price</th><th>Value</th></tr>
@foreach($sales as $sale)
<?php 
//dd($sale->item->Price); 
?>
<tr><td>{{$sale->item->Name}} </td><td align="right"> {{$sale->Quantity}} </td><td align="right">{{number_format($sale->item->Price,2)}} </td>
  <td align="right">{{number_format($sale->item->Price * $sale->Quantity,2)}} </td>

  <td>   
    <form action='viewSale' method='post'>
      @csrf
    <input type='hidden' name='saleId' value='{{$sale->id}}' >
  <button type="submit"class="btn btn-Success">View</button></td>
  
    </form>
</td>

 <td>   
    <form action='editSale' method='post'>
      @csrf
      
    <input type='hidden' name='saleId' value='{{$sale->id}}' >
<button type="submit" class="btn btn-danger">Edit</button>   
 </td>
 
</form>
</td>

<td>
<form action='deleteSale' method='post'>
      @csrf
    <input type='hidden' name='saleId' value='{{$sale->id}}' >
  <button type="submit" class="btn btn-Secondary">Delete</button>
    </form>
</td>
</tr>
@endforeach
</table>
</div>
</body>
