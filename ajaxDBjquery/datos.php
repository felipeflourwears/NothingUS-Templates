<?php
$conexion=mysqli_connect("82.180.172.52","u958030263_retailmi","Beex2022%","u958030263_AdminRetailmi");

$consulta="SELECT id_usuario, nombre, correo, apellidos FROM usuarios";
$resultado=mysqli_query($conexion,$consulta);

while($fila=mysqli_fetch_array($resultado)){
    $arr[] = $fila;
}
echo json_encode($arr);

?>