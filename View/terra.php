<?php

session_start();

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="script/comprar.js"></script>
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
    	<div class="title_welcome"><span class="red">Compre</span> os Livros da Livraria São Paulo !</div>

    	<div class="center_left">        
			<img src="images/terra.png" alt="Só a Terra Permanece" title="" />
		</div>

		<div class="center_right">
					<table class="informacoes">
					<form method="POST" name="comprar">
						<tr>
							<th>Nome: </th>
							<td>Só a Terra Permanece</td>
						</tr>

						<tr>
							<th>Autor: </th>
							<td>George R. Stewart</td>
						</tr>

						<tr>
							<th>Preço: </th>
							<td>R$ 89,99</td>
						</tr>

						<tr>
							<th>Sinopse: </th>
							<td>
								<p>
									Clássico da Ficção Científica. Um dos melhores - apesar de pouco conhecido no Brasil - livros de pós-apocalipse.
								</p>
							</td>
						</tr>

						<tr>
							<th>Assunto: </th>
							<td>Ficção Científica</td>
						</tr>

						<tr>
							<th>Ano: </th>
							<td>1990</td>
						</tr>

						<tr>
							<th>Número de Páginas: </th>
							<td>333</td>
						</tr>
						<tr>
							<th></th>
							<td>
								<input type="button" name="terra" value="Comprar" id="terra"></input>
							</td>
						</tr>
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