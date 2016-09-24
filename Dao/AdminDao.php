<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 18/09/2016
	*/

include_once("/opt/lampp/htdocs/web/BookStore/Model/Database.php");
include_once("/opt/lampp/htdocs/web/BookStore/Model/Admin.php");

class AdminDao
{
	public function AdminDao(){}

	public function insertAdmin($login, $password, $userType )
	{
		$tableName = "admin";
		$db = new Database();
		$con = $db -> connection();

		$sql = $con->prepare("Insert into $tableName ($login, $password, $userType) Values (?, ?, ?, ?);");

		$sql -> bindValue(1, $login);
		$sql -> bindValue(2, $password);
		$sql -> bindValue(3, $userType);

		$sql -> execute();

		$con = null;
	}

	public function selectAdmin($codAdmin)
	{
		$tableName = "admin";
		$db = new Database();
		$con = $db -> connection();
		
		$sql = $con->prepare("Select * FROM $tableName where codAdmin= ?;");

		$sql -> bindValue(1, $codAdmin);
		$sql -> execute();

		$arrayAdmin = array();

		while( $row = $sql->fetch() )
		{
			$admin = new Admin( $row[0], $row[1], $row[2] );
			array_push($arrayAdmin, $admin);
		}	

		$con = null;
		return $arrayAdmin;
	}

	public function getTypeAdmin($login, $password)
	{
		$tableName = "admin";
		$db = new Database();
		$con = $db -> connection();
		
		$sql = $con->prepare("Select (userType) FROM $tableName where login = ? and password = ?;");

		$sql->bindValue(1, $login);
		$sql->bindValue(2, $password);

		$sql->execute();

		$con = null;
		return $sql->fetch();
	}

	public function alterAdmin($codAdmin, $login, $password, $userType)
	{
		$tableName = "admin";
		$db = new Database();
		$con = $db -> connection();
		$sql = $con->prepare("Update $tableName SET login=?, password=?, userType=? where codAdmin=?;");

		$sql -> bindValue(1, $login);
		$sql -> bindValue(2, $password);
		$sql -> bindValue(3, $userType);
		$sql -> bindValue(4, $codAdmin);

		$sql -> execute();

		$con = null;
	}

	public function deleteAdmin($codAdmin)
	{
		$tableName = "admin";
		$db = new Database();
		$con = $db -> connection();
		$sql = $con -> prepare("Delete * from $tableName where codAdmin=?;");
		$sql -> bindValue($codAdmin);
		$sql -> execute();

		$con = null;
	}
}