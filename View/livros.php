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
	<link rel="stylesheet" type="text/css" href="css/livros.css"></link>
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
                <li class="selected"><a href="#">Comprar Livros</a></li>
				<li><a href="cadastrar.php">Cadastrar Usuário</a></li>
				<li><a href="administrador.php">Área Restrita</a></li>
        	</ul>
    </nav>

    <section>
    	<div class="title_welcome"><span class="red">Confira</span> os Livros da Livraria São Paulo !</div>

			<div id="geral">
	 			<div id="topo">
							<img src="images/1984.png" alt="1984" title="" />
						    <img src="images/terra.png" alt="Só a Terra Permanece" title="" />
							<img src="images/infancia.png" alt="Fim da Infância" title="" />
							<img src="images/laranja.png" alt="Laranja Mecânica" title="" />
							<img src="images/invisivel.png" alt="As Vantagens de Ser Invisível" title="" />
				</div>

				<div id="embaixo">
						<a href="1984.php" class="read_more">Leia Mais</a>
						<a href="terra.php" class="read_more">Leia Mais</a>
						<a href="infancia.php" class="read_more">Leia Mais</a>
						<a href="laranja.php" class="read_more">Leia Mais</a>
						<a href="invisivel.php" class="read_more">Leia Mais</a>
				</div>
			</div>
    </section>
';

require_once("footer.php");

echo '
</body>
</html>
';


?>