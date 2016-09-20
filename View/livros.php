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
                <li><a href="sobre.html">Sobre</a></li>
                <li class="selected"><a href="#">Comprar Livros</a></li>
				<li><a href="cadastrar.html">Cadastrar Usu&aacute;rio</a></li>
                <li><a href="contato.html">Contato</a></li>
				<li><a href="alterar_sessao.html">&Aacute;rea Restrita</a></li>
        	</ul>
    </nav>

    <section>
    	<div class="title_welcome"><span class="red">Confira</span> os Livros da Livraria São Paulo !</div>

			<div id="geral">
	 			<div id="topo">
							<img src="images/cidade_papel_imagem.png" alt="cidade_papel" title="" />
						    <img src="images/star_wars_imagem.png" alt="star_wars" title="" />
							<img src="images/mad_max_imagem.png" alt="mad_max" title="" />
							<img src="images/bom_dinossauro_imagem.png" alt="bom_dinossauro" title="" />

				</div>

				<div id="embaixo">
						<a href="cidade_papel.html" class="read_more">Leia Mais</a>
						<a href="star_wars.html" class="read_more">Leia Mais</a>
						<a href="mad_max.html" class="read_more">Leia Mais</a>
						<a href="bom_dinossauro.html" class="read_more">Leia Mais</a>
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