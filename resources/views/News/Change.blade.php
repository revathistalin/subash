




<form action="{{url('')}}" method="post">
	{{csrf_field()}}
<table>

<tr><td><input type="hidden" name="id" value="{{$input->id}}"></td></tr>
<tr><td>name:</td><td><input type="text" name="name" value="{{$input->name}}"></td></tr>
<tr><td>email:</td><td><input type="text" name="email" value="{{$input->email}} "></td></tr>
<lable>role_name:</lable>
<select name="name" value="<?php echo $name ?>"/>
<option value="editor" <?php if($name=="editor") echo 'selected="selected"' ?>>editor </option>
<option value="admin" <?php if($name=="admin") echo 'selected="selected"' ?>>admin </option>
<option value="user" <?php if($name=="user") echo 'selected="selected"' ?>>user</option>
<option value="developer" <?php if($name=="developer") echo 'selected="selected"' ?>>developer</option>

<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</form>
</table>








