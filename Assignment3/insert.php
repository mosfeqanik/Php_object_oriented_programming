<?php

session_start();
include 'Database.php';
// $pdo = new PDO("mysql:host=localhost;dbname=ctg180","root","");

// var_dump($pdo);
// echo "<br>";

$insert = new Database();
// $insert->save();
if (isset($_POST['submit'])) 
 {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];

	$insert->save($name,$email,$phone);	
	


}


?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<a href="show.php"> Show me the table</a>
	<form action="" method="POST">
		<label>Name</label>
		<input type="text" name="name"><br>
		<label>Email</label>
		<input type="email" name="email"><br>
		<label>Phone</label>
		<input type="text" name="phone"><br>
		<input type="submit" name="submit" value="Add Details">
	</form>
</body>
</html>