<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>

	<?php
		include 'db.php';
		$sh = new db();

		//update data
		if(isset($_POST['submit'])){
			$res = $sh->update($_POST['name'],$_POST['model'],$_POST['price'],$_GET['id']);
			echo "Updated";
		}


		if(isset($_GET['id'])){
			$res = $sh->edit($_GET['id']);

			foreach($res as $value){
	?>

	<form action="" method="POST">
	    <label>Name:</label>
	    <input type="text" name="name" value="<?php echo $value['name'] ?>" /><br>
	    <label>Model:</label>
	    <input type="text" name="model" value="<?php echo $value['model'] ?>"/><br>
	    <label>Price:</label>
	    <input type="number" name="price" value="<?php echo $value['price'] ?>"/><br>
	    
	    <input type="submit" name="submit" value="Update"/>
    </form>

    <?php
			}
    	}
    ?>

</body>
</html>