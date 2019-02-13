<?php

include 'Db.php';
$softdel = new Db();
if(isset($_GET["id"]))
	{	
		$id=$_GET["id"];
		$result=$softdel->softdelete($id);
		header( "location:Show.php");

	}


?>