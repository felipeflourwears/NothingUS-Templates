var checkboxes=document.querySelectorAll('.checkbox');
    //console.log(checkboxes);
    var count=0;

   //SELECT ALL THE CHECKBOXES AND RETURN OF ALL CHECKBOXES
    document.getElementById("select-all").onclick=function(){
        count=0;
        for(var checkbox of checkboxes){
            checkbox.checked=this.checked;
            if(checkbox.checked==true){
                count++;
                document.getElementById('selected').innerHTML=count;
            }else{
                count=0;
                document.getElementById('selected').innerHTML=count;
            }
        }
    }

    //INDIVIDUAL CHECKBOX COUNT
    for(var i=0; i<checkboxes.length; i++){
        checkboxes[i].addEventListener('click', function(){
            //make sure if checbox is checked or not
            if(this.checked==true){
                count ++;
            }else{
                count --;
            }
            document.getElementById('selected').innerHTML=count;
        })
    }