<?php
include 'Db.php';
$Showbyid = new Db();

		//Showing by id
		if(isset($_GET["id"]))
		{	
			$id=$_GET["id"];
			$result=$Showbyid->ShowById($id);
			// print_r($result);



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
		<label>Name</label>
		<input type="text" name="name" value="<?php  echo $value['name'];?>"><br>
		<label>model</label>
		<input type="text" name="model"  value="<?php  echo $value['model'];?>"><br>
		<label>price</label>
		<input type="text" name="price"  value="<?php  echo $value['price'];?>"><br>
		<?php
			}
		}
		?>
		<input type="submit" name="submit" value="Update">
	</form>
	<h1><a href="Show.php">Show all table</a></h1>
	<h1><a href="index.php">For inserting data</a></h1>




</body>
</html>