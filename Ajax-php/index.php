<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba - PhP-Ajax</title>
    
</head>
<body>
    <section>
        <form action="">
            <label for="nombre">
                <span></span>
                <input type="text" id="nombre" placeholder="nombre">
            </label>
            <label for="apellido">
                <span></span>
                <input type="text" id="apellido" placeholder="apellido">
            </label>
            <label for="edad">
                <span></span>
                <input type="text" id="edad" placeholder="edad">
            </label>
            <button type='button' id='Enviar'>Enviar</button>
        
        </form>

    </section>
    <br>
    <br>
    <!--div#respuesta-->
    <div id="respuesta"></div>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script>
        $('#Enviar').click(function(){
            var nombre=document.getElementById('nombre').value;
            var apellido=document.getElementById('apellido').value;
            var edad=document.getElementById('edad').value;

            var ruta='nombre='+nombre+'&apellido='+apellido+'&edad='+edad;

            $.ajax({
                url: 'back.php',
                type: 'POST',
                data: ruta,
            })
            .done(function(res){
                $('#respuesta').html(res)
            })
            .fail(function(){
                console.log("Error");
            })
            .always(function(){
                console.log("complete")
            });

        });
    </script>
</body>
</html>