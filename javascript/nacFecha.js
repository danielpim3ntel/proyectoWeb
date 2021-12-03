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