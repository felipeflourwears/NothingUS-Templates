<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>

    <!---Javascript-->
    <script>
    function comprobarClave(){
    clave1 = document.f1.clave1.value
    clave2 = document.f1.clave2.value

    if (clave1 == clave2)
       alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo")
    else
       alert("Las dos claves son distintas...\nRealizaríamos las acciones del caso negativo")
    }
</script>



</head>
<body>
    <h1>HEllo world Pruebas</h1>
    <h3>Validar si la contraseña y la repetición de la contraseña son iguales</h3>
    <br>
    Escribe una supuesta contraseña dos veces, una en cada campo, y pulsa el botón. Javascript te dirá si las dos son iguales.

    <br>
    <form action="hello.php" name="f1">
    Contraseña: <input type="password" name="clave1" size="20">
    <br>
    Repite contraseña: <input type="password" name="clave2" size="20">
    <br>
    <button type="submit" class="btn btn-raised btn-success btn-sm" name="agregar" id="agregar" value="Guardar" onClick="comprobarClave()"><i class="fa fa-play-circle"></i> &nbsp; COMENZAR</button>

    </form>
    
</body>
</html>