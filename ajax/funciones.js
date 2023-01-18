
function MostrarMensaje(){
	var hello="Hola";

	$.get('funciones.php',function(mensaje,estado){

		document.getElementById('resultado').innerHTML=mensaje;
	})
}