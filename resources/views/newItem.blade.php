<form action="newItem" method="POST">
	@csrf
	<table>
		<tr><td> Name </td><td><input type=text Name="name"></td></tr>
<tr><td> Price </td><td><input type=text Name="price"></td></tr>
<tr><td><button type="submit" >Add</button></td></tr>
	</table>
</form>
