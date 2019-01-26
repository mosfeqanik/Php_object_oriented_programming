<?php 

class magic_method
{
	public $studentname;


	public function __construct($name)
	{
		echo $this->studentname=$name."<br>";
	}
	public function printMyname()
	{
		return "i can print"."<br>";
	}
	public function __destruct()
	{
		echo "i am ending print"."<br>";
	}
}
$anik=new magic_method("Anik");
echo $anik->printMyname();











 ?>