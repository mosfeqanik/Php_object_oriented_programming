<?php

class Car
{

	public $model;



	public function getPrint($carName)
	{
		$this->model=$carName;
	}
	public function setPrint()
	{
		echo $this->model."</br>";
	}

}

$bmw = new Car;
$bmw->getPrint("Sedan");
$bmw->setPrint();



$toyota = new Car;
$toyota->getPrint("x");
$toyota->setPrint();

$Audi = new Car;
$Audi->getPrint("R8");
$Audi->setPrint();



?>