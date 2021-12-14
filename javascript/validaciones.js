const formulario = document.getElementById('formulario');
const inputsFormControl = document.querySelectorAll('#formulario .form-control');
const inputsFormCheck = document.querySelectorAll('#formulario .form-check-input');
const inputsFormSelect = document.querySelectorAll('#formulario .form-select');

const expresiones = {
    boleta: /^([PE|PP][0-9])|[0-9]$/,
    nombre: /[A-Z][a-z]+/,
    apeMaterno: /[A-Z][a-z]+/,
    apePaterno: /[A-Z][a-z]+/,
    fechaNac: /^(0[1-9]|1\d|2\d|3[01])\/(0[1-9]|1[0-2])\/((1[0-9][0-9][0-9])|20(0[0-9]|1[0-9]|21))$/,
    genero: document.getElementsByName('genero'),
    curp: /^[A-Z][A-Z][A-Z][A-Z][0-9][0-9](0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[01])[H|M](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z][A-Z][A-Z]([0-9]|[A-Z])[0-9]$/,
    calle: /^[0-9a-zA-Z\s]+$/,
    colonia: /^[a-zA-Z\s]+$/,
    alcaldia: document.getElementsByName('alcaldia'),
    codigop: /^([0-9])+$/,
    telefono: /^([0-9])+$/,
    correo: /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/,
    escuelaProcedencia: document.getElementsByName('escuelaProcedencia'),
    entidadProcedencia: document.getElementsByName('entidadProcedencia'),
    escuelaProcedenciaOtro: /[A-Z][a-z]+/,
    promedio: /^([6-9].[0-9][0-9]|[6-9]|10)$/
}

const campos = {
    boleta: false,
    nombre: false,
    apeMaterno: false,
    apePaterno: false,
    fechaNac: false,
    genero: false,
    curp: false,
    calle: false,
    colonia: false,
    alcaldia: false,
    codigop: false,
    telefono: false,
    correo: false,
    escuelaProcedencia: false,
    entidadProcedencia: false,
    escuelaProcedenciaOtro: false,
    promedio: false,
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "boleta":
            validarCampo(expresiones.boleta, e.target, 'boleta');
            break;
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
            break;
        case "apePaterno":
            validarCampo(expresiones.apePaterno, e.target, 'apePaterno');
            break;
        case "apeMaterno":
            validarCampo(expresiones.apeMaterno, e.target, 'apeMaterno');
            break;
        case "fechaNac":
            validarCampo(expresiones.fechaNac, e.target, 'fechaNac');
            break;
        case "genero":
            validarFormCheck(expresiones.genero, e.target, 'genero');
            break;
        case "curp":
            validarCampo(expresiones.curp, e.target, 'curp');
            break;
        case "calle":
            validarCampo(expresiones.calle, e.target, 'calle');
            break;
        case "colonia":
            validarCampo(expresiones.colonia, e.target, 'colonia');
            break;
        case "alcaldia":
            validarFormSelect(expresiones.alcaldia, e.target, 'alcaldia');
            break;
        case "codigop":
            validarCampo(expresiones.codigop, e.target, 'codigop');
            break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
            break;
        case "correo":
            validarCampo(expresiones.correo, e.target, 'correo');
            break;
        case "escuelaProcedencia":
            validarFormSelect(expresiones.escuelaProcedencia, e.target, 'escuelaProcedencia');
            break;
        case "escuelaProcedenciaOtro":
            validarCampo(expresiones.escuelaProcedenciaOtro, e.target, 'escuelaProcedenciaOtro');
            break;
        case "entidadProcedencia":
            validarFormSelect(expresiones.entidadProcedencia, e.target, 'entidadProcedencia');
            break;
        case "promedio":
            validarCampo(expresiones.promedio, e.target, 'promedio');
            break;
    }
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        campos[campo] = true;
        document.querySelector(`#grupo-control-${campo} input`).classList.remove('is-invalid');
        document.querySelector(`#grupo-control-${campo} input`).classList.add('is-valid');
        document.querySelector(`#grupo-control-${campo} .formulario-input-error`).classList.remove('formulario-input-error-ver');
    } else {
        campos[campo] = false;
        document.querySelector(`#grupo-control-${campo} input`).classList.remove('is-valid');
        document.querySelector(`#grupo-control-${campo} input`).classList.add('is-invalid');
        document.querySelector(`#grupo-control-${campo} .formulario-input-error`).classList.add('formulario-input-error-ver');
    }
}

const validarFormCheck = (radio, input, campo) => {
    var i = 0;
    var validacion = false;
    while (!validacion && i < radio.length) {
        if (radio[i].checked)
            validacion = true;
        i++;
    }

    if (validacion) {
        campos[campo] = true;
        i = 0;
        while (i < radio.length) {
            radio[i].classList.remove('is-invalid');
            i++;
        }
        document.querySelector(`#grupo-control-${campo} .formulario-input-error`).classList.remove('formulario-input-error-ver');
    }
    else {
        campos[campo] = false;
        i = 0;
        while (i < radio.length) {
            radio[i].classList.add('is-invalid');
            i++;
        }
        document.querySelector(`#grupo-control-${campo} .formulario-input-error`).classList.add('formulario-input-error-ver');
    }
}

