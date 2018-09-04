<?php
if(empty($name))
{
	$name=null;

}
?>




<form action="{{url('updateresult')}}" method="post">
	{{csrf_field()}}
<table>

<tr><td><input type="hidden" name="id" value="{{$output->id}}"></td></tr>
<tr><td>Title:</td><td><input type="text" name="title" value="{{$output->title}}"></td></tr>
<tr><td>Body:</td><td><input type="text" name="body" value="{{$output->body}} "></td></tr>
  

 
@foreach($order as $orders)                     
 <tr><td><input type="checkbox" name="name[]" value="{{$orders->id}}">{{ $orders->name }}</td></tr>
@endforeach 


<tr><td><input type="submit" name="update" value="update"></td></tr>
</form>
</table>