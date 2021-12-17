<?php 
        $conexion = mysqli_connect("localhost", "root", "", "baseProyecto");
        $boleta = $_GET['boleta'];
        $sql = "DELETE FROM alumno WHERE boleta = $boleta";
        $result = mysqli_query($conexion,$sql);
?>