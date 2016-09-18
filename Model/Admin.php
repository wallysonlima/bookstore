<?php
	/* Developed by: Wallyson Nunes
	   Email: wallyson.n.a.lima@gmail.com
	   Github: Wallyson Nunes
	   Date: 18/09/2016

	*/

class Admin
{
	private $codAdmin;
	private $login, $password, $userType;

	public function Admin( $login, $password, $userType )
	{
		$this->login = $login;
		$this->password = $password;
		$this->userType = $userType;
	}


}

?>