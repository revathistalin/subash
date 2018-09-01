@foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
 @endforeach



@if (session()->has('msg'))
    <h1>{{ session('msg') }}</h1>
@endif


<html>

<form action="{{url('page')}}" method="post" style="backgroung-color:powderblue; text-align:center; width: 400px;">

     {{csrf_field()}}

    <p>
		Email: <input name="email" type="text" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" class="input-field">
	</p>
		 <p>Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field">
	
		<p><input type="checkbox" name="remember" /> Remember me
	</p>
		<p><input type="submit" value="Login"></span></p>

      <tr><td><a href="{{url('forget')}}">Forget password</a></td></tr>
</form>
</html>



