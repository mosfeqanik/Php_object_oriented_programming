<?php 
////here i print protected   const

	
class Constant
{
    
	protected const name="nayim";

    public function myconName()
    {
        echo self::name;

    }
}
    class Constant2 extends Constant
	{
		public function getCon()
		{
		 	return "this code is from constant2".self::name;
		}
}



$obj=new Constant2;
echo $obj->getCon();
?>