<?php

include 'Db.php';
// $pdo = new PDO("mysql:host=localhost;dbname=ctg180","root","");

// var_dump($pdo);
// echo "<br>";




$inst = new Db();

if (isset($_POST['submit'])) 
 {
	$name=$_POST['name'];
	$model=$_POST['model'];
	$price=$_POST['price'];

	$inst->insert($name,$model,$price);
	echo "inserted";


}


?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>

	
	<form action="" method="POST">
		<label>Name</label>
		<input type="text" name="name"><br>
		<label>model</label>
		<input type="text" name="model"><br>
		<label>price</label>
		<input type="text" name="price"><br>
		<input type="submit" name="submit" value="Add Details">
	</form>
	<h1><a href="Show.php">Show all table</a></h1>
</body>
</html>