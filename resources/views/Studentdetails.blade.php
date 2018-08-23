<html>
<head>
<h1>ENTER STUDENT DETAILS</h1>
</head>
<body>
<form action="{{url('studentinsert')}}" method="post">
	{{csrf_field()}}
<table>
<tr><td>name:</td><td><input type="text" name="name" placeholder="Enter your Name"></td></tr>
<tr><td>email:</td><td><input type="text" name="email" placeholder="Enter Your email"></td></tr>
<tr><td>country:</td><td><input type="text" name="country"></td></tr> 
<tr><td>city:</td><td><input type="text" name="city"></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>

