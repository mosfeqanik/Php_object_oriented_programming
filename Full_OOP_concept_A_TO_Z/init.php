<?php 
/*
namespace/use


if you have two classes with the same name,php would not know which one is being refered to solve this issue,
*php allows us to us namespace "keyword "
*namespace acts as paths in a filesystem each section of the namespace is separated by \

before we us namespace one thing to note is that even though namespaces and the file path will usually be the same 
*this is not necessary,as a developer you can enforce the namespace


*/

use  Mobilestore\Anik\Mobile as mobiledetails;
use  Mobilestore\Anik\Phone as phonedetails;
use  Mobilestore\Anik\Mobileshowroom as store ;



include"Anik/Mobile.php";
include"Anik/Phone.php";
include"Anik/Mobileshowroom.php";



// if (isset($_POST['submit'])) {
// 	$mobile=$_POST['mobile'];
// 	$serial_number1=$_POST['serial_number1'];
// 	$phone=$_POST['phone'];
// 	$serial_number2=$_POST['serial_number2'];

// 	$Rangs=new phonedetails($phone,$serial_number2,null);
// 	echo $Rangs->getPhoneinfo();
// 	$Rangs->setPhonenum();


	// $xiaomi=new mobiledetails($mobile,$serial_number1);
	// echo $xiaomi->getModelnum();
	// echo $xiaomi->setModelnum();

// 	}
// $body=new store();
// echo $body->name;
// $body->getPrint();

$Rangs=new Phone("0123332552","1511",null);
echo $Rangs->setPhonenum();



?>
 <!-- <!DOCTYPE html>
<html>
<head>
	<title>input method</title>
</head>
<body>
	<form action="#"method="POST">
		<label>mobile & serial input :</label>
		<input type="text" name="mobile">
		<input type="text" name="serial_number1">

	<label>phone & serial input :</label>
		<input type="text" name="phone">
		<input type="text" name="serial_number2">
 		<input type="submit" name="submit">
	</form>
</body>
</html> -->