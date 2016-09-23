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
	<link rel="stylesheet" type="text/css" href="css/cadastrar.css"></link>
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
			<li class="selected"><a href="#">Cadastrar Usuário</a></li>
            <li><a href="contato.html">Contato</a></li>
			<li><a href="alterar_sessao.html">&Aacute;rea Restrita</a></li>
    	</ul>
</nav>

<section>
     	<div class="center_left">
     	<div class="title_welcome"><span class="red">Cadastre-se</span> na Livraria São Paulo !</div>
        	<table>
        		<form method="POST">
        			<tr>
        				<th>Nome</th>
        				<td><input type="text" name="nameUser"></input></td>
        			</tr>
        			<tr>
        				<th>Data de Nascimento</th>
        				<td><input type="date" name="bornDate"></input></td>
        			</tr>
        			<tr>
        				<th>Endereço</th>
        				<td><input type="text" name="address"></input></td>
        			</tr>
        			<tr>
        				<th>Estado</th>
        				<td><input type="text" name="state"></input></td>
        			</tr>
        			<tr>
        				<th>Cidade</th>
        				<td><input type="text" name="city"></input></td>
        			</tr>
        			<tr>
        				<th>Bairro</th>
        				<td><input type="text" name="district"></input></td>
        			</tr>
        			<tr>
        				<th>CEP</th>
        				<td><input type="text" name="zipCode"></input></td>
        			</tr>
        			<tr>
        				<th>Telefone</th>
        				<td><input type="tel" name="phone"></input></td>
        			</tr>
        			<tr>
        				<th>CPF</th>
        				<td><input type="text" name="cpf"></input></td>
        			</tr>
        			<tr>
        				<th>Email</th>
        				<td><input type="email" name="email"></input></td>
        			</tr>
        			<tr>
        				<th>Senha</th>
        				<td><input type="password" name="password"></input></td>
        			</tr>
        			<tr>
        				<th></th>
        				<td>
	        				<input type="reset" value="Limpar"></input>
	        				<input type="submit" value="Enviar"></input>
        				</td>
        			</tr> 			
        		</form>
        	</table>
		</div>

		<div class="center_right">
			<div class="software_box">
            	<img src="images/register.jpg" class="imgRegister" />
        	</div>
		</div>
</section>';

require_once("footer.php");

echo '
</div>
</body>
</html>
';


?>