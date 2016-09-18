<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 18/09/2016
	*/

include("../Model/Database.php");
include("../Model/Admin.php");

class AdminDao
{
	private $con = null;
	private const $tableName = "admin";

	public function AdminDao()
	{
		$con = connection();
	}

	public function insertAdmin( $login, $password, $userType )
	{
		$sql = $con -> prepare("Insert into $tableName ($login, $password, $userType) Values (?, ?, ?, ?);");

		$sql -> bindValue(1, $login);
		$sql -> bindValue(2, $password);
		$sql -> bindValue(3, $userType);

		$sql -> execute();

		$con = null;
	}

	public function selectAdmin($codAdmin)
	{
		$sql = $con -> prepare("Select * FROM $tableName where codAdmin= ?;");

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

	public function alterAdmin($codAdmin, $login, $password, $userType)
	{
		$sql = $con -> prepare("Update $tableName SET login=?, password=?, userType=? where codAdmin=?;");

		$sql -> bindValue(1, $login);
		$sql -> bindValue(2, $password);
		$sql -> bindValue(3, $userType);
		$sql -> bindValue(4, $codAdmin);

		$sql -> execute();

		$con = null;
	}

	public function deleteAdmin($codAdmin)
	{
		$sql = $con -> prepare("Delete * from $tableName where codAdmin=?;");
		$sql -> bindValue($codAdmin);
		$sql -> execute();

		$con = null;
	}
}