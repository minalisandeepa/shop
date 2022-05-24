
<table>
<tr><th>Name</th><th>Quantity</th></tr>
@foreach($Sales as $Sale)
<tr><td>{{$Sale['Name']}} </td><td> {{$Sale['Quantity']}} </td></tr>
@endforeach
</table>
