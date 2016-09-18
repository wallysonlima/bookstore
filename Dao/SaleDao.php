<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 01/09/2016
	*/
include("../Model/Database.php");
include("../Model/Sale.php");

class SaleDao
{
	private $con = null;
	private const $tableName = "sale";
	
	public function SaleDao()
	{
		$con = connection();
	}

	public function insertSale($total, $deliveryType, $deliveryPrice, $cardNum, $maturityDate, $securityCode, 
			$installmentsNum, $holderName, $holderCpf, $bornDate)
	{
		$tableName = "sale";
		$sql = $con->prepare("Insert Into $tableName (total, deliveryType, deliveryPrice, cardNum, maturityDate, securityCode, 
			installmentsNum, holderName, holderCpf, bornDate) Values 
			(?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

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

		$sql->execute(); 

		$con = null;
	}

	public function selectSale($codSale)
	{
		$sql = $con->prepare("Select * FROM $tableName where codSale = ?;");

		$sql->bindValue(1, $codSale);
		$sql->execute();

		$arraySale = array();

		while ( $row = $sql->fetch() )
		{
			$sale = new Sale($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9]);
			array_push($arraySale, $sale);
		}

		$con = null;
		return $arraySale;
	}

	public function alterSale($codSale, $total, $deliveryType, $deliveryPrice, $cardNum, $maturityDate, $securityCode, 
			$installmentsNum, $holderName, $holderCpf, $bornDate)
	{
		$sql = $con->prepare("Update $tableName SET total=?, deliveryType=?, deliveryPrice=?, cardNum=?, maturityDate=?, securityCode=?, installmentsNum=?, holderName=?, holderCpf=?, bornDate=? where codSale=?;");

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
		$sql = $con->prepare("Delete FROM $tableName where codSale=?;");

		$sql->bindValue(1, $codSale);
		$sql->execute();

		$con = null;
	}

}

?>