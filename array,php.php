<?php  


// foreach ($data as $keys =>$value) 
// {	
// 	echo $keys['name']."<br>";
// 	echo $keys['model']."<br>";
// 	echo $keys['price']."<br>";
// 	echo $value['name']."<br>";
// 	echo $value['model']."<br>";
// 	echo $value['price']."<br>";

// }
$cars = array
  (
  array("my_first_car","is","Volvo"),
  array("my_second_car","is","BMW"),
  array("my_third_car","is","Land Rover")
  );
  echo $cars[0][0]." ".$cars[0][1]." ".$cars[0][2];
  echo "<br>";
  echo $cars[1][0]." ".$cars[1][1]." ".$cars[1][2];
  echo "<br>";
  echo $cars[2][0]." ".$cars[2][1]." ".$cars[2][2];
  echo "<br>";

for ($row=0; $row <=2 ; $row++) {
  	
  	echo "<br>";
    echo "sentence_number".$row;
  	echo "<br>";

	for ($col=0; $col <=2 ; $col++) { 
		
		echo $cars[$row][$col]." ";
	}
}

$family=array(
			"Anik" => array(	'laptop' => "dell",
							'mobile' => "xiaomi note 3 pro",
							'passed' => "versity"),
			"Anika" => array('mobile' => "xiaomi note 5",
							'not passed' => "versity"),
			"Anan" => array('mobile' => "Acer",
							'passed' => "class3"),
		);
foreach ($family as $key => $value) {
	foreach ($value as $things => $thingsname) {
		echo "$key has $things named $thingsname<br>";
	}
}




// foreach ($cars as $keys =>$value) 
// {	
// 	echo $keys[0]."<br>";
// 	echo $keys[1]."<br>";
// 	echo $keys['price']."<br>";
// 	echo $value['name']."<br>";
// 	echo $value['model']."<br>";
// 	echo $value['price']."<br>";

// }

?>