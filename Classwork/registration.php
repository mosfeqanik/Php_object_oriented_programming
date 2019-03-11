<?php
include 'db.php';
$sh = new db();

	if (isset($_POST['submit'])) {
		$sh->register($_POST['username'],$_POST['password']);		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>
<body>
	<form method="POST" action="">
		<input type="text" name="username"/>
		<input type="password" name="password"/>
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>