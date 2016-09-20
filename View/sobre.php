<?php

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
	<link rel="stylesheet" type="text/css" href="css/sobre.css"></link>
</head>
<body>
<div id="main_container">
';

require_once("header.php");

echo '
<nav>
    	<ul>
    		<li><a href="index.html">Home</a></li>
            <li class="selected"><a href="#">Sobre</a></li>
            <li><a href="livros.php">Comprar Livros</a></li>
			<li><a href="cadastrar.html">Cadastrar Usu&aacute;rio</a></li>
            <li><a href="contato.html">Contato</a></li>
			<li><a href="alterar_sessao.html">&Aacute;rea Restrita</a></li>
    	</ul>
</nav>

<section>
     	<div class="center_left">
        	<div class="title_welcome"><span class="red">MELHOR</span> Livraria do Brasil !</div>
            <div class="welcome_box">
	            <p class="welcome">
					<span class="orange">Sobre a Livraria São Paulo </span><br /><br/>
						  A Livraria São Paulo promove o melhor da literatura para os seus clientes,
							mostrando todo o amor pelo conhecimento, pois literatura como já foi dito, também
							é educação !
							Somos uma empresa do ramo da livraria tradicional, com mais de 40 anos de história.
				</p>
            </div>
		</div>
		
		<div class="img_sobre"></div>
</section>';

require_once("footer.php");

echo '
</body>
</html>
';


?>