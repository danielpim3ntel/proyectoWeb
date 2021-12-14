<?php
    $boleta = $_POST['boleta'];
    $nombre = $_POST['nombre'];
    $nombre = $_POST['nombre'];
    $apePaterno = $_POST['apePaterno'];
    $apeMaterno = $_POST['apeMaterno'];
    $fechaNac = $_POST['fechaNac'];
    $genero = $_POST['genero'];
    
    $curp = $_POST['curp'];
    $calle = $_POST['calle'];
    $colonia = $_POST['colonia'];
    $codigop = $_POST['codigop'];
    $tel = $_POST['telefono'];
    $correo = $_POST['correo'];

    $escuelaProcedencia = $_POST['escuelaProcedencia'];
    $entidadProcedencia = $_POST['entidadProcedencia'];
    $promedio = $_POST['promedio'];
    $opcion = $_POST['opcion'];

    $conexion = mysqli_connect("localhost","root","","baseProyecto");

    if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL. Error " . mysqli_connect_errno() . " : ". mysqli_connect_error() . PHP_EOL;
        die;
    }
    $sql = "INSERT INTO alumno (boleta, nombre,apeP,apeM,fechaNac,curp,correo,escuelaProcedencia,entidadProcedencia,telefono,promedio) 
    VALUES ('{$_POST[boleta]}', '{$_POST[nombre]}', '{$_POST[apeP]}', '{$_POST[apeM]}', '{$_POST[fechaNac]}', '{$_POST[curp]}', '{$_POST[correo]}', '{$_POST[escuelaProcedencia]}', '{$_POST[entidadProcedencia]}', '{$_POST[telefono]}', '{$_POST[promedio]}');"

?>
