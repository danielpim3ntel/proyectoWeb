function validarBoleta() {
    var boleta = document.getElementById('boleta');
    var filtro = /^([PE|PP][0-9])|[0-9]$/;


    if (!filtro.test(boleta.value)) {
        alert('Por favor, ingresa tu boleta PE o PP y si vienes de vocacional ingresa tu boleta.');
        boleta.focus;
        return false;
    }
    else
        if(boleta.value.length === 10){
            alert('Boleta válida');
            return true;
        }
        else
            alert('Recuerda que la boleta es de solo 10 dígitos.');     
}

function validarNombre() {
    var nombre = document.getElementById('nombre');
    var filtro = /[A-Z][a-z]+/;

    if (!filtro.test(nombre.value)) {
        alert('El nombre debe comenzar por mayúsculas y contener unicamente letras');
        nombre.focus;
        return false;
    }
    //return true;    
}

function validarApeP() {
    var apePaterno = document.getElementById('apePaterno');
    var filtro = /[A-Z][a-z]+/;

    if (!filtro.test(apePaterno.value)) {
        alert('El apellido paterno debe comenzar por mayúsculas y contener unicamente letras');
        apePaterno.focus;
        return false;
    }
   //return true;    
}

function validarApeM() {
    var apeMaterno = document.getElementById('apeMaterno');
    var filtro = /[A-Z][a-z]+/;

    if (!filtro.test(apeMaterno.value)) {
        alert('El apellido materno debe comenzar por mayúsculas y contener unicamente letras');
        apeMaterno.focus;
        return false;
    }
   //return true;    
}

function validarNacFecha() {
    var nacFecha = document.getElementById('fechaNac');
    var filtro = /^(0[1-9]|1\d|2\d|3[01])\/(0[1-9]|1[0-2])\/((1[0-9][0-9][0-9])|20(0[0-9]|1[0-9]|21))$/;

    if (!filtro.test(nacFecha.value)) {
        alert('Fecha de Nacimiento incorrecta. El formato de la fecha de nacimiento es dd/mm/yyyy');
        nacFecha.focus;
        return false;
    }
    else
            alert('Fecha de Nacimiento válida');
            return true;     
}


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

function validarCurp() {
    var curp = document.getElementById('curp');
    var filtro = /^[A-Z][A-Z][A-Z][A-Z][0-9][0-9](0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[01])[H|M](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z][A-Z][A-Z]([0-9]|[A-Z])[0-9]$/;//[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)
    if (!filtro.test(curp.value)) {
        alert('Por favor, ingresa una Curp valida');
        curp.focus;
        return false;
    }
    else
        alert('Curp válida');
        return true;    
}


function validarCalle() {
    var calle = document.getElementById('calle');
    var filtro = /^[0-9a-zA-Z\s]+$/;

    if (!filtro.test(calle.value)) {
        alert('Por favor, ingresa una direccion valida');
        calle.focus;
        return false;
    }
    else
        alert('Direccion correcta');
        return true;
}

function validarColonia() {
    var colonia = document.getElementById('colonia');
    var filtro = /^[a-zA-Z\s]+$/;

    if (!filtro.test(colonia.value)) {
        alert('Por favor, ingresa una direccion valida');
        colonia.focus;
        return false;
    }
    else
        alert('Direccion correcta');
        return true;
}

function validarCodigoP() {
    var codigop = document.getElementById('codigop');
    var filtro = /^([0-9])+$/;

    if (!filtro.test(codigop.value)) {
        alert('Por favor, ingresa un correo válido');
        codigop.focus;
        return false;
    }
    else
        alert('Direccion correcta');
        return true;
}



function validarCorreo() {
    var correo = document.getElementById('correo');
    var filtro = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filtro.test(correo.value)) {
        alert('Por favor, ingresa un correo válido');
        correo.focus;
        return false;
    }
    else
        alert('Direccion de correo correcta');
        return true;
}



function validarFormulario(){
    validarBoleta(); 
    validarNombre(); 
    validarApeP(); 
    validarApeM(); 
    validarNacFecha(); 
    validarGenero(); 
    validarCurp(); 
    validarCalle(); 
    validarColonia(); 
    validarCodigoP();
    validarCorreo();
}
