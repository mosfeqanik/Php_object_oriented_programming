<?php


include 'Database.php';
$login = new Database();

if (isset($_POST["submit"])) 
{	
	$username=$_POST["username"];
	$password=$_POST["password"];

	$status=$login->login($username,$password);
	if (count($status)==1) {
		// print_r($status);
		// die("wow");
		session_start();
		$_SESSION['user'] = 'true';
		foreach ($status as $value) {
			$_SESSION['id']		 = $value['id'];
			$_SESSION['name']    = $value['username'];

			
		}
		header("location:show.php");
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
		<input type="submit" name="submit"value="login">
	</form>
</body>
</html>