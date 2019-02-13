<?php  
session_start();

include 'Db.php';
$shw = new Db();
$data= $shw->Showtmp();
// print_r($data);
// foreach ($data as $key => $value) 
// {
// 	echo $value["name"]."<br>";
// 	echo $value["model"]."<br>";
// 	echo $value["price"]."<br>";

// }



?>
<!DOCTYPE html>
<html>
<head>
	<title>show details</title>
</head>
<body>
	<a href="logout.php">logout</a>

	<form action="" method="GET">
		<input type="text" name="search">
		<input type="submit" name="submit">
	</form>
	<table border="2px solid black">
		<tr>
			<th>Name</th>
			<th>Model</th>
			<th>Price</th>
			<th>Action</th>

		</tr>

		<?php
		// search mobile details
		if (isset($_GET["submit"])) 
		{
			$search=$_GET["search"];
			$search_data= $shw->Range($search);
			// print_r($search_data);
			foreach ($search_data as $key =>$value ) 
			{
		?>
		<tr>
			<td><?php  echo $value['name'];?></td>
			<td><?php  echo $value['model'];?></td>
			<td><?php  echo $value['price'];?></td>
		</tr>
		<?php
			
			}
		}
		else
			foreach ($data as $key =>$value ) 
			{
		
			
		?>
		<tr>
			<td><?php  echo $value['name'];?></td>
			<td><?php  echo $value['model'];?></td>
			<td><?php  echo $value['price'];?></td>
			<td>
				<a href="Showbyid.php?id=<?php  echo $value['id'];?>">edit
				</a>
				||
				<a href="delete.php?id=<?php  echo $value['id'];?>">delete
				</a>
				||
				<a href="softdelete.php?id=<?php  echo $value['id'];?>">Soft Delete
				</a>
			</td>

		</tr>
		<?php
			}
		?>
	</table>
	<h1><a href="index.php">For inserting data</a></h1>
</body>
</html>

