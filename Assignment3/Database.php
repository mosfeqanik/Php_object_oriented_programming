<?php  

include "Crud.php";
class Database implements Crud
{	
	public $conn;

	//Database connection 
	public function __construct()
	{
		$pdo = new PDO("mysql:host=localhost;dbname=ctg180assign","root","");
		$this->conn=$pdo;
		// echo "inserted";
	}

	//insertion to database 

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

	//Show data  from students table from database 
	public function read()
	{
		$Select="SELECT * FROM students";
		$statement=$this->conn->prepare($Select);
		$statement->execute();
		$result = $statement->fetchAll();

		return $result;
	
	}

	//Show all data  from users table from database 
	public function readUserdata()
	{
		$Select="SELECT * FROM users";
		$statement=$this->conn->prepare($Select);
		$statement->execute();
		$result = $statement->fetchAll();

		return $result;
	
	}
	//registration method
	public function register($username,$password)
	{
		$password=md5($password);
		$registration_query="INSERT INTO users (username, password)
			VALUES (:username, :password)";
	// 	var_dump($insert_query);
 	// 	echo "<br>";

		$statement=$this->conn->prepare($registration_query);
		$statement->execute
	(
		array
		(
			":username"=>$username,
			":password"=>$password,
		)
	);
	echo "registration is completed";

	}

	//login method
	public function login($username,$password)
	{

		$login="SELECT * FROM users WHERE username=:username AND password=:password";
		$statement=$this->conn->prepare($login);
		$statement->execute
		(
			array
			(	':username' => $username,
				':password' => md5($password)
			)
		);
		$result = $statement->fetchAll();

		return 1;
	
	}

	//Showing By Id
	public function ShowById($id )
	{
		$Select="SELECT * FROM users WHERE id=:id";
		$statement=$this->conn->prepare($Select);
		$statement->execute
		(
			array(':id' =>$id  )

		);
		$result = $statement->fetchAll();
	return $result;
	}


	// update method is created
	public function update($username,$password,$id)
	{	
		// $password=md5($password);
		$update_query="UPDATE users SET username=:username, password=:password WHERE id=:id";

		$statement=$this->conn->prepare($update_query);
		$statement->execute
	(
		array
		(
			":username"=>$username,
			":password"=>md5($password),
			":id"=>$id,

		)
	);
	}

	//permanent delete
	public function Delete($id )
	{
		$delete="DELETE FROM users WHERE id=:id";
		$statement=$this->conn->prepare($delete);
		$statement->execute
		(
			array(':id' =>$id  )

		);
		$result = $statement->fetchAll();
		return $result;
	}

	
}


?>