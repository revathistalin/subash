<html>
<head>
<h1>ENTER STUDENT DETAILS</h1>
</head>

<?php
//dd($method);
?>


<body>
<form action="{{url('update')}}" method="post">
	{{csrf_field()}}
<table>
<tr><td><input type="hidden" name="id" value='{{$method->id}}'></td></tr>
<tr><td>name:</td><td><input type="text" name="name" placeholder="Enter your Name" value='{{$method->name}}'></td></tr>
<tr><td>email:</td><td><input type="text" name="email" placeholder="Enter Your email" value='{{$method->email}}'></td></tr>
<tr><td>country:</td><td><input type="text" name="country" value='{{$method->country}}' ></td></tr> 
<tr><td>city:</td><td><input type="text" name="city" value='{{$method->city}}' ></td></tr>
<tr><td><input type="submit" name="update" value="update"></td></tr>
</form>
</table>

<p><a href='{{url("/studentlist")}}'>cancel</a></p>

