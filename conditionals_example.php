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
	echo $num;
	if ($num==5) {
		echo "it $num is 5<br>";
	}
	else
	{
		echo "it $num is not 5 <br>";
	}


	$num2=5;
	echo $num2;

	if ($num2===5) {
		echo "it $num2 is not 5 string<br>";
	}
	else
	{
		echo "it $num2 is  5 string<br>";
	}



// nested loop added
	$num3=4;
	if ($num3>5) 
	{
		if ($num3<10) 
		{
			echo "the $num3 is between 5 to 10 <br>";
		}
	}
	else
	{
			echo "the $num3 is not between 5 to 10 <br>";

	}
	
/*
&& AND 
|| or
XOR
*/
$num4=6;
	if ($num4>5 && $num4<10) // example of AND
	{
			echo "the $num4 is between 5 to 10 <br>";
	}
	else
	{
			echo "the $num4 is not between 5 to 10 <br> ";

	}
	

$num5=11;
	if ($num5>5 || $num5<10) // example of OR
	{
			echo "the $num5 is between 5 to 10 <br>";
	}
	else
	{
			echo "the $num5 is not between 5 to 10 <br> ";

	}












?>