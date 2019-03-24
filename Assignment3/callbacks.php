
<?php  

function string($string,$callback){
	$result=array(
		'upper' => strtoupper($string),
		'lower' => strtolower($string)
		 );
	if (is_callable($callback)) {
		//echo "hi here i am from callback";
		call_user_func($callback,$result);
	}
}

// $name=name('Alex');

// echo $name['upper']."<br>";

// echo $name['lower']."<br>";

// print_r(name('alex'));

string ('alex',function ($name){
	echo $name['upper']."<br>";
	echo $name['lower']."<br>";

});

?>