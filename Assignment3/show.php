<?php  

session_start();
include 'Database.php';
$show = new Database();
$data= $show->read();
$userdata= $show->readUserdata();


// print_r($data);
// foreach ($data as $key => $value) 
// {
// 	echo $value["name"]."<br>";
// 	echo $value["email"]."<br>";
// 	echo $value["phone"]."<br>";

// }



?>
<!DOCTYPE html>
<html>
<head>
	<title>show details</title>
</head>
<body>
	<a href="insert.php"> i want to insert data</a>
	<table border="2px solid black">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
		</tr>
		<?php
			foreach ($data as $key =>$value ) {
			
		?>
		<tr>
			<td><?php  echo $value['name'];?></td>
			<td><?php  echo $value['email'];?></td>
			<td><?php  echo $value['phone'];?></td>
		</tr>
		<?php
		
			}	
		?>
	</table>
	<table border="2px solid black">
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Action</th>
		</tr>
		<?php
			foreach ($userdata as $key =>$value ) {
			
		?>
		<tr>
			<td><?php  echo $value['id'];?></td>
			<td><?php  echo $value['username'];?></td>
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
</body>
</html>
