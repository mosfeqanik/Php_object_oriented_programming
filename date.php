<?php
	echo "<br>";
	echo date('d');  //date
	echo "<br>";
	echo date('m');  //Month
	echo "<br>";
	echo date('Y');  //year
	echo "<br>";
	echo date('l'); //day of week

	echo "<br>";
	echo date('Y/m/d'); //for year/month/date
	echo "<br>";
	echo date('d-m-y'); //for year/month/date

	echo "<br>";
	echo date('h'); //hour
	echo "<br>";
	echo date('i'); //min
	echo "<br>";
	echo date('s');	//Second
	echo "<br>";
	echo date('a');	//am
	echo "<br>";
	echo date('h:i.sa');

	// Set Time Zone
	date_default_timezone_set('Asia/Dhaka');
	$timestamp = mktime(8, 14, 54, 9, 02, 1996);
	echo "<br>";
	echo date('Y/m/d h:i.sa', $timestamp);
	$timestamp1 = strtotime('7:00pm Merch 22 2016');
	echo "<br>";
	echo date('Y/m/d h:i.sa', $timestamp1);
	$timestamp2 = strtotime('tomorrow');
	echo "<br>";
	echo date('Y/m/d h:i.sa', $timestamp2);

?>