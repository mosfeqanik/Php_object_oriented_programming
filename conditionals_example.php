<?php

#condition
/*
	== is equal
	=== is for equality for data types also
	>is for greater than
	<is for less than
	!= is not equal
	!== is not equal type
	

*/
	$num=5;
	if ($num==5) {
		echo "it is 5<br>";
	}
	else
	{
		echo "it is not 5 <br>";
	}


	$num2=5;
	if ($num2===5) {
		echo "it is not 5 string<br>";
	}
	else
	{
		echo "it is  5 string<br>";
	}



// nested loop added
	$num3=4;
	if ($num3>5) 
	{
		if ($num3<10) 
		{
			echo "the num is between 5 to 10 ";
		}
	}
	else
	{
			echo "the num is not between 5 to 10 ";

	}
	












?>