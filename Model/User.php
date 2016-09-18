<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 01/09/2016
	*/

class User
{
	private $codUser;
	private $nameUser, $bornDate, $address, $state, $city, $district, $zipCode, $phone, $cpf, $email, $password, $userType;

	public User($nameUser, $bornDate, $address, $state, $district, $zipCode, $phone, $cpf, $email, $password, $userType)
	{
		$this->nameUser = $nameUser;
		$this->bornDate = $bornDate;
		$this->address = $address;
		$this->state = $state;
		$this->district = $district;
		$this->zipCod = $zipCode;
		$this->phone = $phone;
		$this->cpf = $cpf;
		$this->email = $email;
		$this->password = $password;
		$this->userType = $userType;
	}
}

?>