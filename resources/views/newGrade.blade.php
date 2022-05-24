
<form action="newGrade" method="POST">
	@csrf
	<table>
		<tr><td> Subject </td><td><input type=text Name="subject"></td></tr>
<tr><td> Result </td><td><input type=text Name="result"></td></tr>
<tr><td><button type="submit" >Add</button></td></tr>
	</table>
</form>