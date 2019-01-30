<?php  



include 'Book.php';
include 'Customer.php';

$harry_potter=new Book(3945664,"harry potter and the philosopher's stone","J. K. Rowling",12);
echo $harry_potter;

if ($harry_potter->getcopy()) 
{
	echo "here is your copy";
}
else
{
	echo "sorry  there is no copy";
}

// var_dump(Book);
var_dump($harry_potter);











?>