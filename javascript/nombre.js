
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
