<?php  


namespace Mobilestore\Anik;

include"Mobileshowroom.php";





class Phone extends Mobileshowroom
{
	public $phnmodel;   
	/* static properties and method 
	 
	 so far all the properties and methods were linked to a specific instance two diferent instances could have two values for the same property  

	 php allows you to have multiple properties and methods linked to the class itself rather than to the object*/
	public $serial_number;
	public static $outlet=15;

	public function __construct($model,$snumber,$bootnum)
	{
		$this->phnmodel=$model;
		$this->serial_number=$snumber;
		$this->bootnum=self::$outlet;

	}

	public function getPhoneinfo()
	{	

		return 	$this->phnmodel."&".$this->serial_number.self::$outlet."<br>";
	}


	public function setPhonenum()
	{
		return "My phone Model number is $this->phnmodel <br> $this->name";
	}
}






?>