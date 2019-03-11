<?php

session_start();
include 'Database.php';
$reset = new Database();
$view=$reset->showForReset();



?>

<!DOCTYPE html>
<html>
<head>
	<title>show details</title>
</head>
<body>
	<table border="2px solid black">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>salary</th>
			<th>Action</th>
			<th>Reset</th>
		</tr>
		<?php
			foreach ($view as $key =>$value ) {
			
		?>
		<tr>
			<td><?php  echo $value['name'];?></td>
			<td><?php  echo $value['email'];?></td>
			<td><?php  echo $value['phone'];?></td>
			<td><?php echo $value['salary']; ?></td>
			<td>
				<a href="resetthatid.php?id=<?php  echo $value['id'];?>">reset
				</a>
			</td>
		</tr>
		<?php
		
			}	
		?>
	</table>
</body>
</html>