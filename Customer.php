<?php

namespace Uccomputerstore\;
class Customer extends Person
{
	private $id;
	// private $firstname;
	// private $surname;
	private $email;


	public function __construct($id,$email)
	{	

		parent::__construct();
		$this->id=$id;
		
		$this->email=$email;

	}
	
	public function getFullname()
	{
		return strtoupper($this->firstname." ".$this->surname."<br>");
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email=$email;
		return $email;

	}


}



?>