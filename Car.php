<?php

class Car
{
	public $model="GTR";

	public function printModel()
	{
		 echo $this->model;
	}



}
$bmw = new Car;
$bmw->printModel();
echo "</br>".$bmw->model;





?>