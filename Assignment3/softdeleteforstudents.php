<?php


include 'Database.php';
$softdelete = new Database();



if (isset($_GET["id"])) {
	$softdelete->softDeleteS($_GET["id"]);
	header("location:show.php");
}




?>