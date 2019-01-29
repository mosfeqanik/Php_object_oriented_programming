<?php 

class St
{
	public $classroom="lab5";
	public function teach()
	{
		echo "mentor is teaching in $this->classroom <br>";
	}
}
class ct extends St //parents always stay behind and support
{
	public $studentnumber=15;
	public function learn()
	{
		echo "$this->studentnumber students is learning in $this->classroom";
	}
}
$codertrusts=new ct;
$codertrusts->teach();
$codertrusts->learn();



 ?>