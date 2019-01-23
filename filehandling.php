<?php

	if (isset($_POST["submit"])) {
		// echo "clicked";
		$tmp_file=$_FILES["image"]["tmp_name"];  //tmp_name will be
		echo  "temporary file is       ".$_FILES["image"]["tmp_name"];
		echo "</br>";
		echo  "filename is      ".$_FILES["image"]["name"];
		$destination= $_FILES["image"]["name"];
		$filesize=$_FILES["image"]["size"];
		move_uploaded_file($tmp_file, "uploads/". $destination);
		echo "</br> uploaded";
		//  var_dump($tmp_file);
		if ($filesize<1000000) {
			echo "</br>"."file is good";
			echo "</br>".$filesize;
		}
		else{
			echo "</br>"."file is over capable size";
			echo "</br>".$filesize;

		}

	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>
		file handling and validation
	</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">  <!-- multipart/form-data -->
		<input type="file" name="image">
		<input type="submit" name="submit"value="upload">
	</form>
</body>
</html>