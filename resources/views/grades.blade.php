<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
 
  <style>
body 

{
  background-color: lightgoldenrodyellow;
}
</style>
<a href="newGrade">New Grade </a><br>
<form action="search" method="POST">
  @csrf<input type="text" name="sText" class="form-control-sm" placeholder="Subject or Result">
  <button type="submit" class="btn btn-primary">Search</button>
</form>

<table>
<tr><th>Subject</th><th>Result</th></tr>
@foreach($grades as $Grade)
<?php //dd($Grade); ?>
<tr><td>{{$Grade['Subject']}} </td><td> {{$Grade['Result']}} </td>

  <td>   
    <form action='viewGrade' method='post'>
    	@csrf
    <input type='hidden' name='gradeId' value='{{$Grade["id"]}}' >
	<button type="submit">View</button></td>
	
    </form>
</td>

 <td>   
    <form action='editGrade' method='post'>
    	@csrf
    <input type='hidden' name='gradeId' value='{{$Grade["id"]}}' >
	<button type="submit">Edit</button></td>
    </form>
</td>
<td>
<form action='deleteGrade' method='post'>
    	@csrf
    <input type='hidden' name='gradeId' value='{{$Grade["id"]}}' >
	<button type="submit">Delete</button></td>
    </form>
</td>
</tr>
@endforeach
</table>