const validarFormSelect = (select, input, campo) => {
    var i = 0;
    var validacion = false;

    if (select[0].value) {
        validacion = true;
    }

    if (validacion) {
        campos[campo] = true;
        select[0].classList.remove('is-invalid');
        document.querySelector(`#grupo-control-${campo} .formulario-input-error`).classList.remove('formulario-input-error-ver');

    }
    else {
        campos[campo] = false;
        select[0].classList.add('is-invalid');
        document.querySelector(`#grupo-control-${campo} .formulario-input-error`).classList.add('formulario-input-error-ver');
    }

    if (select[0].value == "Otro") {
        document.querySelector(`#grupo-control-${campo} input`).style.display = 'block';
        //document.querySelector(`#grupo-control-${campo} input`).addEventListener('keyup', validarOtro);

    }
}

inputsFormCheck.forEach((input) => {
    input.addEventListener('blur', validarFormulario);
    input.addEventListener('change', validarFormulario);
});

inputsFormSelect.forEach((input) => {
    input.addEventListener('blur', validarFormulario);
    input.addEventListener('change', validarFormulario);
});

inputsFormControl.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

function checador() {
    if (
        campos.boleta &&
        campos.nombre &&
        campos.apeMaterno &&
        campos.apePaterno &&
        campos.fechaNac &&
        campos.genero &&
        campos.curp &&
        campos.calle &&
        campos.colonia &&
        campos.alcaldia &&
        campos.codigop &&
        campos.telefono &&
        campos.correo &&
        campos.escuelaProcedencia &&
        campos.entidadProcedencia &&
        campos.escuelaProcedenciaOtro &&
        campos.promedio) {
        return true;
    }
    else {
        return false;
    }
}

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    console.log(campos.boleta);
    if (checador == true) {
        console.log('cumple');
    }
    else {
        validarFormularioF();
        console.log('noCumple');
    }
    return true;
});


function validarFormularioF() {
    validarCampo(expresiones.boleta, document.getElementsByName('boleta')[0], 'boleta');
    validarCampo(expresiones.nombre, document.getElementsByName('nombre')[0], 'nombre');
    validarCampo(expresiones.apePaterno, document.getElementsByName('apePaterno')[0], 'apePaterno');
    validarCampo(expresiones.apeMaterno, document.getElementsByName('apeMaterno')[0], 'apeMaterno');
    validarCampo(expresiones.fechaNac, document.getElementsByName('fechaNac')[0], 'fechaNac');
    validarFormCheck(expresiones.genero, document.getElementsByName('genero'), 'genero');
    validarCampo(expresiones.curp, document.getElementsByName('curp')[0], 'curp');
    validarCampo(expresiones.calle, document.getElementsByName('calle')[0], 'calle');
    validarCampo(expresiones.colonia, document.getElementsByName('colonia')[0], 'colonia');
    validarFormSelect(expresiones.alcaldia, document.getElementsByName('alcaldia'), 'alcaldia');
    validarCampo(expresiones.codigop, document.getElementsByName('codigop')[0], 'codigop');
    validarCampo(expresiones.telefono, document.getElementsByName('telefono')[0], 'telefono');
    validarCampo(expresiones.correo, document.getElementsByName('correo')[0], 'correo');
    validarFormSelect(expresiones.escuelaProcedencia, document.getElementsByName('escuelaProcedencia'), 'escuelaProcedencia');
    validarCampo(expresiones.escuelaProcedenciaOtro, document.getElementsByName('escuelaProcedenciaOtro')[0], 'escuelaProcedenciaOtro');
    validarFormSelect(expresiones.entidadProcedencia, document.getElementsByName('entidadProcedencia'), 'entidadProcedencia');
    validarCampo(expresiones.promedio, document.getElementsByName('promedio')[0], 'promedio');
}

/*function validarBoleta() {
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
}*/

 /*function validarNacFecha() {
    var nacFecha = document.getElementById('fechaNac');
    //var filtro = /^(0[1-9]|1\d|2\d|3[01])\/(0[1-9]|1[0-2])\/((1[0-9][0-9][0-9])|20(0[0-9]|1[0-9]|21))$/;

    if (!filtro.test(nacFecha.value)) {
        alert('Fecha de Nacimiento incorrecta. El formato de la fecha de nacimiento es dd/mm/yyyy');
        nacFecha.focus;
        return false;
    }
    else
            alert('Fecha de Nacimiento válida');
            return true;   
}*/  

/*
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
        alert('Por favor, ingresa un código postal válido');
        codigop.focus;
        return false;
    }
    else
        alert('Código Postal correcto');
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

function validarPromedio() {
    var promedio = document.getElementById('promedio');
    var filtro = /^([6-9].[0-9][0-9]|[6-9]|10)$/;

    if (!filtro.test(promedio.value)) {
        alert('El promedio solo puede contener 2 decimales');
        promedio.focus;
        return false;
    }
    else
        alert('Promedio válido');
        return true;
}

function validarTelefono() {
    var telefono = document.getElementById('telefono');
    var filtro = /^[0-9]{10}$/;

    if (!filtro.test(telefono.value)) {
        alert('El teléfono o celular debe ser de 10 dígitos.');
        promedio.focus;
        return false;
    }
    else
        alert('Teléfono válido');
        return true;
}


function validarFormulario(){
    validarBoleta(); 
    validarNombre(); 
    validarApeP(); 
    validarApeM(); 
    //validarNacFecha(); 
    validarGenero(); 
    validarCurp(); 
    validarCalle(); 
    validarColonia(); 
    validarCodigoP();
    validarTelefono();
    validarCorreo();
    validarPromedio();
}
*/
