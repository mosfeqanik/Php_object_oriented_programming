<?php  


namespace Mobilestore\Anik;

include"Mobileshowroom.php";

/**
public is for inner class and outside class also

protected is for child class 

private is for child class 
*/

class Mobile extends Mobileshowroom
{
	public $model;
	public $serial_number;

	public function __construct($mmodel,$sserial_number)
	{
		$this->model=$mmodel;
		$this->serial_number=$sserial_number;
	}



	// public function getModelnum()
	// {	

	// 	return $this->model;
	// }


	public function setModelnum()
	{
		return "My  mobile Model number $this->model <br>  $this->name ";
	}
}





?>