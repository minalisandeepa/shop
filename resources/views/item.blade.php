<table>
<tr><th>Name</th><th>Price</th></tr>
@foreach($items as $Item)
<tr><td>{{$Item['Name']}} </td><td> {{$Item['Price']}} </td></tr>
@endforeach
</table>