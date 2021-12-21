<?php 
        $conexion = mysqli_connect("localhost", "root", "", "baseProyecto");
        $boleta = mysqli_real_escape_string($conexion, $_REQUEST['boleta']);
        
        $sql = "DELETE FROM asignacionExamen WHERE boleta = '$boleta'";
        if(mysqli_query($conexion, $sql)){
                echo "Borrado exitoso";
        } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
        }
        
        $sql2 = "DELETE FROM alumno WHERE boleta = '$boleta'";
        
        if(mysqli_query($conexion, $sql2)){
                echo "Borrado exitoso";
        } else{
                echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conexion);
        }
?>
