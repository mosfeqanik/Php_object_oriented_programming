<?php 
class Car
{
	public function EngineStatus()
	{
		echo "engine is ok <br>";
	}
	public function BodyPart()
	{
		echo "7 parts included<br>";
	}
}
class Audi extends Car
{
	public $color="red";
	public $seats=4;

}

$myName=new Audi;
echo $myName->EngineStatus();
echo $myName->BodyPart();
echo $myName->color."<br>";
echo $myName->seats."<br>";






?>