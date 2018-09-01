
<html>
<head>
    <h1>REGISTER</h1>
</head>
<body style="background-color:powderblue" >
<form action="{{url('insert')}}" method="post" >
	{{csrf_field()}}
<table>
<tr><td>UserName:</td><td><input type="text" name="name" placeholder="Enter your userName" ></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" placeholder="Enter Your email"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password"></td></tr> 
<tr><td>Conform Password:</td><td><input type="password" name="confrom password" ></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>

</body>
</html>


