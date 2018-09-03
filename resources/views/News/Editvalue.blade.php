<html>
<head>
<h1>ENTER DETAILS</h1>
</head>


<body>
<form action="{{url('updatelist')}}" method="post">
	{{csrf_field()}}
<table>
<tr><td>Id:<input type="number" name="id" value='{{$method->id}}'></td></tr>
<tr><td>Name:<input type="text" name="name" value='{{$method->name}}'></td></tr>
<tr><td><input type="submit" name="update" value="update"></td></tr>
</form>
</table>