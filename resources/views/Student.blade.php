<html>
<head>
<h1>YOUR DETAILS</h1>
</head>
<body>
<form action="{{url('addform')}}" method="get">
<table>
<tr><td>FirstName:</td><td><input type="text" name="firstname" placeholder="Enter your FirstName" value="{{$firstname}}"></td></tr>
<tr><td>LastName:</td><td><input type="text" name="lastname" placeholder="Enter Your LastName" value="{{$lastname}}"></td></tr>
<tr><td>DateOfBirth:</td><td><input type="date" name="dateofbirth" value="{{$dateofbirth}}"></td></tr> 
<tr><td>Email:</td><td><input type="text" name="email" value="{{$email}}"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password" value="{{$password}}"></td></tr>
<tr><td>PhoneNo:</td><td><input type="number" name="phoneno" value="{{$phoneno}}"></td></tr>

<tr><td>Country:</td><td><input type="country" name="country" value="{{$country}}"></td></tr>
	 
<tr><td>State:</td><td><select name="state" value="{{$state}}"/>
	<option value="tamilnadu" <?php if($state=="tamilnadu")echo 'selected="selected"'?>>Tamilnadu</option>
	<option value="andhra" <?php if($state=="andhra")echo 'selected="selected"'?>>Andhra</option></td></tr>
</select></td></tr>

<tr><td>Gender:</td><td><input type="radio" name="gender" <?php if($gender=="male"){echo "checked";} ?> value="male">male</td>
       <td><input type="radio" name="gender"  <?php if($gender=="female"){echo "checked";}?> value="female">female</td>
       <td><input type="radio" name="gender" <?php if($gender=="others"){echo "checked";}?> value="others">Others</td></tr>

<tr><td>City:</td><td><input type="checkbox" name="city" <?php if($city=="chennai") echo "checked";?>  value="chennai">Chennai<br>
                      <input type="checkbox" name="city" <?php if($city=="trichy") echo "checked";?>  value="trichy">Trichy<br>
                      <input type="checkbox" name="city" <?php if($city=="madurai") echo "checked";?> value="madurai">Madurai</td></tr><br>

 <tr><td>Address:</td><td><textarea name="address" row="6" column="40" ><?php echo $address; ?></textarea></td></tr>                   
           


<tr><td><input type="submit" name="update" value="update"></td></tr>
</form>
</table>
