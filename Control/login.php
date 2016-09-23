<?php
	session_start();

	include("../Model/Database.php");
	include("../Dao/UserDao.php");
	include("../Dao/AdminDao.php");

	if ( !empty( $_POST["n1"] ) && !empty( $_POST["n2"] ) )
	{
		$login = $_POST["name"];
		$password = $_POST["pass"];

		$userType = getTypeUser($login, $password);

		if ( $userType != null )
			$_SESSION['tipo_usuario'] = $userType;
		else
		{
			$adminType = getTypeAdmin($login, $password);

			if ( $adminType != null )
				$_SESSION['tipo_usuario'] = $adminType;
			else
			{
				alert("Usuário/Administrador não encontrado !\n");
			}
		}

	}
?>