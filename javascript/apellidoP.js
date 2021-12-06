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
