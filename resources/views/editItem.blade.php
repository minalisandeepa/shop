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
  background-color: lightslategrey;
}
</style>
<form action="updateItem" method="POST">
	@csrf
	<input type=hidden Name="id" value={{$item['id']}}>
	<table>
		<tr><td> Name </td><td><input type="text" Name="name" value={{$item['Name']}}></td></tr>
<tr><td> Price </td><td><input type="text" Name="price" value={{$item['Price']}}></td></tr>
<tr><td><button type="submit" class='btn btn-success'>Update</button></td></tr>
	</table>
</form>
