
<?php
if(empty($name))
{
	$name=null;

}
?>




<form action="{{url('data')}}" method="post">
	{{csrf_field()}}
<table>

<tr><td><input type="hidden" name="id" value="{{$input->id}}"></td></tr>
<tr><td>name:</td><td><input type="text" name="name" value="{{$input->name}}"></td></tr>
<tr><td>email:</td><td><input type="text" name="email" value="{{$input->email}} "></td></tr>
<lable>role_name:</lable>
<select name="role_name" value="<?php echo $name ?>"/>
<option value="" <?php if($name=="") echo 'selected="selected"'	?>>select </option> 
<option value="editor" <?php if($name=="editor") echo 'selected="selected"' ?>>editor </option>
<option value="admin" <?php if($name=="admin") echo 'selected="selected"' ?>>admin </option>
<option value="user" <?php if($name=="user") echo 'selected="selected"' ?>>user</option>
<option value="developer" <?php if($name=="developer") echo 'selected="selected"' ?>>developer</option>

<tr><td><input type="submit" name="update" value="update"></td></tr>
</form>




