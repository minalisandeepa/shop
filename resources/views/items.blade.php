<head>
  <style>
body 
{
  background-color: lightslategray;
}
</style>
<body>
 <div>
 @include("menu")
</div>
<div>
<a href="newItem">New Item </a><br>
<form action="search" method="POST">
  @csrf<input type="text" name="sText" class="form-control-sm" placeholder="Name or Price">
  <button type="submit" class="btn btn-primary">Search</button>
</form>
<table class="table table-bordered">
<tr><th>Name</th><th>Price</th></tr>
@foreach($items as $Item)
<tr><td>{{$Item['Name']}} </td><td> {{$Item['Price']}} </td>

  <td>   
    <form action='viewItem' method='post'>
    	@csrf
    <input type='hidden' name='itemId' value='{{$Item["id"]}}' >
	<button type="submit" class='btn btn-success btn-sm'>View</button></td>
	
    </form>
</td>

 <td>   
    <form action='editItem' method='post'>
    	@csrf
  <input type='hidden' name='itemId' value='{{$Item["id"]}}' >
	<button type="submit" class='btn btn-success btn-sm'>Edit</button></td>

    </form>
</td>
<td>

<form action='deleteItem' method='post'>
    	@csrf
    <input type='hidden' name='itemId' value='{{$Item["id"]}}' >
	<button type="submit" class='btn btn-danger btn-sm'>Delete</button></td>
    </form>
</td>
</tr>
@endforeach
</table>