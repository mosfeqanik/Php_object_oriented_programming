<?php  






class Phone
{
	public $phnmodel;
	public $serial_number;

	public function __construct($model,$snumber)
	{
		$this->phnmodel=$model;
		$this->serial_number=$snumber;

	}

	public function getPhoneinfo()
	{	

		return 	$this->phnmodel."&".$this->serial_number."<br>";
	}


	public function setPhonenum()
	{
		echo "My phone Model number is $this->phnmodel <br>";
	}
}





?>