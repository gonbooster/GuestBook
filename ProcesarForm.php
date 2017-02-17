<?php
include_once("funciones/Fichero.php");
include_once("funciones/Web.php");
//recuperamos los datos que bienen por el campo nombre
$nombre=$_POST['nombre'];
//nombre menor que tres, nombre nullo, nombre con espacios
if((strlen($nombre)<3) || (!isset($nombre)) || (empty($nombre))) header('Location: AnadirComentario.php?error=1');
else{
//si el campo nombre es correcto entonces recuperamos el campo correo  
	$email=$_POST['email'];
	if(!validaEmail($email) && !empty($email)) header('Location: AnadirComentario.php?error=2');
    else{
		$comentario=$_POST['comentario'];
		if((strlen($comentario)<2) || (!isset($comentario)) || (empty($comentario)) ||(strlen($comentario)>1000)) header('Location: AnadirComentario.php?error=3');
			
	}
}
escritura($nombre,$email,$comentario);
header('Location: LibroDeVisitas.php');
?>