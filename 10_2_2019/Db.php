<?php  

class Db{

	public $conn;
	
	public function __construct()
	{
		$pdo = new PDO("mysql:host=localhost;dbname=ctg180","root","");
		$this->conn=$pdo;
	}

	public function insert($name,$model,$price)
	{
		$insert_query="INSERT INTO mobiles (name, model, price)
			VALUES (:name, :model, :price)";
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
			":model"=>$model,
			":price"=>$price
		)

	);

	}
	public function Show()
	{
	$Select="SELECT * FROM mobiles";
	$statement=$this->conn->prepare($Select);
	$statement->execute();
	$result = $statement->fetchAll();

	return $result;
	
	}

}
