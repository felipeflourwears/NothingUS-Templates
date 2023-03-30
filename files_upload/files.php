<?php
//Variables de prueba
$id_cliente2='2';
$nombre_producto="producto";
$descripcion="descripcion";


$files_post = $_FILES['file'];

$files = array();
$file_count = count($files_post['name']);
$file_keys = array_keys($files_post);

for ($i=0; $i < $file_count; $i++) 
{ 
	foreach ($file_keys as $key) 
	{
		$files[$i][$key] = $files_post[$key][$i];
	}
}

$fecha_actual = getdate();
$fecha_actual_completa = $fecha_actual['mday'] . "-" . $fecha_actual['mon'] . "-" . $fecha_actual['year'] . $fecha_actual['hours'] . "-" . $fecha_actual['minutes'] . "-" . $fecha_actual['seconds'];

	
foreach ($files as $fileID => $file)
{
    $nombre_imagen = $file['name'];
    $temporal = $file['tmp_name'];
    $carpeta = './imgprueba';

    $ruta = $carpeta . "/" . $id_cliente2 . "-" . $fecha_actual_completa . $nombre_imagen;
	move_uploaded_file($temporal, $ruta);

}


?>