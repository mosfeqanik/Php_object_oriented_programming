<?php
include 'Db.php';
$login = new Db();

if (isset($_POST["submit"])) 
{	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$status=$login->login($username,$password);
	if ($status==1) {
		session_start();
		$_SESSION['user']='true';
		header("location:index.php");
	}
}

?>	

<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<a href="registration.php">for registration</a>
	<form action="#" method="POST">
		<label> Username</label>
		<input type="text" name="username">
		<label> password</label>
		<input type="password" name="password">
		<input type="submit" name="submit">
	</form>
</body>
</html>