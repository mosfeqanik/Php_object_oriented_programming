<?php 

class Book
{

	//properties are like variables
	public $isbn;
	public $tittle;
	public $author;
	public $available;
	//methods are like function


	public function __construct(int $isbn,string $tittle,string $author,int $available)
	{
		$this->isbn=$isbn;
		$this->tittle=$tittle;
		$this->author=$author;
		$this->available=$available;

	}
	public function __toString()
	{
		$result=$this->tittle."By".$this->author."<br>";
		if(!$this->available)
		{
			$result="not avaiable";
		}
		return $result;
	}

	public function getcopy()
	{
		if($this->available<0)
		{
			return false;
		}
		else
		{
			$this->available--;
			return true;
		}
	}

}




?>