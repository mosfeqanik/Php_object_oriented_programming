<?php 
include 'db.php';
$sh = new db();

$result = $sh->show();
// var_dump($result);

?>
<!DOCTYPE html>
<html>
<head>
	<title>All Mobiles</title>
</head>
<body>

	<form action="" method="GET">
		<input type="number" name="s_query" placeholder="Search" />
		<input type="submit" name="submit" value="Search"/>
	</form>

	<table border="1px solid black">

		<tr>
			<th>Name</th>
			<th>Model</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
		<?php
			//seach mobile data
			if(isset($_GET['submit'])){
				$query = $_GET['s_query'];
				$res = $sh->search($query);

		?>

		<?php
			foreach ($res as $value) {
				
		?>
		<tr>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['model']; ?></td>
			<td><?php echo $value['price']; ?></td>
		</tr>
		<?php 
			}
		?>

		<?php	
			}else{
		?>
		<?php
			foreach ($result as $value) {
				
		?>
		<tr>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['model']; ?></td>
			<td><?php echo $value['price']; ?></td>
			<td><a href="edit.php?id=<?php echo $value['id']; ?>">edit</a> || <a href="delete.php?id=<?php echo $value['id']; ?>">delete</a> || <a href="softdelete.php?id=<?php echo $value['id']; ?>"> Soft delete</a></td>
		</tr>
		<?php 
			}
		}
		?>
		
	</table>

</body>
</html>