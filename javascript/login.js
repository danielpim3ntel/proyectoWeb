function inicio() {
    var nombre = document.getElementById('nombre');
    var contraseña = document.getElementById('contraseña');

    if (contraseña.value=='123' && nombre.value=='Administrador'){ 
          window.location.replace("administrador.php");
    } 
    else{ 
         alert("Por favor ingrese, nombre de usuario y contraseña correctos."); 
    } 
}
    
