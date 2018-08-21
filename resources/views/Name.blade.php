<html>
<head>
	<h1>ENTER YOUR DETAILS</h1>
</head>
<body style="background-color:powderblue" >
<form action="{{url('addform')}}" method="post">
    {{ csrf_field() }}
<table>
<tr><td>FirstName:</td><td><input type="text" name="firstname"></td></tr>
<tr><td>LastName:</td><td><input type="text" name="lastname"></td></tr>
<tr><td>DateOfBirth:</td><td><input type="date" name="dateofbirth"></td></tr> 
<tr><td>Email:</td><td><input type="text" name="email" ></td></tr>
<tr><td>Password:</td><td><input type="password" name="password"></td></tr>
<tr><td>PhoneNo:</td><td><input type="number" name="phoneno"></td></tr>

<tr><td>Country:</td><td><input type="country" name="country"></td></tr>
	 
<tr><td>State:</td><td><select name="state">
	<option value="select">select</option>
	<option value="tamilnadu">Tamilnadu</option>
	<option value="andhra">Andhra</option></td></tr>
</select></td></tr>

<tr><td>Gender:</td><td><input type="radio" name="gender" value="male" >male</td>
       <td><input type="radio" name="gender" value="female">female</td>
       <td><input type="radio" name="gender" value="others">Others</td></tr>

<tr><td>City:</td><td><input type="checkbox" name="city" value="chennai">Chennai</td>
                      <td><input type="checkbox" name="city" value="trichy">Trichy</td>
                      <td><input type="checkbox" name="city" value="madurai">Madurai</td></tr>

 <tr><td>Address:</td><td><textarea name="address" row="6" column="40" ></textarea></td></tr>


<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>

</body>
</html>
