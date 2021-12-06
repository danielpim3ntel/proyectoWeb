
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
