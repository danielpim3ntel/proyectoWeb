<?php
	$conexion = mysqli_connect("localhost", "root", "", "baseProyecto");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>Administrador</title> 
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
    <br/>
<div class="container" >
    <table class="table table-striped">
        <thead class="text-center">
        	<tr>
            	<th>Boleta</th>
            	<th>Nombre</th>
            	<th>Apellido Paterno</th>
            	<th>Apellido Materno</th>
            	<th>Curp</th>
            	<th colspan="2">Funciones</th>
        	</tr>
        </thead>
        <?php
            $sql = "SELECT * FROM alumno";
            $result = mysqli_query($conexion,$sql);

            while($mostrar = mysqli_fetch_array($result)){  
        ?>
        <tbody class="text-center">
        	<tr>
        		<td><?php echo $mostrar['boleta'] ?></td>
            	<td><?php echo $mostrar['nombre'] ?></td>
            	<td><?php echo $mostrar['apePaterno'] ?></td>
            	<td><?php echo $mostrar['apeMaterno'] ?></td>
            	<td><?php echo $mostrar['curp'] ?></td>
        		<td>
                    <input class="btn btn-primary position-relative" type=submit value="Borrar" onclick="location.href = 'borrarAdmin.php?boleta=<?php echo $mostrar['boleta']?>'";>
                </td>
        		<td>
                    <input class="btn btn-primary position-relative" type=submit value="Editar" onclick="location.href = 'editarAdmin.php?boleta=<?php echo $mostrar['boleta']?>'";>
                </td>
        	</tr>
        </tbody>
        <?php 
    		} 
    	?>
    </table>
   </div>
</body>
</html>