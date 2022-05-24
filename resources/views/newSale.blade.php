<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
  <title></title>
</head>
<body>
<form action="newSale" method="POST">
  @csrf
  <table>    
<tr><td> Name </td>
<td><select name="itemId">
  @foreach($items as $item)
<option value="{{$item['id']}}">{{$item['Name']}} - Rs {{number_format($item['Price'],2)}}</option>
@endforeach

</select>
</td></tr>
<tr><td> Quantity </td><td><input type=text Name="quantity"></td></tr>
<tr><td><button type="submit" class="btn btn-warning">Add</button></td></tr>
  </table>
</form>