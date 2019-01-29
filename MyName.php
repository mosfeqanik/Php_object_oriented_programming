<?php 
include "FullName.php";
class MyName extends FullName
{
	public function setName()
		{
			echo "i am $this->name from printName";
		}
}


$variable=new MyName;
$variable->getName("anik");
$variable->setName();


?>