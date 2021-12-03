function validarBoleta() {
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