<table border='1' cellpadding=10>
<tr>
<th><font color='Red'>Id</font></th>
<th><font color='Red'>Name</font></th>
<th><font color='Red'>Email</font></th>
<th><font color='Red'>Country</font></th>
<th><font color='Red'>City</font></th>
<th><font color='Red'>Edit</font></th>
<th><font color='Red'>Delete</font></th>
</tr>

@foreach($student as $details)
<tr>
<td>{{$details->id}}</td>
<td><a href="{{url("/view/$details->id")}}">{{$details->name}}</td>
<td>{{$details->email}}</td>
<td>{{$details->country}}</td>
<td>{{$details->city}}</td>
<td><b><font color="#663300"><a href="{{url("/value/$details->id")}}">Edit</a></font></b></td>
<td><b><font color="#663300"><a href="{{url("/Studentdelete/$details->id")}}"">Delete</a></font></b></td>
</tr>

@endforeach
<table>
<tr><td><a href='{{url("/student")}}' style="caption align='right'">Add data</a></td></tr>
<tr><td><a href='{{url("/rank")}}'>Rank list</a></td></tr>
</table>