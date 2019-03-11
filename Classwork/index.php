<?php
session_start();
if(!$_SESSION['user']){
  header("location:login.php");
}

include 'db.php';

$con = new db();

if(isset($_POST['submit'])){

  $con->insert($_POST['name'],$_POST['model'],$_POST['price']);
  echo "inserted";
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Add mobile</title>
</head>
<body>
  <a href="show.php">Show All Mobiles</a>
  <a href="logout.php">logout</a>
  <form action="" method="POST">
    <label>Name:</label>
    <input type="text" name="name"/><br>
    <label>Model:</label>
    <input type="text" name="model"/><br>
    <label>Price:</label>
    <input type="number" name="price"/><br>
    
    <input type="submit" name="submit" value="Add mobile"/>
  </form>

</body>
</html>