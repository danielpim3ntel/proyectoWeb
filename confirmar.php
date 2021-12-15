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
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Practica 2: Equipo 4 ">
    <title>Registro</title>

    <!--link para Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/formulario.css">
</head>

<body>
    <div class="container" style="background-color:blue;">
        <div class="text-center" style="color: white;">
            <h1>REGISTRO DE DATOS GENERALES</h1>
            <h2>Alumnos de Nuevo Ingreso</h2>
            <h2>(Enero 2022)</h2>
        </div>
    </div>

    <?php echo "<h1>Hola $nombre, verifica que los datos que ingresaste sean correctos </h1> <br>"; 
    echo "<h2>Identidad</h2>";
    echo "<p>Boleta: $boleta</p>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Apellido paterno: $apePaterno</p>";
    echo "<p>Apellido materno: $apeMaterno</p>";
    echo "<p>Fecha de naciemineto: $fechaNac</p>";
    echo "<p>Genero: $genero</p> <br>";

    echo "<h2>Contacto</h2>";
    echo "<p>CURP: $curp</p>";
    echo "<p>Calle: $calle</p>";
    echo "<p>Colonia: $colonia</p>";
    echo "<p>Código postal: $codigop</p>";
    echo "<p>Teléfono: $tel</p>";
    echo "<p>Correo: $correo</p> <br>";

    echo "<h2>Procedencia</h2>";
    echo "<p>Escuela de procedencia: $escuelaProcedencia</p>";
    echo "<p>Entidad de prodecencia: $entidadProcedencia</p>";
    echo "<p>Promedio: $promedio</p>";
    echo "<p>ESCOM fue tu: $opcion</p> <br>";
    ?>

    <div class="mb-3">
        <input class="btn btn-primary position-relative" type="submit" value="Modificar" onclick="location.href = 'index.html';">
        <input class="btn btn-dark position-relative" type="submit" value="Confirmar">
    </div>


</body>

</html>




