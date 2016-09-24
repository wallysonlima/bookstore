<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 01/09/2016
	*/

class User
{
	private $codUser;
	private $nameUser;

	public function User($codUser, $nameUser)
	{
		$this->codUser = $codUser;
		$this->nameUser = $nameUser;
	}

	public function getCodUser() {
		return $this->codUser;
	}

	public function getNameUser() {
		return $this->nameUser;
	}
}

?>