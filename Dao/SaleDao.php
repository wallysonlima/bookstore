<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 01/09/2016
	*/
include_once("/opt/lampp/htdocs/web/BookStore/Model/Database.php");
include_once("/opt/lampp/htdocs/web/BookStore/Model/Sale.php");

class SaleDao
{
	private $con;
	private $tableName;
	
	public function SaleDao()
	{
		$db = new Database();
		$this->con = $db->connection();
		$this->tableName = "sale";
	}

	public function insertSale($total)
	{
		$sql = $this->con->prepare("Insert Into $this->tableName (total) Values 
			(?);");

		$sql->bindValue(1, $total);

		$sql->execute(); 

		$con = null;
	}

	public function selectSale($codSale)
	{
		$sql = $this->con->prepare("Select * FROM $this->tableName where codSale = ?;");

		$sql->bindValue(1, $codSale);
		$sql->execute();

		$arraySale = array();

		while ( $row = $sql->fetch() )
		{
			$sale = new Sale($row[0]);
			array_push($arraySale, $sale);
		}

		$con = null;
		return $arraySale;
	}

	public function alterSale($codSale, $total, $deliveryType, $deliveryPrice, $cardNum, $maturityDate, $securityCode, 
			$installmentsNum, $holderName, $holderCpf, $bornDate)
	{
		$sql = $this->con->prepare("Update $this->tableName SET total=?, deliveryType=?, deliveryPrice=?, cardNum=?, maturityDate=?, securityCode=?, installmentsNum=?, holderName=?, holderCpf=?, bornDate=? where codSale=?;");

		$sql->bindValue(1, $total);
		$sql->bindValue(2, $deliveryType);
		$sql->bindValue(3, $deliveryPrice);
		$sql->bindValue(4, $cardNum);
		$sql->bindValue(5, $maturityDate);
		$sql->bindValue(6, $securityCode);
		$sql->bindValue(7, $installmentsNum);
		$sql->bindValue(8, $holderName);
		$sql->bindValue(9, $holderCpf);
		$sql->bindValue(10, $bornDate);
		$sql->bindValue(11, $codSale);

		$sql->execute();

		$con = null;
	}

	public function deleteSale($codSale)
	{
		$sql = $this->con->prepare("Delete FROM $this->tableName where codSale=?;");

		$sql->bindValue(1, $codSale);
		$sql->execute();

		$con = null;
	}

}

?>