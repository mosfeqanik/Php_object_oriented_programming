<?php

session_start();
include 'Database.php';
$Showbyid = new Database();

	if(isset($_POST["submit"]))
		{	
			$name=$_POST["name"];
			$email=$_POST["email"];
			$phone=$_POST["phone"];
			$salary=$_POST["salary"];
			$id=$_GET["id"];


			echo $name."||".$email."||".$phone."||".$id."||".$salary;
			$Showbyid->updateStudents($name,$email,$phone,$salary,$id);
			echo "updated";
			// print_r($result);

		}

		// Showing by id
		if(isset($_GET["id"]))
		{	
			$id=$_GET["id"];
			$result=$Showbyid->ShowByIdstudents($id );
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
		<label>name</label>
		<input type="text" name="name" value="<?php  echo $value['name'];?>"><br>
		<label>email</label>
		<input type="text" name="email" value="<?php  echo $value['email'];?>"><br>
		<label>phone</label>
		<input type="text" name="phone" value="<?php  echo $value['phone'];?>"><br>
		<label>salary</label>
		<input type="text" name="salary" value="<?php  echo $value['salary'];?>"><br>
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