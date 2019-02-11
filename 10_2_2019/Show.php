<?php  

include 'Db.php';
$shw = new Db();
$data= $shw->Show();
// print_r($data);
foreach ($data as $key => $value) 
{
	echo $value["name"]."<br>";
	echo $value["model"]."<br>";
	echo $value["price"]."<br>";

}



?>