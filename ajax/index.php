<?php
$saludar = "Hello world";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="estilos.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<body>

	<div id="contenedor">

	<input type="button" class="btn btn-dark" id="boton1" value="Mostrar mensaje" onclick="MostrarMensaje()">

	<div id="resultado"></div>


	</div>

	

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="funciones.js"></script>



</body>
</html>
