function validarCurp() {
        var curp = document.getElementById('curp');
        var filtro = /^[A-Z][A-Z][A-Z][A-Z][0-9][0-9](0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[01])[H|M](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z][A-Z][A-Z][0-9]([0-9]|[A-Z])$/;


        if (!filtro.test(curp.value)) {
            alert('Por favor, ingresa una Curp valida');
            curp.focus;
            return false;
        }
        else
            alert('Curp válida');
            return true;    
}