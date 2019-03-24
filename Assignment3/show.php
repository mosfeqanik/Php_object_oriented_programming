<?php  

session_start();
include 'Database.php';
$show = new Database();
$data= $show->read();
$userdata= $show->readUserdata();


// print_r($data);
// foreach ($data as $key => $value) 
// {$
// 	echo value["name"]."<br>";
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
	<a href="logout.php">(<?php echo $_SESSION['name']; ?>)logout.php</a>
	<form action="#"method="POST">
		<label>Enter Your search salary amount </label>
		<input type="text" name="amount">
		<input type="submit" name="submit">
	</form>

	<table border="2px solid black">
		<tr>
			<?php
			if (isset($_POST["submit"])) 
			{
	
				$amount=$_POST["amount"];
				$searchdata= $show->searchquery($amount);
				// print_r($searchdata);
			?>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>salary</th>
			<!-- <th>Action</th> -->
		</tr>
			<?php
			
				foreach ($searchdata as $value ) {

			?>
		<tr>
			<td><?php  echo $value['name'];  ?></td>
			<td><?php  echo $value['email']; ?></td>
			<td><?php  echo $value['phone']; ?></td>
			<td><?php echo $value['salary']; ?></td>
		</tr>
		<?php
			}
		}
			else
			{
				foreach ($data as $value ) {
			
		?>
		<tr>
			<td><?php  echo $value['name'];  ?></td>
			<td><?php  echo $value['email']; ?></td>
			<td><?php  echo $value['phone']; ?></td>
			<td><?php echo $value['salary']; ?></td>
			<td>
				<a href="Showbyidforstudents.php?id=<?php  echo $value['id'];?>">edit
				</a>
				||
				<a href="deleteforstudents.php?id=<?php  echo $value['id'];?>">delete
				</a>
				||
				<a href="softdeleteforstudents.php?id=<?php  echo $value['id'];?>">Soft Delete
				</a>
			</td>
		</tr>
		<?php
		
			}
		} 
		?>
		<a href="reset.php">Reset</a>
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
