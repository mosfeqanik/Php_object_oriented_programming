<?php  

include "Crud.php";
class Database implements Crud
{	
	public $conn;

	public function __construct()
	{
		$pdo = new PDO("mysql:host=localhost;dbname=ctg180","root","");
		$this->conn=$pdo;
		// echo "inserted";
	}
	public function save($name, $email, $phone)
	{
		$insert_query="INSERT INTO students (name, email, phone)
			VALUES (:name, :email, :phone)";
		// var_dump($insert_query);
	 	// 	echo "<br>";

		$statement=$this->conn->prepare($insert_query);
		// var_dump($statement);
	 	// 	echo "<br>";

		// $statement->bindParam(":name",$name);
		// $statement->bindParam(":model",$model);
		// $statement->bindParam(":price",$price);
		// $statement->bindValue();
		$statement->execute
		(
			array
			(
				":name"=>$name,
				":email"=>$email,
				":phone"=>$phone
			)

		);
		echo "Insert is successful <br>";
	}

	public function read()
	{
		$Select="SELECT * FROM students";
		$statement=$this->conn->prepare($Select);
		$statement->execute();
		$result = $statement->fetchAll();

		return $result;
	
	}
}


?>