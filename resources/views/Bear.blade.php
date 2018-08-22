<html>
<head>
<h1>BEAR DETAILS</h1>
</head>
<body>
<form action="{{url('beardetails')}}" method="post">
	 {{ csrf_field() }}
<table>
<tr><td>name:</td><td><input type="text" name="name" placeholder="Enter your Name" ></td></tr>
<tr><td>type:</td><td><input type="text" name="type" placeholder="Enter Your Type"></td></tr>
<tr><td>danger_level:</td><td><input type="number" name="dangerlevel"></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>
