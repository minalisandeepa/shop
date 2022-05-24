<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
 <style>
body 

{
  background-color: lightsteelblue;
}
</style>
<body>
<table>
<form action="updateSale" method="POST">
	@csrf
	<input type=hidden Name="itemId" value='{{$sale->id}}'>
	
		<tr><td> Name </td><td><select name="id">
  @foreach($items as $item)

<option value="{{$item->id}}">{{$item->Name}} - Rs {{number_format($item->Price,2)}}</option>
@endforeach

</select></td></tr>
<tr><td> Quantity </td><td><input type="text" Name="quantity" value='{{$sale->Quantity}}'></td></tr>
<tr><td><tr><td><button type="submit"class="btn btn-primary">Update</button>
</td></tr>
</td></tr>	
</form>
</table>