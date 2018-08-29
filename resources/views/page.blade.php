<?php
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "login Successfuly";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "login  Not Set";
}
?>


