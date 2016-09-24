<?php
	include_once("/opt/lampp/htdocs/web/BookStore/Dao/UserDao.php");

	if ( !empty( $_POST["nameUser"] ) && !empty( $_POST["bornDate"] ) && !empty( $_POST["address"] ) && !empty( $_POST["state"] )
	&& !empty( $_POST["city"] ) && !empty( $_POST["district"] ) && !empty( $_POST["zipCode"] ) && !empty( $_POST["phone"] )
	&& !empty( $_POST["cpf"] ) && !empty( $_POST["email"] ) && !empty( $_POST["senha"]) )
	{
		$name = $_POST["nameUser"];
		$born = $_POST["bornDate"];
		$add = $_POST["address"];
		$state = $_POST["state"];
		$city = $_POST["city"];
		$dist = $_POST["district"];
		$zip = $_POST["zipCode"];
		$phone = $_POST["phone"];
		$cpf = $_POST["cpf"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];

		$user = new UserDao();

		$user->insertUser($name, $born, $add, $state, $city, $dist, $zip, $phone, $cpf, $email, $senha, "Comum");

		echo "Usuário ".$name." Cadastrado com Sucesso ! ";

	} else {
		echo "Erro ! Preencha Todos os Campos !";
	}
?>