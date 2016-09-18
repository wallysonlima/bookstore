<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 01/09/2016
	*/
include("../Model/Database.php");
include("../Model/User.php");

class UserDao
{
	private $con = null;
	private const $tableName = "user";

	public function UserDao()
	{
		$con = connection();
	}

	public function insertUser($nameUser, $bornDate, $address, $state, $district, $zipCode, $phone, $cpf, $email, $password, $userType)
	{
		$sql = $con->prepare("Insert Into $tableName (nameUser, bornDate, address, state, district, zipCode, phone, cpf, email, password, userType) Values 
			(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

		$sql->bindValue(1, $nameUser);
		$sql->bindValue(2, $bornDate);
		$sql->bindValue(3, $address);
		$sql->bindValue(4, $state);
		$sql->bindValue(5, $district);
		$sql->bindValue(6, $zipCode);
		$sql->bindValue(7, $phone);
		$sql->bindValue(8, $cpf);
		$sql->bindValue(9, $email);
		$sql->bindValue(10, $password);
		$sql->bindValue(11, $userType);

		$sql->execute(); 

		$con = null;
	}

	public function selectUser($codUser)
	{
		$sql = $con->prepare("Select * FROM $tableName where codUser = ?;");

		$sql->bindValue(1, $codUser);
		$sql->execute();

		$arrayUser = array();

		while ( $row = $sql->fetch() )
		{
			$user = new User($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]);
			array_push($arrayUser, $user);
		}

		$con = null;
		return $arrayUser;
	}

	public function alterUser($codUser, $nameUser, $bornDate, $address, $state, $district, $zipCode, $phone, $cpf, $email, $password, $userType)
	{
		$sql = $con->prepare("Update $tableName SET nameUser=?, bornDate=?, address=?, state=?, district=?, zipCode=?, phone=?, cpf=?, email=?, password=?, userType=? where codUser=?;");

		$sql->bindValue(1, $nameUser);
		$sql->bindValue(2, $bornDate);
		$sql->bindValue(3, $address);
		$sql->bindValue(4, $state);
		$sql->bindValue(5, $district);
		$sql->bindValue(6, $zipCode);
		$sql->bindValue(7, $phone);
		$sql->bindValue(8, $cpf);
		$sql->bindValue(9, $email);
		$sql->bindValue(10, $password);
		$sql->bindValue(11, $userType);
		$sql->bindValue(12, $codUser);

		$sql->execute();

		$con = null;
	}

	public function deleteUser($codUser)
	{
		$sql = $con->prepare("Delete FROM $tableName where codUser=?;");

		$sql->bindValue(1, $codUser);
		$sql->execute();

		$con = null;
	}

}

?>