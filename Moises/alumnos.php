<?php
include_once ('conexion.php');
$titulo = " Listado de Alumnos";


$alumnos = mysql_query("SELECT * FROM alumnos");


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
                <th> Nombre Completo </th>
                <th> No. Cuenta </th>
                <th> Eliminiar</th>
         	</tr>
         </tbody>  
<?php 
	
	while ($row = mysql_fetch_array($alumnos)) {
		echo "<tr>";
		echo "<td>".$row['id'] . "</td>";
		echo "<td>".$row['nombre'] ." " .$row['apellido_paterno'] ." ".$row['apellido_materno'] ."</td>";
		echo "<td>".$row['cuenta'] ."</td>";
		echo "<td> <a href='eliminar_alumno.php?id=".$row['id'] . "'>Eliminar</a></td>";
		
		echo "</tr>";
	}    
?>
    
    </table>
</body>
</html>