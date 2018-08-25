<table border='1' cellpadding=10>
<tr>
<th><font color='Red'>Name</font></th>
<th><font color='Red'>Email</font></th>
<th><font color='Red'>Total</font></th>
<th><font color='Red'>Rank</font></th>
</tr>

<?php $i=1; ?>
@foreach($rank as $ranking)
<tr>
<td>{{$ranking->name}}</td>
<td>{{$ranking->email}}</td>
<td>{{$ranking->total}}</td>
<td><?php if($ranking->total!=0)
{ 
echo $i++;
}?> </td>
</tr>
@endforeach
<p><a href='{{url("/studentlist")}}'>view</a></p>
