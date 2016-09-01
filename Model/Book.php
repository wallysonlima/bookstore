<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 01/09/2016
	*/

class Book
{
	private int $codBook;
	private String $nameBook, $author, $synopsis, $subject, $year;
	private float $price;
	private int $numPages;

	public function Book($nameBook, $author, $synopsis, $subject, $year, $price, $numPages)
	{
		$this->nameBook = $nameBook;
		$this->author = $author;
		$this->synopsis = $synopsis;
		$this->subject = $subject;
		$this->year = $year;
		$this->price = $price;
		$this->numPages = $numPages;
	}

}   
?>
