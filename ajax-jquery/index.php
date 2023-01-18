<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
    <h1>Page 1</h1>
    <input type="text" id="valor">
    <button onclick="Enviar();">Enviar</button>
    <div id="resultado"></div>

<!--     <script type="text/javascript">
        function objetoAjax(){
            var xmlhttp=false;
            try{
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch(e){
                try{
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch(E){
                    xmlhttp = false;
                }
            }
            if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
                xmlhttp = new XMLHttpRequest();
            }

            return xmlhttp;

        }


    function Enviar(){
        valor= document.getElementById('valor').value;
        ajax= objetoAjax();
        ajax.open("POST", "pagina2.php", true);
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4){
                document.getElementById("resultado").innerHTML=ajax.responseText;
            }
        }
    
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("varp2="+valor)
    }    
    </script> -->

    <script src="script.js"></script>
</body>
</html>