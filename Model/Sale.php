<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 01/09/2016
	*/

class Sale
{
	private int $codSale, $installmentsNum;
	private float $total, $deliveryPrice;
	private String $deliveryType, $cardNum, $maturityDate, $securityCode, $holderName, $holderCpf, $bornDate;

	public Sale($total, $deliveryType, $deliveryPrice, $cardNum, $maturityDate, $securityCode, 
		$installmentsNum, $holderName, $holderCpf, $bornDate)
	{
		$this->total = $total;
		$this->$deliveryType = $deliveryType;
		$this->deliveryPrice = $deliveryPrice;
		$this->cardNum = $cardNum;
		$this->maturityDate = $maturityDate;
		$this->securityCode = $securityCode;
		$this->installmentsNum = $installmentsNum;
		$this->holderName = $holderName;
		$this->holderCpf = $holderCpf;
		$this->bornDate = $bornDate;

	}
}

?>