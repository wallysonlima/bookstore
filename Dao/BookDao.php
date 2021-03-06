<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 01/09/2016
	*/
include("../Model/Database.php");
include("../Model/Book.php");

class BookDao
{
	private $con = null;
	private const $tableName = "book";
	
	public function BookDao()
	{
		$con = connection();
	}

	public function insertBook($nameBook, $author, $synopsis, $subject, $year, $price, $numPages)
	{
		$sql = $con->prepare("Insert Into $tableName (nameBook, author, synopsis, subject, year, price, numPages) Values 
			(?, ?, ?, ?, ?, ?, ?);");

		$sql->bindValue(1, $nameBook);
		$sql->bindValue(2, $author);
		$sql->bindValue(3, $synopsis);
		$sql->bindValue(4, $subject);
		$sql->bindValue(5, $year);
		$sql->bindValue(6, $price);
		$sql->bindValue(7, $numPages);

		$sql->execute(); 

		$con = null;
	}

	public function selectBook($codBook)
	{
		$sql = $con->prepare("Select * FROM $tableName where codBook = ?;");

		$sql->bindValue(1, $codBook);
		$sql->execute();

		$arrayBook = array();

		while ( $row = $sql->fetch() )
		{
			$book = new Book($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
			array_push($arrayBook, $book);
		}

		$con = null;
		return $arrayBook;
	}

	public function alterBook($codBook, $nameBook, $author, $synopsis, $subject, $year, $price, $numPages)
	{
		$sql = $con->prepare("Update $tableName SET nameBook=?, author=?, synopsis=?, subject=?, year=?, price=?, numPages=? where codBook=?;");

		$sql->bindValue(1, $nameBook);
		$sql->bindValue(2, $author);
		$sql->bindValue(3, $synopsis);
		$sql->bindValue(4, $subject);
		$sql->bindValue(5, $year);
		$sql->bindValue(6, $price);
		$sql->bindValue(7, $numPages);
		$sql->bindValue(8, $codBook);

		$sql->execute();

		$con = null;
	}

	public function deleteBook($codBook)
	{
		$sql = $con->prepare("Delete FROM $tableName where codBook=?;");

		$sql->bindValue(1, $codBook);
		$sql->execute();

		$con = null;
	}

}

?>