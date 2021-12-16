<?php
    session_start(); // Inicio de la sesión








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


    <div class="container"> <br>
        <form id="formulario"  class="form-horizontal" method="POST">
            <fieldset class="border p-2">
                <legend class="text-primary"> Identidad</legend>

                <div class="mb-3 row">
                    <div class="col-auto">
                        <label for="boleta" class="col-form-label">No. de Boleta: </label>
                    </div>

                    <div class="col-auto" id="grupo-control-boleta">
                        <input class="form-control" type="text" id="boleta" name="boleta" maxlength="10" size="10" value = <?php echo $boleta ?>
                            placeholder="20XXXXXXXX">
                        <div class="formulario-input-error">Evite simbolos @*/...</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-auto">
                        <label class="col-form-label">Nombre: </label>
                    </div>

                    <div class="col-auto mb-1" id="grupo-control-nombre">
                        <input class="form-control" id="form-control-nombre" type="text" id="nombre" name="nombre" value = <?php echo $nombre ?>
                            placeholder="Nombre(s)" maxlength="20" size="20">
                        <div class="formulario-input-error">Inicie con Mayuscula. Ej. Daniel</div>
                    </div>
                    <div class="col-auto mb-1" id="grupo-control-apePaterno">
                        <input class="form-control" type="text" id="apePaterno" name="apePaterno" value = <?php echo $apePaterno ?>
                            placeholder="Apellido paterno" maxlength="20" size="20">
                        <div class="formulario-input-error">Inicie con Mayuscula. Ej. Pimentel</div>
                    </div>
                    <div class="col-auto" id="grupo-control-apeMaterno">
                        <input class="form-control" type="text" id="apeMaterno" name="apeMaterno" value = <?php echo $apeMaterno ?>
                            placeholder="Apellido materno" maxlength="20" size="20">
                        <div class="formulario-input-error">Inicie con Mayuscula. Ej. Paulin</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-auto">
                        <label for="fechaNac" class="col-form-label">Fecha de Nacimiento:</label>
                    </div>
                    <div class="col-auto" id="grupo-control-fechaNac">                               <!--Arreglar><-->
                        <input class="form-control" type="date" id="fechaNac" name="fechaNac" data-date-format="DD/MM/YYYY"  value = <?php echo $fechaNac ?>>
                        <div class="formulario-input-error">Indique una fecha</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-auto">
                        <label for="genero" class="col-sm-2 col-form-label">G&eacute;nero:</label>
                    </div>

                    <div class="col-auto mt-2" id="grupo-control-genero" value = <?php echo $genero ?>>  <!--Arreglar><-->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" 
                                   
                            <?php   if($_SESSION["genero"] == "fem") { ?>
                                 checked 
                            <?php } ?>

                            value = "fem" >
                            <label class="form-check-label" for="fem">Femenino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero"
                                   
                            <?php   if($_SESSION["genero"] == "mas") { ?>
                                 checked 
                            <?php } ?>
                            
                            value = "mas" >
                            <label class="form-check-label" for="mas">Masculino</label>
                        </div>
                        <div class="formulario-input-error">Seleccione una opcion</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-auto">
                        <label for="curp" class="col-form-label">CURP: </label>
                    </div>
                    <div class="col-auto" id="grupo-control-curp">
                        <input class="form-control" type="text" id="curp" name="curp" maxlength="18" size="19" value = <?php echo $curp ?>
                            style="text-transform:uppercase" placeholder="XXXXXXXXXX">
                        <div class="formulario-input-error">Verifique que sea correcto</div>
                    </div>
                </div>

            </fieldset>

            <br>

            <fieldset class="border p-2">
                <legend class="text-primary">Contacto</legend>

                <div class="mb-3 row">
                    <div class="col-auto">
                        <label for="dir1" class="col-form-label">Calle y N&uacute;mero:</label>
                    </div>
                    <div class="col-auto mb-3" id="grupo-control-calle">
                        <input class="form-control" type="text" id="dir1" name="calle" maxlength="40" size="40 " value = <?php echo $calle ?>> 
                        <div class="formulario-input-error">Verifique que sea correcto</div>
                    </div>
                    <div class="col-auto">
                        <label for="dir2" class="col-form-label">Colonia:</label>
                    </div>
                    <div class="col-auto" id="grupo-control-colonia">
                        <input class="form-control" type="text" id="dir2" name="colonia" value = <?php echo $colonia ?>>
                        <div class="formulario-input-error">Verifique que sea correcto</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-auto">
                        <label for="dir3" class="col-sm-2 col-form-label">Alcald&iacute;a: </label>
                    </div>
                    <div class="col-auto mb-3" id="grupo-control-alcaldia">
                        <select class="form-select" id="dir3" name="alcaldia">
                            <option value="" disabled>-Seleccione uno-</option>
                            <option selected value = <?php echo $_SESSION["alcaldia"] ?> > <?php echo $alcaldia ?> </option>         <!--Arreglar><-->
                            <option value="alvaro">&Aacute;lvaro Obreg&oacute;n</option>
                            <option value="azcapotzalco">Azcapotzalco</option>
                            <option value="benito">Benito Ju&aacute;rez</option>
                            <option value="coyoacan"> Coyoac&aacute;n</option>
                            <option value="cuajimalpa">Cuajimalpa de Morelos</option>
                            <option value="cuauhtemoc">Cuauht&eacute;moc</option>
                            <option value="gustavo">Gustavo A. Madero</option>
                            <option value="iztacalco">Iztacalco</option>
                            <option value="iztapalapa">Iztapalapa</option>
                            <option value="magdalena">La Magdalena Contreras</option>
                            <option value="miguel">Miguel Hidalgo</option>
                            <option value="milpa">Milpa Alta</option>
                            <option value="tlalpan">Tlalpan</option>
                            <option value="tlahuac">Tl&aacute;huac</option>
                            <option value="venustiano">Venustiano Carranza</option>
                            <option value="xochimilco">Xochimilco</option>
                        </select>
                        <div class="formulario-input-error">Seleccione una opcion</div>
                    </div>

                    <div class="col-auto">
                        <label class="col-form-label" for="dir4">C&oacute;digo Postal:</label>
                    </div>
                    <div class="col-auto mb-3" id="grupo-control-codigop">
                        <input type="text" class="form-control" id="dir4" name="codigop" maxlength="5" size="5" value = <?php echo $codigop ?>>
                        <div class="formulario-input-error">Verifique que sea correcto</div>
                    </div>

                    <div class="col-auto">
                        <label class="col-form-label" for="dir5">T&eacute;lefono o celular:</label>
                    </div>
                    <div class="col-auto" id="grupo-control-telefono">
                        <input type="tel" class="form-control" id="dir5" name="telefono" value = <?php echo $tel ?>
                            placeholder="Ej. 7771293456" maxlength="10"
                            size="11">
                        <div class="formulario-input-error">Inserte un telefono valido</div>
                    </div>

                </div>

                <div class="mb-3 row">
                    <div class="col-auto">
                        <label class="col-form-label" for="dir6">Correo electr&oacute;nico:</label>
                    </div>
                    <div class="col-auto" id="grupo-control-correo">
                        <input class="form-control" type="email" id="dir6" name="correo" value = <?php echo $correo ?>
                            maxlength="30" size="30" placeholder="name@gmail.com">
                        <div class="formulario-input-error">Inserte un correo valido</div>
                    </div>
                </div>

            </fieldset>

            <br>

            <fieldset class="border p-2">
                <legend class="text-primary">Procedencia</legend>

                <div class="mb-3 row" id="grupo-control-escuelaProcedencia">
                    <div class="col-auto">
                        <label class="col-form-label" for="escuelaProcedencia">Escuela de procedencia:
                        </label>
                    </div>
                    <div class="col-auto mb-3">
                        <select class="form-select" id="escuelaProcedencia" name="escuelaProcedencia">
                            <option value="" disabled>--Elija una opción--</option>
                            <option selected value = <?php echo $_SESSION["escuelaProcedencia"] ?> > <?php echo $escuelaProcedencia ?> </option>   <!--Arreglar><-->
                            <option value="Cecyt_1">CECyT #1 “González Vázquez Vega”</option>
                            <option value="Cecyt_2">CECyT #2 "Miguel Bernard"</option>
                            <option value="Cecyt_3">CECyT #3 "Estanislao Ramírez Ruiz"</option>
                            <option value="Cecyt_4">CECyT #4 "Lázaro Cárdenas"</option>
                            <option value="Cecyt_5">CECyT #5 "Benito Juárez García"</option>
                            <option value="Cecyt_6">CECyT #6 "Miguel Othón de Mendizábal"</option>
                            <option value="Cecyt_7">CECyT #7 "Cuauhtémoc"</option>
                            <option value="Cecyt_8">CECyT #8 "Narciso Bassols García"</option>
                            <option value="Cecyt_9">CECyT #9 "Juan de Dios Bátiz"</option>
                            <option value="Cecyt_10">CECyT #10 "Carlos Vallejo Márquez"</option>
                            <option value="Cecyt_11">CECyT #11 "Wilfrido Massieu Pérez"</option>
                            <option value="Cecyt_12">CECyT #12 "José María Morelos y Pavón"</option>
                            <option value="Cecyt_13">CECyT #13 "Ricardo Flores Magón"</option>
                            <option value="Cecyt_14">CECyT #14 "Luis Enrique Erro"</option>
                            <option value="Cecyt_15">CECyT #15 "Diódoro Antúnez Echegaray"</option>
                            <option value="Cecyt_16">CECyT #16 "Hidalgo"</option>
                            <option value="Cecyt_17">CECyT #17 "León, Guanajuato"</option>
                            <option value="Cecyt_18">CECyT #18 "Zacatecas"</option>
                            <option value="Cecyt_19">CECyT #19 "Leona Vicario"</option>
                            <option value="Cet_1">CET #1 "Walter Cross Buchanan"</option>
                            <option value="Otro">Otro</option>
                        </select>
                        <div class="formulario-input-error">Seleccione un campo</div>
                    </div>
                    <div class="col-auto" id="grupo-control-escuelaProcedenciaOtro">
                        <input class="form-control" id="form-control-otro" name="escuelaProcedenciaOtro" style="display: none;"
                            placeholder="Especifique" maxlength="30" value="">
                        <div class="formulario-input-error">Siga el formato (A-Z), (a-z)</div>
                    </div>

                    <div class="col-auto mb-3">
                        <label class="col-form-label" for="entidadProcedencia">Entidad Federativa de procedencia:
                        </label>
                    </div>
                    <div class="col-auto" id="grupo-control-entidadProcedencia">
                        <select class="form-select" id="entidadProcedencia" name="entidadProcedencia">
                            <option value="" disabled>-- Selecciona uno --</option>
                            <option selected value = <?php echo $_SESSION["entidadProcedencia"] ?>> <?php echo $entidadProcedencia ?> </option>         <!--Arreglar><-->
                            <option value="agu"> Aguascalientes </option>
                            <option value="bcn"> Baja California </option>
                            <option value="bcs"> Baja California Sur </option>
                            <option value="camp"> Campeche </option>
                            <option value="chis"> Chiapas </option>
                            <option value="chih"> Chihuahua </option>
                            <option value="cdmx"> Ciudad de M&eacute;xico </option>
                            <option value="coah"> Coahuila </option>
                            <option value="col"> Colima </option>
                            <option value="dgop"> Durango </option>
                            <option value="gto"> Guanajuato </option>
                            <option value="gro"> Guerrero </option>
                            <option value="hgo"> Hidalgo </option>
                            <option value="jal"> Jalisco </option>
                            <option value="edomex"> M&eacute;xico </option>
                            <option value="mich"> Michoac&aacute;n </option>
                            <option value="mor"> Morelos </option>
                            <option value="nay"> Nayarit </option>
                            <option value="nl"> Nuevo Le&oacute;n </option>
                            <option value="oax"> Oaxaca </option>
                            <option value="pue"> Puebla </option>
                            <option value="qro"> Quer&eacute;taro </option>
                            <option value="qroo"> Quintana Roo </option>
                            <option value="slp"> San Luis Potos&iacute; </option>
                            <option value="sin"> Sinaloa </option>
                            <option value="son"> Sonora </option>
                            <option value="tab"> Tabasco </option>
                            <option value="tamps"> Tamaulipas </option>
                            <option value="tlax"> Tlaxcala </option>
                            <option value="ver"> Veracruz </option>
                            <option value="yuc"> Yucat&aacute;n </option>
                            <option value="zac"> Zacatecas </option>
                        </select>
                        <div class="formulario-input-error">Seleccione un campo</div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-auto">
                        <label class="col-form-label" for="promedio">Promedio: </label>
                    </div>
                    <div class="col-auto mb-3" id="grupo-control-promedio">
                        <input class="form-control" type="number" id="promedio" name="promedio" min="0" max="10" step="0.01" value = <?php echo $promedio ?>>
                        <div class="formulario-input-error">Solo puede contener 2 decimales</div>
                    </div>

                    <div class="col-auto">
                        <label class="col-form-label" for="n_opcion">ESCOM fue tu:</label>
                    </div>
                    <div class="col-auto">
                        <select class="form-select" id="n_opcion" name="opcion">
                            <option selected value = <?php echo $_SESSION["opcion"] ?> > <?php echo $opcion ?> </option> <!--Arreglar><-->
                            <option value="1opcion">1ra opción</option>
                            <option value="2opcion">2da opción</option>
                            <option value="3opcion">3ra opción</option>
                            <option value="4opcion">4ta opción</option>
                        </select>
                    </div>

            </fieldset>

            <br>

            <div class="mb-3">
                <input class="btn btn-primary position-relative" type="submit" value="Enviar">
                <input class="btn btn-dark position-relative" type="reset" value="Limpiar">
            </div>

        </form>
    </div>
    <!--/section-->

    <script src="javascript/validaciones.js"></script>

</body>

</html>
