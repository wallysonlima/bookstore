<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 01/09/2016
	*/

class Database
{

	function Database() {}

	function connection()
	{
		try
		{
			// Create object PDO, and connect with the Mysql database
			return (new PDO("mysql:host=localhost;dbname=bookStore", "root", "Unesp2015&") );	
		}
		catch (PDOException $i)
		{
			print "Error: <code>" . $i->getMessage() . "</code>";
		}	
	}
}

?>