<html>
<head>
<h1>ENTER THE UPDATE</h1>
</head>
<body>
<form action="{{url('updatemark')}}" method="post">
	{{csrf_field()}}
<table>

<tr><td><input type="hidden" name="id" value="{{$change->id}}"></td></tr>
<tr><td><input type="hidden" name="student_id" value="{{$change->student_id}}"></td></tr>
<tr><td>computer:</td><td><input type="number" name="computer" placeholder="Enter the mark" value='{{$change->computer}}'></td></tr>
<tr><td>maths:</td><td><input type="number" name="maths" placeholder="Enter the mark" value='{{$change->maths}}'></td></tr>
<tr><td>chemistry:</td><td><input type="number" name="chemistry" value='{{$change->chemistry}}'></td></tr> 
<tr><td>tamil:</td><td><input type="number" name="tamil" value='{{$change->tamil}}'></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>


