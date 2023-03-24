<?php
$id = $_GET['id'];


$cnx=mysqli_connect("localhost", "root", "", "pruebadb");
$sql = "DELETE FROM talumno where id like $id";
$rta = mysqli_query($cnx, $sql);

if(!$rta){
    echo "No se eliminó";
}else{
    header("Location: index.php");
}
?>