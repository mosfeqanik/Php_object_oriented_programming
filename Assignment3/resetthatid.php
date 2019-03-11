<?php  

include 'Database.php';
$reset = new Database();

if(isset($_GET["id"]))
	{	
		$id=$_GET["id"];
		$reset->resetThatId($id);
		header("location:show.php");

	}







?>