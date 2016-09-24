<?php
	include_once("/opt/lampp/htdocs/web/BookStore/Model/Database.php");
	include_once("/opt/lampp/htdocs/web/BookStore/Dao/SaleDao.php");

	if ( !empty( $_POST["pre"] ) )
	{
		$preco = $_POST["pre"];

		$total = (float) $preco;

		$saleDao = new SaleDao();
		
		$saleDao->insertSale($total);

		echo 
		"Total a pagar: ".$total."\nCompra Realizada Com Sucesso !";

	} else {
		echo "Erro ! Preencha Todos os Campos !";
	}
?>