<?php
include 'db.php';
$sh = new db();


if(isset($_GET['id'])){

	$sh->softDelete($_GET['id']);
	header("location: show.php");
}



?>