<?php
$nom = $_POST['nom'];
$ape = $_POST['ape'];


$cnx=mysqli_connect("localhost", "root", "", "pruebadb");
$sql = "INSERT INTO talumno(nom, ape) VALUES('$nom', '$ape')";
$rta = mysqli_query($cnx, $sql);

if(!$rta){
    echo "No se insertó los cambios";
}else{
    header("Location: index.php");
}
?>
