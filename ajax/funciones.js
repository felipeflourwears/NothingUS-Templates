function MostrarMensaje(){

	$.get('funciones.php',function(mensaje,estado){

		document.getElementById('resultado').innerHTML=mensaje;
	})
}