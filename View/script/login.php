<?php
	session_start();

	include_once("/opt/lampp/htdocs/web/BookStore/Model/Database.php");
	include_once("/opt/lampp/htdocs/web/BookStore/Dao/AdminDao.php");

	if ( !empty( $_POST["n1"] ) && !empty( $_POST["n2"] ) )
	{
		$login = $_POST["n1"];
		$password = $_POST["n2"];
		
		$adminDao = new AdminDao();

		$adminType = $adminDao -> getTypeAdmin($login, $password);

		if ( $adminType != null ) {
			$_SESSION["tipo_usuario"] = $adminType[0];

			echo 
				"Você está Logado como Administrador ! ".$login;
		}
	} else {
		echo 'Erro ! Administrador não Encontrado !';
	}
?>