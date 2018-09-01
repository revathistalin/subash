

<html>
<head>
    <h1>ENTER HERE</h1>
</head>
<body>
<form action="{{url('send')}}" method="post" >
	{{csrf_field()}}
<table>

<tr><td>Email:</td><td><input type="text" name="email" placeholder="Enter Your email"></td></tr>

<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>

</body>
</html>