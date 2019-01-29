<?php 
include "Gorib.php";
class MyStatus implements Gorib
{
	public function lowMOney()
	{
		echo "i am for lowmoney <br>";
	}
	public function Homeless()
	{
		echo "i am for lowmoney because i am homeless <br>";
	}
}

$bank=new MyStatus();
$bank->lowMOney();
$bank->Homeless()


?>