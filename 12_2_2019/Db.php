<?php  

class Db{

	public $conn;
	
	public function __construct()
	{
		$pdo = new PDO("mysql:host=localhost;dbname=ctg180","root","");
		$this->conn=$pdo;
	}

	//inserting data
	public function insert($name,$model,$price)
	{
		$insert_query="INSERT INTO mobiles (name, model, price)
			VALUES (:name, :model, :price)";
	// 	var_dump($insert_query);
 	// 	echo "<br>";

		$statement=$this->conn->prepare($insert_query);
		// var_dump($statement);
	 	// echo "<br>";

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

	//Showing all
	public function Show()
	{
		$Select="SELECT * FROM mobiles";
		$statement=$this->conn->prepare($Select);
		$statement->execute();
		$result = $statement->fetchAll();

		return $result;
	
	}

	//Showing By Range
	public function Range($range)
	{
		if(empty($range))
			{
				$range="40000";
			}
		$Searchquery="SELECT * FROM mobiles WHERE price <= :range";
		$statement=$this->conn->prepare($Searchquery);
		$statement->execute
					(
						array
						(
							':range' => $range 
						)
					);
		$result = $statement->fetchAll();

		return $result;
	
	}
	//Showing By Id
	public function ShowById($id )
	{
		$Select="SELECT * FROM mobiles WHERE id=:id";
		$statement=$this->conn->prepare($Select);
		$statement->execute
		(
			array(':id' =>$id  )

		);
		$result = $statement->fetchAll();
	return $result;
	}
	
	//updating datas
	public function update($name,$model,$price,$id)
	{
		$update_query="UPDATE mobiles SET name=:name, model=:model, price=:price WHERE id=:id";

		$statement=$this->conn->prepare($update_query);
		$statement->execute
	(
		array
		(
			":name"=>$name,
			":model"=>$model,
			":price"=>$price,
			":id"=>$id,

		)
	);
	}

	//permanent delete
	public function Delete($id )
	{
		$Select="DELETE FROM mobiles WHERE id=:id";
		$statement=$this->conn->prepare($Select);
		$statement->execute
		(
			array(':id' =>$id  )

		);
		$result = $statement->fetchAll();
		return $result;
	}


	public function softdelete($id)
	{
		$time = date("Y/m/d");
		$temporay_delete="UPDATE mobiles SET deleted_id = :tim WHERE id =:id";
		$statement=$this->conn->prepare($temporay_delete);
		$statement->execute
			(
				array
				(
				':tim' => $time,
				':id' => $id
				)

			);
		// $statement->fetchAll();

		return 1;
	
	}
}
