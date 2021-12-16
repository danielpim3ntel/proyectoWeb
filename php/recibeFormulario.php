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
$sql = "INSERT INTO alumno (boleta,nombre,apePaterno,apeMaterno,fechaNac,genero,curp,calle,colonia,alcaldia,codigop,telefono,correo,escuelaProcedencia,entidadProcedencia,promedio,opcion) 
VALUES ('$boleta', '$nombre', '$apePaterno', '$apeMaterno', '$fechaNac', '$genero', '$curp', '$calle', '$colonia', '$alcaldia', '$codigop', 
'$telefono', '$correo', '$escuelaProcedencia', '$entidadProcedencia', '$promedio','$opcion')";
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

$examen = "SELECT * FROM asignacionExamen";
$resultado2 = mysqli_query($conexion,$examen);
$numFilasExamen = mysqli_num_rows($resultado2);
if($numFilasExamen < 25){
    echo "Tienes $numFilasExamen registros en la tabla asignacionExamen";
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario) 
    VALUES ('$boleta','H1')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <50 && $numFilasExamen >=25){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H2')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <75 && $numFilasExamen >=50){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H3')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <100 && $numFilasExamen >=75){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H4')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <125 && $numFilasExamen >=100){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H5')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <150 && $numFilasExamen >=125){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H6')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <175 && $numFilasExamen >=150){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H6')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <200 && $numFilasExamen >=175){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H7')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <225 && $numFilasExamen >=200){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H8')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <250 && $numFilasExamen >=225){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H9')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <275 && $numFilasExamen >=250){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H10')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <300 && $numFilasExamen >=275){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H11')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <325 && $numFilasExamen >=300){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H12')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <350 && $numFilasExamen >=325){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H13')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <375 && $numFilasExamen >=350){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H14')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <400 && $numFilasExamen >=375){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H15')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <425 && $numFilasExamen >=400){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H16')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <450 && $numFilasExamen >=425){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H17')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <475 && $numFilasExamen >=450){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H18')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <500 && $numFilasExamen >=475){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H19')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <525 && $numFilasExamen >=500){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H20')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <550 && $numFilasExamen >=525){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H21')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <575 && $numFilasExamen >=550){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H22')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <600 && $numFilasExamen >=575){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H23')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}
else if($numFilasExamen <625 && $numFilasExamen >=600){
    $sql2= "INSERT INTO asignacionExamen(boleta,id_horario)
    VALUES ('$boleta','H24')";
    if(mysqli_query($conexion, $sql2)){
        echo "Horario asignado.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
    }
}

// Close connection
mysqli_close($conexion);
?>
