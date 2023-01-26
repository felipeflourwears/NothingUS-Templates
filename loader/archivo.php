<?php
//este archivo es un simple ejemplo. Aqui deberás añadir todas las consultas o lo que necesites.
sleep(3);
if($_POST['forma'] == 'css'){
	echo 'Esta es la respuesta recibida tras el LOADER con CSS.';
}else if($_POST['forma'] == 'gif'){
	echo 'Esta es la respuesta recibida tras el LOADER con IMAGEN/GIF.';
}
?>
