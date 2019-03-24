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
		$Select="SELECT * FROM students WHERE deleted_at IS NULL";
		$statement=$this->conn->prepare($Select);
		$statement->execute();
		$result = $statement->fetchAll();

		return $result;
	
	}
	//reset method
	public function showForReset()
	{
		$Select="SELECT * FROM students WHERE deleted_at IS NOT NULL";
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
	header("location:login.php");

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

		return $result;
	
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


	//Showing By id for mobiles
	public function ShowByIdstudents($id )
	{
		$Select="SELECT * FROM students WHERE id=:id";
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

	// update method is created
	public function updateStudents($name,$email,$phone,$salary,$id)
	{	
		// $password=md5($password);
		$update_query="UPDATE students SET name=:name, email=:email,phone=:phone,salary=:salary WHERE id=:id";
		$statement=$this->conn->prepare($update_query);
		$statement->execute
	(
		array
		(
			":name"=>$name,
			":email"=>$email,
			":phone"=>$phone,
			":id"=>$id,
			":salary"=>$salary,
		)
	);
	}

	//permanent delete for users
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

	//permanent delete for students
	
	public function deleteFromStudents($id)
	{
		$delete="DELETE FROM students WHERE id=:id";
		$statement=$this->conn->prepare($delete);
		$statement->execute
		(
			array(':id' =>$id  )

		);
		$result = $statement->fetchAll();
		return $result;
	}

	//softdelete for students
	public function softDeleteS($id)
	{	
		$time=date("Y-m-d");
		$update_query="UPDATE students SET deleted_at=:tim WHERE id=:id";

		$statement=$this->conn->prepare($update_query);
		$statement->execute
			(
				array
				(
					":tim"=>$time,
					":id"=>$id


				)
			);
	}

	//reset method is created
	public function resetThatId($id)
	{	
		$update_query="UPDATE students SET deleted_at= NULL  WHERE id=:id";
		$statement=$this->conn->prepare($update_query);
		$statement->execute
	(
		array
		(
			":id"=>$id,
		)
	);
	}

	//search method 
	public function searchquery($range)
	{
		if (empty($range)) {
			$range="40000";
		}
		$Select="SELECT * FROM students WHERE salary<=:range";
		$statement=$this->conn->prepare($Select);
		$statement->execute(
			array
		(
			":range"=>$range,
		)

		);
		$result = $statement->fetchAll();
	return $result;
	}


}


?>