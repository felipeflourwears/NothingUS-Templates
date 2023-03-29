<?php
    $host="#";
    $usuario="#";
    $clave="#";
    $nomDB="#";

    if(!$link=mysqli_connect($host, $usuario, $clave, $nomDB)){
        $conex="no";
    }else{
        $conex = "si";
    }

?>