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