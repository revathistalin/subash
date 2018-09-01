



<html>
<head>
    <h1>ENTER HERE</h1>
</head>
<body>
<form action="{{url('newpassword')}}" method="post" >
	{{csrf_field()}}
<table>
<tr><td><input type="hidden" name="rpToken" value="{{ $rpToken}}"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password"></td></tr>
<tr><td>Conform_Password:</td><td><input type="password" name=" conformpassword"></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>

</body>
</html>_