$(document).ready(function(){
	$("#mil").click(function(){
		alert("adsfasdfa");
		var preco = 59.99;

		$.ajax({
			url: "scrip/comprar.php",
			
			type: "POST",
			
			dataType: "html",
			
			data:{pre:preco},

			success: function(dados){
				alert(dados);
			}
		});
	});

	$("#infancia").click(function(){
		var preco = 49.99;
	
		$.ajax({
			url: "script/comprar.php",
			
			type: "POST",
			
			dataType: "html",
			
			data:{pre:preco},

			success: function(dados){
				alert(dados);
			}

		});
	});

	$("#invisivel").click(function(){
		var preco = 39.99;

		$.ajax({
			url: "script/comprar.php",
			
			type: "POST",
			
			dataType: "html",
			
			data:{pre:preco},

			success: function(dados){
				alert(dados);
			}

		});
	});

	$("#laranja").click(function(){
		var preco = 49.99;

		$.ajax({
			url: "script/comprar.php",
			
			type: "POST",
			
			dataType: "html",
			
			data:{pre:preco},

			success: function(dados){
				alert(dados);
			}

		});
	});

	$("#terra").click(function(){
		var preco = 89.99;

		$.ajax({
			url: "script/comprar.php",
			
			type: "POST",
			
			dataType: "html",
			
			data:{pre:preco},

			success: function(dados){
				alert(dados);
			}

		});
	});

});