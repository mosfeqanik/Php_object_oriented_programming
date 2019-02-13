<?php
include 'Db.php';
$register = new Db();

if (isset($_POST["submit"])) {
	$username=$_POST["username"];
	$password=$_POST["password"];
	$register->register($username,$password);
	echo "registration is completed"; 
}


?>	


<!DOCTYPE html>
<html>
<head>
	<title>registration page</title>
</head>
<body>
	<form action="#" method="POST">
		<label> Username</label>
		<input type="text" name="username">
		<label> password</label>
		<input type="password" name="password">
		<input type="submit" name="submit" value="register">
	</form>
</body>
</html>