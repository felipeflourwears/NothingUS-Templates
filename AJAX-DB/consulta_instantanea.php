<html lang="es">

	<head>
		<title>Consultar BD AJAX</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<script type="text/javascript">

		function tiempoReal()
		{
			var tabla = $.ajax({
				url:'tablaConsulta.php',
				dataType:'text',
				async:false
			}).responseText;
			document.getElementById("miTabla").innerHTML = '1';
			document.getElementById("miTabla").innerHTML = tabla;
		}
		setInterval(tiempoReal, 1000);
		</script>
		
	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h2>CONSULTAR UNA BD EN TIEMPO REAL CON AJAX</h2>
			</div>
		</header>

		<section id="miTabla">
		</section>
		

		<footer>
		</footer>
	</body>
</html>





