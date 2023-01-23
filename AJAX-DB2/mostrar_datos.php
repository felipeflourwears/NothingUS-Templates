<?php
include("conexion.php");
$resUsuarios=$conexion->query("SELECT * FROM usuarios");

echo "
    <table class='table' style='font-size:12px; margin-top:-1%;' border='1px' align='center'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Eliminar</th>
        </tr>
";
while($fila= $resUsuarios->fetch_array(MYSQLI_BOTH)){
    echo "
    <tr>
        <td>".$fila["id_users"]."</td>
        <td>".$fila["nombre_users"]."</td>
        <td>".$fila["apellido_users"]."</td>
        <td>Eliminar</td>
    </tr>";
}

echo"</table>"

?>