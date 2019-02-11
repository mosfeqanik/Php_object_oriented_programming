<?php  

include 'Db.php';
$shw = new Db();
$data= $shw->Show();
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
	<table border="2px solid black">
		<tr>
			<th>Name</th>
			<th>Model</th>
			<th>Price</th>
		</tr>
		<?php
			foreach ($data as $key =>$value ) {
			
		?>
		<tr>
			<td><?php  echo $value['name'];?></td>
			<td><?php  echo $value['model'];?></td>
			<td><?php  echo $value['price'];?></td>
		</tr>
		<?php
		
			}	
		?>
	</table>
</body>
</html>

