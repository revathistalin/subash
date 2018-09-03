

<form action="{{url('categoryinsert')}}" method="post">
	   {{csrf_field()}}
<table>
<tr><td><input type="hidden" name="id" ></td></tr>	
<tr><td>Name:</td><td><input type="text" name="name" placeholder="Enter your Category Name"></td></tr>
<tr><td><input type="submit" name="update" value="update"></td></tr>
</form>
</table>
