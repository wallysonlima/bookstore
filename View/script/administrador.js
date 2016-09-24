$(document).ready(function(){
	$("#deletar").click(function(){
		var codUser = $("#cod").val();

		$.ajax({
			url: "script/deletar.php",
			
			type: "POST",
			
			dataType: "html",
			
			data:{codUser:codUser},

			success: function(dados){
				alert(dados);
			}

		});
	});
});