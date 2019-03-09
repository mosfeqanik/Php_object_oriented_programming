<?php  

session_start();
include 'Database.php';
$del = new Database();
if(isset($_GET["id"]))
	{	
		$id=$_GET["id"];
		$result=$del->deleteFromStudents($id);
		header( "location:Show.php");

	}


?>