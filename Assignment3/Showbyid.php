<?php

session_start();
include 'Database.php';
$Showbyid = new Database();

	if(isset($_POST["submit"]))
		{	
			$username=$_POST["username"];
			$password=$_POST["password"];
			$id=$_GET["id"];


			echo $username."||".$password."||".$id;
			$Showbyid->update($username,$password,$id);
			echo "updated";
			// print_r($result);

		}

		// Showing by id
		if(isset($_GET["id"]))
		{	
			$id=$_GET["id"];
			$result=$Showbyid->ShowById($id);
			print_r($result);

		


?>

<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>

	<form action="" method="POST">
		<?php
			foreach ($result as $key => $value) 
			{

		?>
		<label>Username</label>
		<input type="text" name="username" value="<?php  echo $value['username'];?>"><br>
		<label>password</label>
		<input type="password" name="password"><br>
		<?php
			}
		}
		?>
		<input type="submit" name="submit" value="Update">
	</form>
	<h1><a href="Show.php">Show all users</a></h1>
	<h1><a href="index.php">For inserting data</a></h1>




</body>
</html>