<?php 

$greet=function(){
	echo "this is a closure example <br>";
};
$greet();

$name="anik";
$greet2=function() use($name){
	echo "this is a closure example.user name is .$name";
};
$greet2();


?>