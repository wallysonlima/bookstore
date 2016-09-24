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
	<link rel="stylesheet" type="text/css" href="css/cadastrar.css"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="script/cadastrar.js"></script>
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
			<li><a href="administrador.php">Área Restrita</a></li>
    	</ul>
</nav>

<section>
     	<div class="center_left">
     	<div class="title_welcome"><span class="red">Cadastre-se</span> na Livraria São Paulo !</div>
        	<table>
        		<form method="POST" name="cadastrar">
        			<tr>
        				<th>Nome</th>
        				<td><input type="text" name="nameUser" id="nameUser"></input></td>
        			</tr>
        			<tr>
        				<th>Data de Nascimento</th>
        				<td><input type="date" name="bornDate" id="bornDate"></input></td>
        			</tr>
        			<tr>
        				<th>Endereço</th>
        				<td><input type="text" name="address" id="address"></input></td>
        			</tr>
        			<tr>
        				<th>Estado</th>
        				<td><input type="text" name="state" id="state"></input></td>
        			</tr>
        			<tr>
        				<th>Cidade</th>
        				<td><input type="text" name="city" id="city"></input></td>
        			</tr>
        			<tr>
        				<th>Bairro</th>
        				<td><input type="text" name="district" id="district"></input></td>
        			</tr>
        			<tr>
        				<th>CEP</th>
        				<td><input type="text" name="zipCode" id="zipCode"></input></td>
        			</tr>
        			<tr>
        				<th>Telefone</th>
        				<td><input type="tel" name="phone" id="phone"></input></td>
        			</tr>
        			<tr>
        				<th>CPF</th>
        				<td><input type="text" name="cpf" id="cpf"></input></td>
        			</tr>
        			<tr>
        				<th>Email</th>
        				<td><input type="email" name="email" id="email"></input></td>
        			</tr>
        			<tr>
        				<th>Senha</th>
        				<td><input type="password" name="password" id="password"></input></td>
        			</tr>
        			<tr>
        				<th></th>
        				<td>
	        				<input type="reset" value="Limpar"></input>
	        				<input type="button" value="Enviar" id="cadastrar"></input>
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