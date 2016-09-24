<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 01/09/2016
	*/
include("/opt/lampp/htdocs/web/BookStore/Model/Database.php");
include("/opt/lampp/htdocs/web/BookStore/Model/User.php");

class UserDao
{
	private $con;
	private $tableName;

	public function UserDao()
	{
		$db = new Database();
		$this->con = $db->connection();
		$this->tableName = "user";
	}

	public function insertUser($nameUser, $bornDate, $address, $state, $city, $district, $zipCode, $phone, $cpf, $email, $password, $userType)
	{
		$sql = $this->con->prepare("Insert Into $this->tableName (nameUser, bornDate, address, state, city, district, zipCode, phone, cpf, email, password, userType) Values 
			(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

		$sql->bindValue(1, $nameUser);
		$sql->bindValue(2, $bornDate);
		$sql->bindValue(3, $address);
		$sql->bindValue(4, $state);
		$sql->bindValue(5, $city);
		$sql->bindValue(6, $district);
		$sql->bindValue(7, $zipCode);
		$sql->bindValue(8, $phone);
		$sql->bindValue(9, $cpf);
		$sql->bindValue(10, $email);
		$sql->bindValue(11, $password);
		$sql->bindValue(12, $userType);

		$sql->execute(); 

		$con = null;
	}

	public function selectUser($codUser)
	{
		$sql = $this->con->prepare("Select * FROM $this->tableName where codUser = ?;");

		$sql->bindValue(1, $codUser);
		$sql->execute();

		$arrayUser = array();

		while ( $row = $sql->fetch() )
		{
			$user = new User($row[0], $row[1]);
			array_push($arrayUser, $user);
		}

		$con = null;
		return $arrayUser;
	}

	public function selectAllUser()
	{
		$sql = $this->con->prepare("Select codUser, nameUser FROM $this->tableName;");

		$sql->execute();

		$arrayUser = array();

		while ( $row = $sql->fetch() )
		{
			$user = new User( (string) $row[0], $row[1]);
			array_push($arrayUser, $user);
		}

		$con = null;
		return $arrayUser;
	}

	public function getTypeUser($email, $password)
	{
		$sql = $this->con->prepare("Select (userType) FROM $this->tableName where email = ? and password = ?;");

		$sql->bindValue(1, $email);
		$sql->bindValue(2, $password);

		$sql->execute();

		$con = null;
		return $sql->fetch();
	}

	public function alterUser($codUser, $nameUser, $bornDate, $address, $state, $district, $zipCode, $phone, $cpf, $email, $password, $userType)
	{
		$sql = $this->con->prepare("Update $this->tableName SET nameUser=?, bornDate=?, address=?, state=?, district=?, zipCode=?, phone=?, cpf=?, email=?, password=?, userType=? where codUser=?;");

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
		$sql = $this->con->prepare("Delete FROM $this->tableName where codUser=?;");

		$sql->bindValue(1, $codUser);
		$sql->execute();

		$con = null;
	}

}

?>