<table>
<tr><th>Subject</th><th>Result</th></tr>
@foreach($items as $Item)
<tr><td>{{$Item['Subject']}} </td><td> {{$Item['Result']}} </td></tr>
@endforeach
</table>