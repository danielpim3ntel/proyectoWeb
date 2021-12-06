
function validarCorreo() {
    var correo = document.getElementById('correo');
    var filtro = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filtro.test(correo.value)) {
        alert('Por favor, ingresa un correo válido');
        correo.focus;
        return false;
    }
    else
        alert('Direccion correcta');
        return true;
}
