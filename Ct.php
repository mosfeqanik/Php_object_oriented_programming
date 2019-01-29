<?php 

include "St.php";
	class Ct extends St //parents always stay behind and support
{
	public $studentnumber=15;
	public function learn()
	{
		echo "$this->studentnumber students is learning in $this->classroom <br>";
		echo "i am from Ct<br>";
	}
}


?>