<html>
<head>
<h1>TREE DETAILS</h1>
</head>
<body>
<form action="{{url('treeresult')}}" method="post">
	 {{ csrf_field() }}
<table>
<tr><td>type:</td><td><input type="text" name="type" placeholder="Enter the type" ></td></tr>
<tr><td>age:</td><td><input type="number" name="age" placeholder="Enter the Age" ></td></tr>
<tr><td>bear_id:</td><td><input type="number" name="bearid" placeholder="Enter bear id"></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>
