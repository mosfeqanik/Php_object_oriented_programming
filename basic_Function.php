<?php
// there are three kinds of function declaration


/*
camel case-------myFunction()
lower case-------my_function()
pascal case-------MyFunction()
*/

//create simple function
function simpleFunction()
{
	echo "hello world<br>";
}
// run simple function
simpleFunction();

// function with param
function sayhello($name)
{
	echo "Hello $name<br>";
}
sayhello("joe");
sayhello("bob");

function addnumbers($num1,$num2)
{
	return $num1+$num2;
}

echo addnumbers(12,25)."<br>";


// BY reference
$mynum=10;
function addfive($num)
{
	$num +=5;
}
function addten(&$num)
{
	$num +=10;
}

addfive($mynum);
echo "value: $mynum<br>";

addten($mynum);
echo "value: $mynum<br>";



?>