<?php
include 'Db.php';
$register = new Db();
?>	


<!DOCTYPE html>
<html>
<head>
	<title>registratioa page</title>
</head>
<body>
	<form action="#" method="POST">
		<label> Username</label>
		<input type="text" name="username">
		<label> password</label>
		<input type="text" name="password">
		<input type="submit" name="submit" value="register">
	</form>
</body>
</html>