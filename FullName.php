<?php 


	class FullName
	{	
		public $name;
		public function getName($var)
		{
			$this->name=$var;
			return $var;
		}


		public function setName()
		{
			echo "i am  mosfeq $this->name from printName";
		}
	}




?>