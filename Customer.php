<?php

class Customer
{
	private $id;
	private $firstname;
	private $surname;
	private $email;


	public function __construct($id,$firstname,$surname,$email)
	{
		$this->id=$id;
		$this->firstname=$firstname;
		$this->surname=$surname;
		$this->email=$email;

	}
	public function getFirstname()
	{
		return $this->firstname;
	}

	public function getSurname()
	{
		return $this->surname;
	}
	public function getFullname()
	{
		return $this->firstname." ".$this->surname."<br>";
	}


}



?>