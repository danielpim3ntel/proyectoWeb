
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
