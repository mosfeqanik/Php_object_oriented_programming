<?php

	if (isset($_POST["submit"])) {
		// echo "clicked";
		$tmp_file=$_FILES["image"]["tmp_name"];  //tmp_name will be
		var_dump($tmp_file);
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