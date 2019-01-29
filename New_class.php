<?php 
include 'interface.php';

class New_class implements foo{
	public $myname="hi i am anik<br>";
	public function hello()
	{
		echo $this->myname;
	}
}
$new_var=new New_class;
$new_var->hello();
echo $new_var->myname;
?>