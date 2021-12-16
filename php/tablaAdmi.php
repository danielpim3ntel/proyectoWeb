<?php
	/*$conexion = mysqli_connect("localhost:33065", "root", "", "baseProyecto");
	$sql = "SELECT * FROM alumno";
	$result = mysqli_query($conexion,$sql);
    echo "
	<table border = 1 cellspacing = 1 cellpadding = 1>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Edad</th>
		</tr>";
	while($row = mysqli_fetch_array($result)){
	echo "
		<tr>
			<td>".$row[0]."</td>
			<td>".$row[1]."</td>
			<td>".$row[2]."</td>
			<td>".$row[3]."</td>
		</tr>";
}
echo "</table>";*/
	$conexion = mysqli_connect("localhost:33065", "root", "", "baseproyecto");
	$sql = "SELECT * FROM alumno";
	$result = mysqli_query($conexion,$sql);
	echo "
	<table border = 1 cellspacing = 1 cellpadding = 1>
		<tr>
			 <td>Boleta</td>
            <td>Nombre</td>
            <td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Fecha de Nacimiento</td>
            <td>Genero</td>
            <td>Curp</td>
            <td>Calle</td>
            <td>Colonia</td>
            <td>Alcaldía</td>
            <td>Código Postal</td>
            <td>Teléfono</td>
            <td>Correo Electrónico</td>
            <td>Escuela de Procedencia</td>
            <td>Entidad de Procedencia</td>
            <td>Promedio</td>
            <td>Opción</td>
		</tr>";
		while($row = mysqli_fetch_array($result)){
	echo "
		<tr>
			<td>".$row[0]."</td>
			<td>".$row[1]."</td>
			<td>".$row[2]."</td>
			<td>".$row[3]."</td>
			<td>".$row[4]."</td>
			<td>".$row[5]."</td>
			<td>".$row[6]."</td>
			<td>".$row[7]."</td>
			<td>".$row[8]."</td>
			<td>".$row[9]."</td>
			<td>".$row[10]."</td>
			<td>".$row[11]."</td>
			<td>".$row[12]."</td>
			<td>".$row[13]."</td>
			<td>".$row[14]."</td>
			<td>".$row[15]."</td>
			<td>".$row[16]."</td>
		</tr>";
}
?>
