<?php
include 'db.php';
$sh = new db();


if(isset($_GET['id'])){

	$sh->delete($_GET['id']);
	header("location: show.php");
}



?>