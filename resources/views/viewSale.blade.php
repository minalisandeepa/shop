<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body 

{
  background-color: lightpink;
}
</style>
</head>
<body>

<div class="container">            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$sale->item->Name}}</td>
        <td>{{$sale->Quantity}}</td>
        <td>{{$sale->item->Price}}</td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>
