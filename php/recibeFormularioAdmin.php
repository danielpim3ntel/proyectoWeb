<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conexion = mysqli_connect("localhost", "root", "", "baseProyecto");

//Recibir los datos del formulario
$boleta = $_POST['boleta'];
$nombre = $_POST['nombre'];
$apePaterno = $_POST['apePaterno'];
$apeMaterno = $_POST['apeMaterno'];
$fechaNac = $_POST['fechaNac'];
$genero = $_POST['genero'];
$fechaNac = $_POST['fechaNac'];
$curp = $_POST['curp'];
$calle = $_POST['calle'];
$colonia = $_POST['colonia'];
$alcaldia = $_POST['alcaldia'];
$codigop = $_POST['codigop'];
$tel = $_POST['telefono'];
$correo = $_POST['correo'];
$escuelaProcedencia = $_POST['escuelaProcedencia'];
$entidadProcedencia = $_POST['entidadProcedencia'];
$promedio = $_POST['promedio'];
$opcion = $_POST['opcion'];

 
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
$sql = "UPDATE alumno SET nombre = '$nombre', apePaterno = '$apePaterno',apeMaterno = '$apeMaterno' ,fechaNac = '$fechaNac',genero = '$genero',
curp = '$curp',calle = '$calle',colonia = '$colonia',alcaldia = '$alcaldia',codigop = '$codigop',telefono = '$telefono' ,correo ='$correo',escuelaProcedencia =  '$escuelaProcedencia',
entidadProcedencia = '$entidadProcedencia',promedio = '$promedio',opcion = '$opcion' WHERE boleta = '$boleta' ";
if(mysqli_query($conexion, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
}
 
$datos = "SELECT * FROM alumno";
$resultado = mysqli_query($conexion,$datos);
$numFilasResultado = mysqli_num_rows($resultado);
if($numFilasResultado <= 10){
    echo "Tienes $numFilasResultado registros en la tabla alumno";
    
}

// Close connection
mysqli_close($conexion);
?>

