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
	<link rel="stylesheet" type="text/css" href="css/1984.css"></link>
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
				<li><a href="cadastrar.html">Cadastrar Usu&aacute;rio</a></li>
                <li><a href="contato.html">Contato</a></li>
				<li><a href="alterar_sessao.html">&Aacute;rea Restrita</a></li>
        	</ul>
    </nav>

    <section>
    	<div class="title_welcome"><span class="red">Compre</span> os Livros da Livraria São Paulo !</div>

    	<div class="center_left">        
			<img src="images/1984.png" alt="1984" title="" />
		</div>

		<div class="center_right">
					<table class="informacoes">
						<tr>
							<th>Nome: </th>
							<td>1984</td>
						</tr>

						<tr>
							<th>Autor: </th>
							<td>George Orwell</td>
						</tr>

						<tr>
							<th>Preço: </th>
							<td>R$ 59,99</td>
						</tr>

						<tr>
							<th>Sinopse: </th>
							<td>
								<p>
									Winston, herói de 1984, último romance de George Orwell, vive aprisionado na engrenagem totalitária de uma sociedade completamente dominada pelo Estado, onde tudo é feito coletivamente, mas cada qual vive sozinho. Ninguém escapa à vigilância do Grande Irmão, a mais famosa personificação literária de um poder cínico e cruel ao infinito, além de vazio de sentido histórico. 
								</p>
							</td>
						</tr>

						<tr>
							<th>Assunto: </th>
							<td>Ficção Científica</td>
						</tr>

						<tr>
							<th>Ano: </th>
							<td>2009</td>
						</tr>

						<tr>
							<th>Número de Páginas: </th>
							<td>416</td>
						</tr>
					</table>
			</div>

			<div class="embaixo">
				<a href="1984.php" class="read_more">Comprar</a>
			</div>
    </section>
';

require_once("footer.php");

echo '
</body>
</html>
';