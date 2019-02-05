<?php  




/**
public is for inner class and outside class also

protected is for child class 

private is for child class 
*/

class Mobile
{
	public $model;
	public $serial_number;

	public function __contruct($mmodel,$sserial_number)
	{
		$this->model=$mmodel;
		$this->serial_number=$sserial_number;
	}



	public function getModelnum(string $model)
	{	

		echo 	$this->model;
	}


	public function setModelnum()
	{
		echo "My  mobile Model number $this->model <br>";
	}
}





?>