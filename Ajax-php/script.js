$('#Enviar').click(function(){
    var nombre=document.getElementById('nombre').value;
    var apellido=document.getElementById('apellido').value;
    var edad=document.getElementById('edad').value;

    var ruta='nombre='+nombre+'&apellido='+apellido+'&edad='+edad;

    $.ajax({
        url: 'back.php',
        type: 'POST',
        data: ruta,
    })
    .done(function(res){
        $('#respuesta').html(res)
    })
    .fail(function(){
        console.log("Error");
    })
    .always(function(){
        console.log("complete")
    });

});