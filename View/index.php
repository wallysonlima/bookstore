<?php

session_start();

$_SESSION["tipo_usuario"] = "Comum";

echo '

<!DOCTYPE html>
<html>

<head>
	<title>Bem Vindo a Livraria São Paulo</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="script/index.js"></script>
	<link rel="stylesheet" type="text/css" href="css/pagina.css"></link>
	<link rel="stylesheet" type="text/css" href="css/main_container.css"></link>
	<link rel="stylesheet" type="text/css" href="css/header.css"></link>
	<link rel="stylesheet" type="text/css" href="css/nav.css"></link>
	<link rel="stylesheet" type="text/css" href="css/section.css"></link>
	<link rel="stylesheet" type="text/css" href="css/footer.css"></link>
</head>
<body>
';

require_once("main_container.php");

echo '
</body>
</html>
';


?>