<?php
	include_once("/opt/lampp/htdocs/web/BookStore/Dao/UserDao.php");

	$user = new UserDao();

	$user->deleteUser($_POST["codUser"]);

	echo "Usuário Deletado Com Sucesso !";
?>