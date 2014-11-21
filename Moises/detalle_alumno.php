<?php
include_once ('conexion.php');
$titulo = "Alumnos";
$URL = $_GET['id'];

$alumnos = mysql_query("SELECT * FROM alumnos WHERE id = $URL");


?>



<!doctype html>
<html>
	<head>

	<meta charset="UTF-8">

	<title> <?php echo $titulo; ?> </title>

</head>

<body>

	<h1> <?php echo $titulo; ?> </h1>
    
     <?php include_once('menu.php');?>
     
     <table>
     
         <tbody>
         	<tr>
                <th> Id </th>
                <th> Nombre </th>
                <th> Apellido Paterno </th>
                <th> Apellido Materno </th>
                <th> Edad </th> 
                <th> No. Cuenta </th>
                <th> Telefono </th>
                <th> Direccion </th>
         	</tr>
         </tbody>  
<?php 
	
	while ($row = mysql_fetch_array($alumnos)) {
		echo "<tr>";
		echo "<td>".$row['id'] . "</td>";
		echo "<td>".$row['nombre'] ."</td>";
		echo "<td>".$row['apellido_paterno'] ."</td>";
		echo "<td>".$row['apellido_materno'] ."</td>";
		echo "<td>".$row['edad'] ."</td>";
		echo "<td>".$row['cuenta'] ."</td>";
		echo "<td>".$row['telefono'] ."</td>";
		echo "<td>".$row['direccion'] ."</td>";
		echo "<td> <a href='detalle_alumno.php?id=".$row['id'] . "'> Ver Más </a></td>";	
		echo "</tr>";
	}    
?>
    
    </table>
</body>
</html>