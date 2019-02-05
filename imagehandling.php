<?php

	if (isset($_POST["submit"])) {
		// echo "clicked";
		$tmp_file=$_FILES["image"]["tmp_name"];  //tmp_name will be not change because it is default
		echo  "temporary file is       ".$_FILES["image"]["tmp_name"];
		echo "</br>";
		echo  "filename is      ".$_FILES["image"]["name"];
		$destination= $_FILES["image"]["name"];
		$filesize=$_FILES["image"]["size"];
		// 
		
		//  var_dump($tmp_file);]
		$filetype=$_FILES["image"]["type"];
		// 	echo "</br>"."file is good"."</br>".$filetype;
		echo "</br>".$filetype;
		if($filetype=="image/png"){
			move_uploaded_file($tmp_file, "uploads/". $destination);
			echo "</br> uploaded and it is a png file";

		}
		else{
			echo "</br> error";
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
		<input type="file" name="image" accept="images/*"> <!-- accept="images/jpeg" -->
		<input type="submit" name="submit"value="upload">
	</form>
</body>
</html>
