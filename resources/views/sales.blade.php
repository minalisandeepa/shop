<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
 
  <style>
body 
{
  background-color: lightgray;
}


  font-family: Arial, Helvetica, sans-serif;
}

 

/* Style the search box */
#mySearch {
  width: 15%;
  font-size: 14px;
  padding: 2px;
  border: 3px solid #ddd;
}

</style>

</head>
<body>
  <div class="content">
  <span class="glyphicon glyphicon-search"></span>
</div>
  <div class="row">
  <div class="left" >
    <h5>Search</h5>
    <input type="text"placeholder="Find.." title="Type in a category">
    
  </div>
</div>



<a href="newSale">New Sale </a><br>

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
</body>
