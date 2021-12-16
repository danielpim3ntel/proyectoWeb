function inicio() {
    var nombre = document.getElementById('nombre');
    var contraseña = document.getElementById('contraseña');

    if (contraseña.value=='123' && nombre.value=='Administrador'){ 
          window.location.replace("administrador.html");
    } 
    else{ 
         alert("Por favor ingrese, nombre de usuario y contraseña correctos."); 
    } 
}
    
/*function go(){

if (document.form.contraseña.value=='123' && document.form.nombre.value=='Administrador'){ 
        document.form.submit(); 
    } 
    else{ 
         alert("Por favor ingrese, nombre de usuario y contraseña correctos."); 
    } 
} */
