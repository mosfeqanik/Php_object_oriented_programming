<?php

include 'Db.php';
$softdel = new Db();
if(isset($_GET["id"]))
	{	
		$id=$_GET["id"];
		$result=$softdel->Delete($id);
		header( "location:Show.php");

	}


?>