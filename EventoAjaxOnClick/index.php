<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $id="18";
    ?>
    <button type="button" class="btn" id="gracias" style="font-size: 17px;" onclick="cargarData(<?php echo $id; ?>);">Regresar</button>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    
    <script type="text/javascript">
    function cargarData(id){
        var url='reporte.php';
        $.ajax({
           type: 'POST',
           url:url,
           data: 'id='+id,
           success: function(response){
            alert(response);
           } 
        });
    }
    </script>
</body>
</html>