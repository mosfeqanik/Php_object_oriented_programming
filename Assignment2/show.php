<?php  

include 'Database.php';
$show = new Database();
$data= $show->read();
print_r($data);
foreach ($data as $key => $value) 
{
	echo $value["name"]."<br>";
	echo $value["model"]."<br>";
	echo $value["price"]."<br>";

}



?>
