<html>
<head>
<h1>FISH DETAILS</h1>
</head>
<body>
<form action="{{url('fishresult')}}" method="post">
	 {{ csrf_field() }}
<table>
<tr><td>weight:</td><td><input type="number" name="weight" placeholder="Enter weight" ></td></tr>
<tr><td>bear_id:</td><td><input type="number" name="bearid" placeholder="Enter bear id"></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>
