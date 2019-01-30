<?php  



include 'Book.php';
include 'Customer.php';

$harry_potter=new Book(3945664,"harry potter and the philosopher's stone","J. K. Rowling",12);
echo $harry_potter;

$firstcustomer=new Customer(3,"Anik","Mosfeq","Mosfeq@gmail.com");
var_dump($harry_potter);
echo "<br>";
var_dump($firstcustomer->getFirstname());
echo "<br>";
var_dump($firstcustomer->getSurname());
echo "<br>";
var_dump($firstcustomer->getFullname());
echo "<br>";
var_dump($firstcustomer->getEmail());
echo "<br>";
var_dump($firstcustomer->setEmail("Mosfeqanik01@gmail.com"));
echo "<br>";
var_dump($firstcustomer->getEmail());




// if ($harry_potter->getcopy()) 
// {
// 	echo "here is your copy";
// }
// else
// {
// 	echo "sorry  there is no copy";
// }

// // var_dump(Book);
// var_dump($harry_potter);











?>