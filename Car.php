<?php

class Car
{
	public $model="GTR";

	public function modelPrint()
	{
		echo $this->model;
	}
}

$bmw=new Car;
$bmw->modelPrint();






?>