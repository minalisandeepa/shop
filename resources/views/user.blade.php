<table>
<tr><td>ID </td> <td>{{$user->id}} </td> </tr>
<tr><td> Name </td><td> {{$user->first_name}} {{$user->last_name}} </td></tr>
<tr><td>E-mail </td><td>{{$user->email}} </td></tr>
<tr><td>Image</td><td><a href='http://127.0.0.1:8000/api/user/{{$user->id}}'><img src='{{$user->avatar}}' width='150px'></a></td></tr>
</table>

<style>
table, td
{
border:1px solid black;
border-collapse:collapse;
}
</style>