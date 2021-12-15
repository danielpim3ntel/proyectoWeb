
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conexion = mysqli_connect("localhost", "root", "", "baseProyecto");
 
// Check connection
if($conexion === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$boleta = mysqli_real_escape_string($conexion, $_REQUEST['boleta']);
$nombre = mysqli_real_escape_string($conexion, $_REQUEST['nombre']);
$apePaterno = mysqli_real_escape_string($conexion, $_REQUEST['apePaterno']);
$apeMaterno = mysqli_real_escape_string($conexion, $_REQUEST['apeMaterno']);
$fechaNac = mysqli_real_escape_string($conexion, $_REQUEST['fechaNac']);
$genero = mysqli_real_escape_string($conexion, $_REQUEST['genero']);
$curp = mysqli_real_escape_string($conexion, $_REQUEST['curp']);
$calle = mysqli_real_escape_string($conexion, $_REQUEST['calle']);
$colonia = mysqli_real_escape_string($conexion, $_REQUEST['colonia']);
$alcaldia = mysqli_real_escape_string($conexion, $_REQUEST['alcaldia']);
$codigop = mysqli_real_escape_string($conexion, $_REQUEST['codigop']);
$telefono = mysqli_real_escape_string($conexion, $_REQUEST['telefono']);
$correo = mysqli_real_escape_string($conexion, $_REQUEST['correo']);
$escuelaProcedencia = mysqli_real_escape_string($conexion, $_REQUEST['escuelaProcedencia']);
$entidadProcedencia = mysqli_real_escape_string($conexion, $_REQUEST['entidadProcedencia']);
$promedio = mysqli_real_escape_string($conexion, $_REQUEST['promedio']);
$opcion = mysqli_real_escape_string($conexion, $_REQUEST['opcion']);
 
// Attempt insert query execution
$sql = "INSERT INTO alumno (boleta,nombre,apePaterno,apeMaterno,fechaNac,genero,curp,calle,colonia,alcaldia,codigop,telefono,correo,escuelaProcedencia,entidadProcedencia,promedio,opcion) 
VALUES ('$boleta', '$nombre', '$apePaterno', '$apeMaterno', '$fechaNac', '$genero', '$curp', '$calle', '$colonia', '$alcaldia', '$codigop', 
'$telefono', '$correo', '$escuelaProcedencia', '$entidadProcedencia', '$promedio','$opcion')";
if(mysqli_query($conexion, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
}
 
// Close connection
mysqli_close($conexion);
?>
