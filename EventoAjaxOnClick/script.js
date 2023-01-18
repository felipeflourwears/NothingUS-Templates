function cargarData(id,nombre){
    var url='reporte.php';
    //Antes de cambios
    var ruta='id='+id+'&nombre='+nombre;
    $.ajax({
       type: 'POST',
       url:url,
       data: ruta,
       success: function(response){
        alert(response);
       } 
    });
}