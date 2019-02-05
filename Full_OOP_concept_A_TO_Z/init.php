<?php 




include"Mobile.php";
include"Phone.php";


// if (isset($_POST['submit'])) {
// 	$mobile=$_POST['mobile'];
// 	$serial_number1=$_POST['serial_number1'];
// 	// $phone=$_POST['phone'];
// 	// $serial_number2=$_POST['serial_number2'];


	// }

	$Rangs=new Phone("hi","anik");
	echo $Rangs->getPhoneinfo();
	$Rangs->setPhonenum();


// $xiaomi=new Mobile(1222,$serial_number1);
// 	$xiaomi->getModelnum();
// 	$xiaomi->setModelnum();



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
</html>-->