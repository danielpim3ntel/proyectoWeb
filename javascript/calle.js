function validarCalle() {
    var calle = document.getElementById('calle');
    var filtro = /^[0-9a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ\s]+$/;

    if (!filtro.test(calle.value)) {
        alert('Por favor, ingresa una direccion valida');
        calle.focus;
        return false;
    }
    else
        alert('Direccion correcta');
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
