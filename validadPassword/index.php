<!DOCTYPE html> 
<html lang="es"> 
  
<head> 
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge" /> 
    <title>Como Verificar si 2 Contraseñas Coinciden o son Iguales con JavaScript </title> 
    <link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity= "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" /> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head> 
  
<body> 
    <div class="container"> 
        <h1>Como Verificar si 2 Contraseñas Coinciden o son Iguales con JavaScript</h1>
        <h1>Hello world</h1>  

        <div id="msg"></div>

        <!-- Mensajes de Verificación -->
        <div id="error" class="alert alert-danger ocultar" role="alert">
            Las Contraseñas no coinciden, vuelve a intentar !
        </div>
        <div id="ok" class="alert alert-success ocultar" role="alert">
            Las Contraseñas coinciden ! (Procesando formulario ... )
        </div>
        <!-- Fin Mensajes de Verificación -->

        <form id="miformulario" action="hello.php">
            <div class="form-group">
              <label for="usuario">Usuario</label>
              <input type="text" class="form-control" id="usuario" value="usuariogenial" required>              
            </div>
            <div class="form-group">
              <label for="pass1">Contraseña</label>
              <input type="password" class="form-control" id="pass1" required>
            </div>
            <div class="form-group">
                <label for="pass2">Vuelve a escribir la Contraseña</label>
                <input type="password" class="form-control" id="pass2" required>                
            </div>
            
            <button type="submit" onclick="verificarPasswords();" id="login" class="btn btn-primary">Login</button>
        </form>         

    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"> 
</script> 

<script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity= "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"> 
</script> 

<script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity= "sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"> 
</script> 

<script src="script.js"></script>
</body> 
  
</html> 