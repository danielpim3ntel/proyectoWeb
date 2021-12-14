<?php

    $conexion = mysqli_connect("localhost","root","","baseProyecto");
    $sql = "SELECT * FROM alumno";
    $resultado = mysqli_query($conexion,$sql);
    $numFilasResultado = mysqli_num_rows($resultado);

    echo "Tienes $numFilasResultado registros en la tabla alumno";
?>
