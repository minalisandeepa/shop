<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
 
  <style>
body 

{
  background-color: lightslategray;
}
</style>
<a href="newItem">New Item </a><br>

<table>
<tr><th>Name</th><th>Price</th></tr>
@foreach($items as $Item)
<tr><td>{{$Item['Name']}} </td><td> {{$Item['Price']}} </td>

  <td>   
    <form action='viewItem' method='post'>
    	@csrf
    <input type='hidden' name='itemId' value='{{$Item["id"]}}' >
	<button type="submit">View</button></td>
	
    </form>
</td>

 <td>   
    <form action='editItem' method='post'>
    	@csrf
  <input type='hidden' name='itemId' value='{{$Item["id"]}}' >
	<button type="submit">Edit</button></td>
    </form>
</td>
<td>

<form action='deleteItem' method='post'>
    	@csrf
    <input type='hidden' name='itemId' value='{{$Item["id"]}}' >
	<button type="submit">Delete</button></td>
    </form>
</td>
</tr>
@endforeach
</table>