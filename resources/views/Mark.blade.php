<html>
<head>
<h1>ENTER MARK</h1>
</head>
<body>
<form action="{{url('marklist')}}" method="post">
	{{csrf_field()}}
<table>

<tr><td><input type="hidden" name="id" value="{{$id}}"></td></tr>
<tr><td>computer:</td><td><input type="number" name="computer" placeholder="Enter the mark"></td></tr>
<tr><td>maths:</td><td><input type="number" name="maths" placeholder="Enter the mark"></td></tr>
<tr><td>chemistry:</td><td><input type="number" name="chemistry"></td></tr> 
<tr><td>tamil:</td><td><input type="number" name="tamil"></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>

<p><a href='{{url("/studentlist")}}'>cancel</a></p>
