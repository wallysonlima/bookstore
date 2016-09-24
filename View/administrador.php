<?php

session_start();
include_once("/opt/lampp/htdocs/web/BookStore/Dao/UserDao.php");

$user = new UserDao();

$arrayUser = $user->selectAllUser();

if ( strcmp($_SESSION['tipo_usuario'], "Administrador" ) == 0 )
{

echo '
	<!DOCTYPE html>
	<html>

	<head>
		<title>Bem Vindo a Livraria São Paulo</title>
		<link rel="stylesheet" type="text/css" href="css/pagina.css"></link>
		<link rel="stylesheet" type="text/css" href="css/main_container.css"></link>
		<link rel="stylesheet" type="text/css" href="css/header.css"></link>
		<link rel="stylesheet" type="text/css" href="css/nav.css"></link>
		<link rel="stylesheet" type="text/css" href="css/section.css"></link>
		<link rel="stylesheet" type="text/css" href="css/footer.css"></link>
		<link rel="stylesheet" type="text/css" href="css/1984.css"></link>
		<link rel="stylesheet" type="text/css" href="css/configuracao.css"></link>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   		 <script src="script/administrador.js"></script>
	</head>
	<body>
	<div id="main_container">
	';

	require_once("header.php");

	echo '
		 <nav>
	        	<ul>
	        		<li><a href="index.php">Home</a></li>
	                <li><a href="sobre.php">Sobre</a></li>
	                <li><a href="livros.php">Comprar Livros</a></li>
					<li><a href="cadastrar.php">Cadastrar Usuário</a></li>
					<li><a href="administrador.php">Área Restrita</a></li>
	        	</ul>
	    </nav>

	    <section>
	    	<div class="title_welcome"><span class="red">Área Restrita</span> Livraria São Paulo !</div>

			<div class="center_right">
						<table class="informacoes">
							<form method="POST">';

							for( $i = 0; $i < sizeof($arrayUser); $i++)
							{	
								echo "
									<tr>
										<th>Cod e Nome:</th>
										<td><input type='text' value='".$arrayUser[$i]->getCodUser()."' id='cod'></input></td>
										<td><input type='text' value='".$arrayUser[$i]->getNameUser()."' id='nome'></input></td>
										<td><input type='button' value='Alterar' id='alterar'></input></td>
										<td><input type='button' value='Deletar' id='deletar'></input></td>
									</tr>
								";
							}
							echo '
							</form>
						</table>
				</div>

				
	    </section>
	';

	require_once("footer.php");

	echo '
	</body>
	</html>
	';

} else {
	echo '
		<script>
			alert("Você não tem permissão para acessar esta página ! Faça Login como Administrador !");
		</script>';
}

