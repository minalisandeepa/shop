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



<form action="updateGrade" method="POST">
	@csrf
	<input type=hidden Name="id" value='{{$grade["id"]}}'>
	<table>
		<tr><td> Subject </td><td><input type="text" Name="subject" value='{{$grade["Subject"]}}'></td></tr>
<tr><td> Result </td><td><input type="text" Name="result" value='{{$grade["Result"]}}'></td></tr>
<tr><td><button type="submit"class="btn btn-primary">Update</button></td></tr>
	</table>
</form>
</body>
</html>
