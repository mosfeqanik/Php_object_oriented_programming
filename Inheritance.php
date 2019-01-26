<?php 
class Car    //parent Car
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
class Audi extends Car    //child Audi
{
	public $color="red";
	public $seats=4;

}

$myName=new Audi;			// child will have all properties and method of parent
echo $myName->EngineStatus();
echo $myName->BodyPart();
echo $myName->color."<br>";
echo $myName->seats."<br>";






?>