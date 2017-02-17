<?php
function redireccionar($url,$segundos) {
	if(!$segundos) { $segundos = 0; } 
		echo '<meta http-equiv="refresh" content="'.$segundos.'; url='.$url.'" />';
}
function validaEmail($email) {
    if (ereg("^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@+([_a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]{2,200}\.[a-zA-Z]{2,6}$", $email ) ) {
       return true;
    } else {
       return false;
    }
}
?>