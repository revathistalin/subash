<html>
<head>
<h1>FISH DETAILS</h1>
</head>
<body>
<form action="{{url('fishresult')}}" method="get">
	 {{ csrf_field() }}
<table>
<tr><td>weight:</td><td><input type="number" name="weight" placeholder="Enter weight" value="{{$weight}}" ></td></tr>
<tr><td>bear_id:</td><td><input type="number" name="bear_id" placeholder="Enter bear id" value="{{$bear_id}}"></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>
