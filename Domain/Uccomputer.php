<?php 

namespace Uccomputerstore\Domain;
	class Uccomputer
	{

		public static $lastid=0;
		public $id;
		public $productname;
		public $customername;
		public $deliverytime;


		public function __construct($id,$productname,$customername,$deliverytime)
		{

			if ($id == null) {
				$this->id = ++self::$lastid;
			}
			else
			{	
				$this->id=$id;
				if($id > self::$lastid)
				{
					self::$lastid=$id;
				}

			}

			$this->productname=$productname;
			$this->deliverytime=$deliverytime;
		}

		//	self:: is for static properties and method

		//accesor
		public static function getlastid()
		{
			return self::$lastid;
		}
		public static function getproductname()
		{
			return $this->productname;
		}
		public static function setproductname()
		{
			echo $this->productname;
		}
	}


?>