<?php
function escritura($nombre,$email,$comentario){
	//Establecer la zona horaria predeterminada a usar
	 date_default_timezone_set('Europe/Madrid');
	//Imprimimos la fecha actual dandole un formato
	$fecha= date("d-m-Y");
	$fp = fopen("ficheros/Comentarios.txt","a")or exit("imposible de escribir en el archivo");
	if(!isset($email))
		fwrite($fp, "$nombre \t $comentario \t $fecha" . PHP_EOL); //PHP_EOL: salto de linea; \t: tabulacion
	else 
		fwrite($fp, "$fecha \t $nombre \t $email \t $comentario" . PHP_EOL);
	fclose($fp);
}
function lectura(){
	$file = fopen("ficheros/Comentarios.txt", "r")or exit("imposible de leer el archivo");
	while(!feof($file))
		echo '<div class="post">'.fgets($file).'</div>';
	fclose($file);
}
?>