<?php  

include 'Database.php';
$show = new Database();
$data= $show->read();
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
</body>
</html>
