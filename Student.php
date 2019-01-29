<?php

class Student
{
	public $student="i am excuting <br>";

	public function __construct($name)
	{	
		$this->student=$name;
		echo $name;
		// echo $this->student;
	}
	public function print_name()
	{
		return "hello i am  print_name<br>";
	}
	public function __destruct()
	{
		echo "i will go ";
	}

}
$anik=new Student("anik<br>");
echo $anik->print_name();





?>