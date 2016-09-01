<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 01/09/2016
	*/

class Database
{
	private final String $host = "localhost";
	private final String $dbName = "bookStore";
	private final String $user = "root";
	private final String $password = "";

	function connection()
	{
		try
		{
			// Create object PDO, and connect with the Mysql database
			return $connection = new PDO("mysql:host=".$host.";dbname=".$dbName, $user, $password);	
		}
		catch (PDOException $i)
		{
			print "Error: <code>" . $i->getMessage() . "</code>";
		}	
	}
}

?>