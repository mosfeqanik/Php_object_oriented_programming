<?php  


// use Uccomputerstore\Domain\Uccomputer as computerstore ;
// use Uccomputerstore\Domain\Owner as ownerdetails;
// use Uccomputerstore\Person;
// use the namespace the as the keyword

// autoloader function to autoload classes

// https://www.tutorialspoint.com/php/php_function_strpos.htm
// https://www.tutorialspoint.com/php/php_function_substr.htm
// https://www.tutorialspoint.com/php/php_function_str_replace.htm
// function autoloader($classname)
// {
// 	$lastSlash = strpos($classname,'\\')+1;
// 	$classname = substr($classname,$lastSlash);
// 	$directory = str_replace('\\','/',$classname);
// 	$filename = __DIR__.'/'.$directory.'.php';
// 	require_once $filename;
// }
// spl_autoload("autoloader");


// lets require class
include 'Domain/Uccomputer.php';
include 'Domain/Owner.php';




include 'Book.php';
include 'Customer.php';



//instantiate
// $harry_potter=new Book(3945664,"harry potter and the philosopher's stone","J. K. Rowling",12);
// echo $harry_potter;

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


if ($harry_potter->getcopy()) 
{
	echo "here is your copy";
}
else
{
	echo "sorry  there is no copy";
}

var_dump($harry_potter);




// $Dell=new Uccomputer(4,"dell","Mosfeq",6);
// $Hp=new Uccomputer(null,"Hp","anik",6);
// $sony=new Uccomputer(5,"sony","anan",6);





// for reference object will be method or properties name with ::



// echo "<br>";
// var_dump($Dell);
// echo $Dell::getlastid();
// echo "<br>";
// for reference Class will be method or properties name with ::

// echo Uccomputer::getlastid();

// echo "<br>";
// var_dump($Hp);
// var_dump($Hp::getlastid());
// echo "<br>";
// var_dump($sony);
// var_dump($sony::getlastid());


// $Mosfeqanik=new ownerdetails("anik","mirpur-1","01676667735");
// echo "<br>";
// var_dump($Mosfeqanik);













?>