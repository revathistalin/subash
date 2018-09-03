<html>
<head>
	<h1>ENTER YOUR DETAILS</h1>
</head>
<body>
<form action="{{url('insertlist')}}" method="post">
	{{csrf_field()}}
<table>	
<tr><td>title:</td><td><input type="text" name="title" placeholder="Enter your title"></td></tr>
<tr><td>body:</td><td><input type="text" name="body" placeholder="Enter Your body"></td></tr>
<tr><td>image:</td><td><input type="file" name="image" ></td></tr>          
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>

</body>
</html>