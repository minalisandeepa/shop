<head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
  <style>
body 
{
  background-color: lightgray;
}
  font-family: Arial, Helvetica, sans-serif;
}

</style>
<body>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Search Item</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="/items">Items</a></li>
      <li><a href="/grades">Grades</a></li>
      <li><a href="api/users">Users</a></li>
    </ul>
  </div> 
</div>
</nav>
<div class="input-group">
  <div id="search-autocomplete" class="form-outline">
  </div>
</div>

<a href="newSale">New Sale </a><br>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
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
