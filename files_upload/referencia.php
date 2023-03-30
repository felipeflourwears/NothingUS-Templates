<?php

// Conexión a la base de datos (debes cambiar estos valores con los tuyos)
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "nombre_de_la_bd";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recorrer cada archivo cargado y realizar una inserción en la base de datos
foreach ($files as $fileID => $file)
{
    $nombre_imagen = $file['name'];
    $temporal = $file['tmp_name'];
    $carpeta = './imgprueba';

    $ruta = $carpeta . "/" . $id_cliente2 . "-" . $fecha_actual_completa . $nombre_imagen;
    $rutWeb = 'https://retailmibeex.net/';
    $rutWeb2 = substr($ruta, 3);
    $urlf = $rutWeb . $rutWeb2;

    if (move_uploaded_file($temporal, $ruta)) {
        // Si el archivo se ha movido correctamente, realizar la inserción en la base de datos
        $sql = "INSERT INTO archivos (id_cliente, nombre_producto, descripcion, nombre_archivo, url_archivo) VALUES ('$id_cliente2', '$nombre_producto', '$descripcion', '$nombre_imagen', '$urlf')";

        if ($conn->query($sql) === TRUE) {
            echo "Archivo cargado y registrado en la base de datos correctamente." . "<br>";
        } else {
            echo "Error al registrar el archivo en la base de datos: " . $conn->error . "<br>";
        }
    } else {
        echo "Error al cargar el archivo." . "<br>";
    }
    
    echo "---------------------" . "<br>";
}

// Cerrar la conexión a la base de datos
$conn->close();

?>