<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="loader.css">
</head>

<body style="margin: 0">
	<div id="loader">
		<div class="spinner">
			<div class="rect1"></div>
			<div class="rect2"></div>
			<div class="rect3"></div>
			<div class="rect4"></div>
			<div class="rect5"></div>
		</div>
	</div>

	<button class="loader" href="">LOADER con CSS</button><br/>
	<button class="loaderGif" href="">LOADER con IMAGEN GIF</button>	

	<!--aqui se cargarán las respuestas desde el archivo .php -------------->
	<div id="loaderGif"></div>
	<div id="respuesta"></div>
	<!------------------------------------------------------------------->

</body>
<script type="text/javascript">

$(document).ready(function() { 
   $(document).on('click','.loader',function() {
        //----------------------------------------
		//aqui hacemos todo lo necesario
		//pueden ser consultas a base de datos
		//generacion de archivos....
		//---------------------------------------- 
        $.ajax({
        	data:{'forma': 'css'},
            type: "POST",
            url: "archivo.php",
            beforeSend: function(){
				 /*
                * Se ejecuta al inicio de la petición
                * */	
                $('#loader').show(); 							
			},
			complete:function(data){
                /*
                * Se ejecuta al termino de la petición
                * */
            }, 
            success: function(data) {
                //Cargamos finalmente el contenido deseado
                $('#respuesta').html(data);
                //Ocultamos el loader
                $('#loader').hide(); 
            },
            error: function(data){
                /*
                * Se ejecuta si la peticón ha sido erronea
                * */
            }
        });
        return false;
    });     
    $(document).on('click','.loaderGif',function(e) {
		 $.ajax({
		 	data:{'forma': 'gif'},
            type: "POST",
            url: "archivo.php",
            beforeSend: function(){
				 /*
                * Se ejecuta al inicio de la petición
                * */	
                $('#loaderGif').show(); 							
			},
			complete:function(data){
                /*
                * Se ejecuta al termino de la petición
                * */
            }, 
            success: function(data) {
                //Cargamos finalmente el contenido deseado
                $('#respuesta').html(data);
                //Ocultamos el loader
                $('#loaderGif').hide(); 
            },
            error: function(data){
                /*
                * Se ejecuta si la peticón ha sido erronea
                * */
            }
        });
        return false;
	});

});  

</script>