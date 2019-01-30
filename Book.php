<?php 

class Book
{
	public $isbn;
	public $tittle;
	public $author;
	public $available;
}
$harry_potter=new Book;
$harry_potter->isbn=3945664;
$harry_potter->tittle="harry potter and the philosopher's stone";
$harry_potter->author="J. K. Rowling";
$harry_potter->available=10;

// var_dump(Book);
var_dump($harry_potter);




?>