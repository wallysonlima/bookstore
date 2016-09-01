<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 01/09/2016
	*/
include("Database.php");
include("User.php");

function insertUser($nameUser, $bornDate, $address, $state, $district, $zipCode, $phone, $cpf, $email, $password)
{
	$con = connection();
	$tableName = "user";
	$sql = $con->prepare("Insert Into $tableName (nameUser, bornDate, address, state, district, zipCode, phone, cpf, email, password) Values 
		(?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

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

	$sql->execute(); 

	$con = null;
}

function selectUser($codUser)
{
	$con = connection();
	$tableName = "user";
	$sql = $con->prepare("Select * FROM $tableName where codUser = ?;");

	$sql->bindValue(1, $codUser);
	$sql->execute();

	$arrayUser = array();

	while ( $row = $sql->fetch() )
	{
		$user = new User($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9]);
		array_push($arrayUser, $user);
	}

	$con = null;
	return $arrayUser;
}

function alterUser($codUser, $nameUser, $bornDate, $address, $state, $district, $zipCode, $phone, $cpf, $email, $password)
{
	$con = connection();
	$tableName = "user";
	$sql = $con->prepare("Update $tableName SET nameUser=?, bornDate=?, address=?, state=?, district=?, zipCode=?, phone=?, cpf=?, email=?, password=? where codUser=?;");

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
	$sql->bindValue(11, $codUser);

	$sql->execute();

	$con = null;
}

function deleteUser($codUser)
{

	$con = connection();
	$tableName = "user";
	$sql = $con->prepare("Delete FROM $tableName where codUser=?;");

	$sql->bindValue(1, $codUser);
	$sql->execute();

	$con = null;
}
?>