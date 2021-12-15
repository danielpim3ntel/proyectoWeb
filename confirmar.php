<?php

    session_start(); // Inicio de la sesión 
    include("php/conexion.php");
    $_SESSION["boleta"] = $_POST['boleta'];
    $_SESSION["nombre"] = $_POST['nombre'];
    $_SESSION["apePaterno"] = $_POST['apePaterno'];
    $_SESSION["apeMaterno"] = $_POST['apeMaterno'];
    $_SESSION["fechaNac"] = $_POST['fechaNac'];
    $_SESSION["genero"] = $_POST['genero'];


    $_SESSION["curp"] = $_POST['curp'];
    $_SESSION["calle"] = $_POST['calle'];
    $_SESSION["colonia"] = $_POST['colonia'];
    $_SESSION["alcaldia"] = $_POST['alcaldia'];
    $_SESSION["codigop"] = $_POST['codigop'];
    $_SESSION["telefono"] = $_POST['telefono'];
    $_SESSION["correo"] = $_POST['correo'];

    $_SESSION["escuelaProcedencia"] = $_POST['escuelaProcedencia'];
    $_SESSION["entidadProcedencia"] = $_POST['entidadProcedencia'];
    $_SESSION["promedio"] = $_POST['promedio'];
    $_SESSION["opcion"] = $_POST['opcion'];




    $boleta = $_SESSION["boleta"];
    $nombre = $_SESSION["nombre"];
    $apePaterno = $_SESSION["apePaterno"];
    $apeMaterno = $_SESSION['apeMaterno'];
    $fechaNac = $_SESSION['fechaNac'];
    $genero = $_SESSION['genero'];


    if($genero == "fem"){
        $genero = "Fenenino";
    }
    else{
        $genero = "Masculino";
    }

    
    $curp = $_SESSION['curp'];
    $calle = $_SESSION['calle'];
    $colonia = $_SESSION['colonia'];
    $alcaldia = $_SESSION["alcaldia"];
    if($alcaldia == "alvaro"){
        $alcaldia = "Álvaro Obregón";
    }
    else if($alcaldia == "azcapotzalco"){
        $alcaldia = "Azcapotzalco";
    }
    else if($alcaldia == "benito"){
        $alcaldia = "Benito Juárez";
    }
    else if($alcaldia == "coyoacan"){
        $alcaldia = "Coyoacán";
    }
    else if($alcaldia == "cuajimalpa"){
        $alcaldia = "Cuajimalpa de Morelos";
    }
    else if($alcaldia == "cuauhtemoc"){
        $alcaldia = "Cuahutémoc";
    }
    else if($alcaldia == "gustavo"){
        $alcaldia = "Gustavo A. Madero";
    }
    else if($alcaldia == "iztacalco"){
        $alcaldia = "Iztacalco";
    }
    else if($alcaldia == "iztapalapa"){
        $alcaldia = "Iztapalapa";
    }
    else if($alcaldia == "magdalena"){
        $alcaldia = "La Magdalena Contreras";
    }
    else if($alcaldia == "miguel"){
        $alcaldia = "Miguel Hidalgo";
    }
    else if($alcaldia == "milpa"){
        $alcaldia = "Milpa Alta";
    }
    else if($alcaldia == "tlalpan"){
        $alcaldia = "Tlalpan";
    }
    else if($alcaldia == "tlahuac"){
        $alcaldia = "Tláhuac";
    }
    else if($alcaldia == "venustiano"){
        $alcaldia = "Venustiano Carranza";
    }
    else if($alcaldia == "xochimilco"){
        $alcaldia = "Xochimilco";
    }


    $codigop = $_SESSION['codigop'];
    $tel = $_SESSION['telefono'];
    $correo = $_SESSION['correo'];

    $escuelaProcedencia = $_SESSION['escuelaProcedencia'];
    if($escuelaProcedencia == "Cecyt_1"){
        $escuelaProcedencia = 'CECyT #1 "González Vázquez Vega"';
    }
    else if($escuelaProcedencia == "Cecyt_2"){
        $escuelaProcedencia = 'CECyT #2 "Miguel Bernard"';
    }
    else if($escuelaProcedencia == "Cecyt_3"){
        $escuelaProcedencia = 'CECyT #3 "Estanislao Ramírez Ruiz"';
    }
    else if($escuelaProcedencia == "Cecyt_4"){
        $escuelaProcedencia = 'CECyT #4 "Lázaro Cárdenas"';
    }
    else if($escuelaProcedencia == "Cecyt_5"){
        $escuelaProcedencia = 'CECyT #5 "Benito Juárez García"';
    }
    else if($escuelaProcedencia == "Cecyt_6"){
        $escuelaProcedencia = 'CECyT #6 "Miguel Othón de Mendizábal"';
    }
    else if($escuelaProcedencia == "Cecyt_7"){
        $escuelaProcedencia = 'CECyT #7 "Cuauhtémoc"';
    }
    else if($escuelaProcedencia == "Cecyt_8"){
        $escuelaProcedencia = 'CECyT #8 "Narciso Bassols García"';
    }
    else if($escuelaProcedencia == "Cecyt_9"){
        $escuelaProcedencia = 'CECyT #9 "Juan de Dios Bátiz"';
    }
    else if($escuelaProcedencia == "Cecyt_10"){
        $escuelaProcedencia = 'CECyT #10 "Carlos Vallejo Márquez"';
    }
    else if($escuelaProcedencia == "Cecyt_11"){
        $escuelaProcedencia = 'CECyT #11 "Wilfrido Massieu Pérez"';
    }
    else if($escuelaProcedencia == "Cecyt_12"){
        $escuelaProcedencia = 'CECyT #12 "José María Morelos y Pavón"';
    }
    else if($escuelaProcedencia == "Cecyt_13"){
        $escuelaProcedencia = 'CECyT #13 "Ricardo Flores Magón"';
    }
    else if($escuelaProcedencia == "Cecyt_14"){
        $escuelaProcedencia = 'CECyT #14 "Luis Enrique Erro"';
    }
    else if($escuelaProcedencia == "Cecyt_15"){
        $escuelaProcedencia = 'CECyT #15 "Diódoro Antúnez Echegaray"';
    }
    else if($escuelaProcedencia == "Cecyt_16"){
        $escuelaProcedencia = 'CECyT #16 "Hidalgo"';
    }
    else if($escuelaProcedencia == "Cecyt_17"){
        $escuelaProcedencia = 'CECyT #17 "León, Guanajuato"';
    }
    else if($escuelaProcedencia == "Cecyt_18"){
        $escuelaProcedencia = 'CECyT #18 "Zacatecas"';
    }
    else if($escuelaProcedencia == "Cecyt_19"){
        $escuelaProcedencia = 'CECyT #19 "Leona Vicario"';
    }
    else if($escuelaProcedencia == "Cet_1"){
        $escuelaProcedencia = 'CET #1 "Walter Cross Buchanan"';
    }

    $entidadProcedencia = $_SESSION['entidadProcedencia'];
    if($entidadProcedencia == "agu"){
        $entidadProcedencia = "Aguascalientes";
    }
    else if($entidadProcedencia == "bcn"){
        $entidadProcedencia = "Baja California";
    }
    else if($entidadProcedencia == "bcs"){
        $entidadProcedencia = "Baja California Sur";
    }
    else if($entidadProcedencia == "camp"){
        $entidadProcedencia = "Campeche";
    }
    else if($entidadProcedencia == "chis"){
        $entidadProcedencia = "Chiapas";
    }
    else if($entidadProcedencia == "chih"){
        $entidadProcedencia = "Chihuahua";
    }
    else if($entidadProcedencia == "cdmx"){
        $entidadProcedencia = "Ciudad de México";
    }
    else if($entidadProcedencia == "coah"){
        $entidadProcedencia = "Coahuila";
    }
    else if($entidadProcedencia == "col"){
        $entidadProcedencia = "Colima";
    }
    else if($entidadProcedencia == "dgop"){
        $entidadProcedencia = "Durango";
    }
    else if($entidadProcedencia == "gto"){
        $entidadProcedencia = "Guanajuato";
    }
    else if($entidadProcedencia == "gro"){
        $entidadProcedencia = "Guerrero";
    }
    else if($entidadProcedencia == "hgo"){
        $entidadProcedencia = "Hidalgo";
    }
    else if($entidadProcedencia == "jal"){
        $entidadProcedencia = "Jalisco";
    }
    else if($entidadProcedencia == "edomex"){
        $entidadProcedencia = "México";
    }
    else if($entidadProcedencia == "mich"){
        $entidadProcedencia = "Michoacán";
    }
    else if($entidadProcedencia == "mor"){
        $entidadProcedencia = "Morelos";
    }
    else if($entidadProcedencia == "nay"){
        $entidadProcedencia = "Nayarit";
    }
    else if($entidadProcedencia == "nl"){
        $entidadProcedencia = "Nuevo León";
    }
    else if($entidadProcedencia == "oax"){
        $entidadProcedencia = "Oaxaca";
    }
    else if($entidadProcedencia == "pue"){
        $entidadProcedencia = "Puebla";
    }
    else if($entidadProcedencia == "qro"){
        $entidadProcedencia = "Querétaro";
    }
    else if($entidadProcedencia == "qroo"){
        $entidadProcedencia = "Quintana Roo";
    }
    else if($entidadProcedencia == "slp"){
        $entidadProcedencia = "San Luis Potosíl";
    }
    else if($entidadProcedencia == "sin"){
        $entidadProcedencia = "Sinaloa";
    }
    else if($entidadProcedencia == "son"){
        $entidadProcedencia = "Sonora";
    }
    else if($entidadProcedencia == "tab"){
        $entidadProcedencia = "Tabasco";
    }
    else if($entidadProcedencia == "tamps"){
        $entidadProcedencia = "Tamaulipas";
    }
    else if($entidadProcedencia == "tlax"){
        $entidadProcedencia = "Tlaxcala";
    }
    else if($entidadProcedencia == "ver"){
        $entidadProcedencia = "Veracruz";
    }
    else if($entidadProcedencia == "yuc"){
        $entidadProcedencia = "Yucantán";
    }
    else if($entidadProcedencia == "zac"){
        $entidadProcedencia = "Zacatecas";
    }


    $promedio = $_SESSION['promedio'];
    $opcion = $_SESSION['opcion'];
    
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
    echo "<p>Genero: $genero</p>";
    echo "<p>CURP: $curp</p> <br>";

    echo "<h2>Contacto</h2>";
    echo "<p>Calle: $calle</p>";
    echo "<p>Colonia: $colonia</p>";
    echo "<p>Alcaldia: $alcaldia</p>";
    echo "<p>Código postal: $codigop</p>";
    echo "<p>Teléfono: $tel</p>";
    echo "<p>Correo: $correo</p> <br>";

    echo "<h2>Procedencia</h2>";
    echo "<p>Escuela de procedencia: $escuelaProcedencia</p>";
    echo "<p>Entidad federativa de prodecencia: $entidadProcedencia</p>";
    echo "<p>Promedio: $promedio</p>";
    echo "<p>ESCOM fue tu: $opcion</p> <br>";
    ?>
    <div class="mb-3">
        <input class="btn btn-primary position-relative" type="submit" value="Modificar" onclick="location.href = 'modificar.php';">
    </div>
    <div class="mb-3">
        
        <form action="php/recibeFormulario.php" method="post">
            <input type="hidden" name="boleta" value="<?php echo $boleta; ?>">
            <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
            <input type="hidden" name="apePaterno" value="<?php echo $apePaterno; ?>">
            <input type="hidden" name="apeMaterno" value="<?php echo $apeMaterno; ?>">
            <input type="hidden" name="fechaNac" value="<?php echo $fechaNac; ?>">
            <input type="hidden" name="genero" value="<?php echo $genero; ?>">
            <input type="hidden" name="curp" value="<?php echo $curp; ?>">
            <input type="hidden" name="calle" value="<?php echo $calle; ?>">
            <input type="hidden" name="colonia" value="<?php echo $colonia; ?>">
            <input type="hidden" name="alcaldia" value="<?php echo $alcaldia; ?>">
            <input type="hidden" name="codigop" value="<?php echo $codigop; ?>">
            <input type="hidden" name="telefono" value="<?php echo $tel; ?>">
            <input type="hidden" name="correo" value="<?php echo $correo; ?>">
            <input type="hidden" name="escuelaProcedencia" value="<?php echo $escuelaProcedencia; ?>">
            <input type="hidden" name="entidadProcedencia" value="<?php echo $entidadProcedencia; ?>">
            <input type="hidden" name="promedio" value="<?php echo $promedio; ?>">
            <input type="hidden" name="opcion" value="<?php echo $opcion; ?>">

            <input class="btn btn-dark position-relative" type="submit" value="Confirmar" name="confirmar" >
        </form>
    </div>

</body>

</html>

