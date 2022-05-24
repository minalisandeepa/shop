<table >
<tr>
<td>ID </td>
<td>Name </td>
<td>E-mail </td>
<td>Image</td>
</tr>
@foreach($users as $user)
<tr>
<td>{{$user->id}} </td>
<td><h4> {{$user->first_name}} {{$user->last_name}} </h4></td>
<td>{{$user->email}} </td>
<td><a href='http://127.0.0.1:8000/api/user/{{$user->id}}'><img src='{{$user->avatar}}' width='50px'></a></td>
</tr>
@endforeach
</table>

<style>
table, td
{
border:1px solid black;
border-collapse:collapse;
}
</style>