<?php

class Assignment
{

	public $Number1;
	public $Number2;




	public function getPrint($Num1,$Num2)
	{
		$this->Number1=$Num1;
		$this->Number2=$Num2;

	}
	public function setPrint($Number1=$Num1,$Number2=$Num2)
	{	
		if($Num1>$Num2)
		{
			echo "$Number1 is greater";
		}
		else
		{
			echo "$Number2 is greater";

		}
	}
}
$math = new Assignment;
$math->getPrint(2,3);
$math->setPrint();



?>