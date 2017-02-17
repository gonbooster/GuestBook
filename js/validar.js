var expr = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;

$(document).ready(function() {
	$('#publica').attr('disabled', 'disabled');// iniciar el checbox publicar si opcion de marcar
	function validar_nombre(){
		var nombre = $("#nombre").val(); // asigna a la variable nombre el valor que tiene la id nombre
		if(nombre.length<3){
			$("#mensaje1").fadeIn(); // muestra una palabra oculta
			return false; // evita que se manden los datos
		}else{
			$("#mensaje1").fadeOut(); //ocultar  el mensaje1
			return true;
		}
	}
		
	$('#nombre').change(function(){
		validar_nombre();
	})
	
	function validar_email(){
		var correo = $("#email").val();
		if(correo == ""){
			$('#publica').attr('disabled', 'disabled');
			$("#mensaje2").fadeOut();
			return true;
		}else if(!expr.test(correo)){
			$('#publica').attr('disabled', 'disabled');
			$("#mensaje2").fadeIn();
			return false;
		}else{
			$('#publica').removeAttr('disabled');//habilitar el checbox publicar
			$("#mensaje2").fadeOut();
			return true;
		}		
	}
	
	$('#email').change(function(){
		validar_email();
	})
	
	function validar_comentario(){
		var comentario = $("#comentario").val(); 
		if(comentario.length<2){
			$("#mensaje3").fadeIn();
			return false;
		}else{
			$("#mensaje3").fadeOut();
			return true;
		}
	}
		
	$('#comentario').change(function(){
		validar_comentario();
	})
	$('#enviar').click(function(){
		no_error = validar_nombre() & validar_email() & validar_comentario();
		if (no_error) {
			$('#formAnadir').submit();
		} else {
			$('#ok').html("*Campos incorrectos");
		}	
	});
});

function ContarTexto(actual, cajita, max) 
{
	if (actual.value.length > max)
		actual.value = actual.value.substring(0, max);
	else
		cajita.value = max - actual.value.length;
}