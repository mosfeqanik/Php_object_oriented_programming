<?php

include 'db.php';
$sh = new db();

if(isset($_POST['submit'])){
	$status = $sh->login($_POST['username'],$_POST['password']);
	if($status == 1){
		session_start();
		$_SESSION['user'] = 'true';
		header("location:index.php");
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form action="" method="POST">
		<label>Username:</label>
		<input type="text" name="username">
		<label>Password:</label>
		<input type="password" name="password">
		<input type="submit" name="submit" value="Login" />


	</form>
</body>
</html>