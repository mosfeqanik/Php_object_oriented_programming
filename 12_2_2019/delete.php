<?php  

include 'Db.php';
$del = new Db();
if(isset($_GET["id"]))
	{	
		$id=$_GET["id"];
		$result=$del->Delete($id);
		header( "location:Show.php");

	}


?>