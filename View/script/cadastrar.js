$(document).ready(function(){
	$("#cadastrar").click(function(){
		var nameUser = $("#nameUser").val();
		var bornDate = $("#bornDate").val();
		var address = $("#address").val();
		var state = $("#state").val();
		var city = $("#city").val();
		var district = $("#district").val();
		var zipCode = $("#zipCode").val();
		var phone = $("#phone").val();
		var cpf = $("#cpf").val();
		var email = $("#email").val();
		var senha = $("#password").val();

		$.ajax({
			url: "script/cadastrarUsuario.php",
			
			type: "POST",
			
			dataType: "html",
			
			data:{nameUser:nameUser, bornDate:bornDate, address:address, state:state, city:city, district:district, zipCode:zipCode,
			 phone:phone, cpf:cpf, email:email, senha:senha},

			success: function(dados){
				alert(dados);
			}
		});
	});
});