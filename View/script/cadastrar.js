$(document).ready(function(){
	$("#login").click(function(){
		var email = $("#email").val();
		var senha = $("#senha").val();

		$.ajax({
			url: "../../Control/insertUser.php",
			
			type: "POST",
			
			dataType: "html",
			
			data:{n1:email, n2:senha},

			success: function(dados){
				$("body").append(dados);
			},

			error: function(request, status, errorThrown) {
				alert("Ocorreu um erro na requisição " + errorThrown);
			}

		});


	});
});