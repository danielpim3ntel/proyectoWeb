function validarColonia() {
    var colonia = document.getElementById('colonia');
    var filtro = /^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ\s]+$/;

    if (!filtro.test(colonia.value)) {
        alert('Por favor, ingresa una direccion valida');
        colonia.focus;
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
