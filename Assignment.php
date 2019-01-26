<?php

class Assignment
{

	public $Number1;
	public $Number2;




	public function getPrint($Num1,$Num2)
	{
		$this->Number1=$Num1;
		$this->Number2=$Num2;
		// echo $Num1,$Num2."<br>";

	}
	public function setPrint()
	{	
		if($this->Number1>$this->Number2)
		{
			echo $this->Number1. "  is greater";
		}
		else
		{
			echo $this->Number2. "  is greater";

		}
	}
}
$math = new Assignment;
$math->getPrint(2,3);
$math->setPrint();



?>




