function validarGenero(){
    var valid= false;
    var x=document.myform.genero;
    for(var i=0; i<x.length; i++){
        if(x[i].checked){
            valid = true;
            break;
        }
    }
    if(valid){
        return true;
    }
    else{
        alert("Por favor, seleccione un género");
        return false;
    }
}
