<?php
$titulo = "Crear Alumnos";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8" />
<title><?php echo $titulo; ?></title>
</head>
<body>

<h1> <?php echo $titulo; ?> </h1>

<?php include_once ('menu.php');?>

<form action="insertar_alumno.php" method="POST">

	<label for="nombre">Nombre</label>
    <input type="text" name="nombre" value"" id="nombre"></br>
    
    <label for="apellido_paterno">Apellido Paterno</label>
    <input type="text" name="apellido_paterno" value"" id="apellido_paterno"></br>
    
    <label for="apellido_materno">Apellido Materno</label>
    <input type="text" name="apellido_materno" value"" id="apellido_materno"></br>
    
    <label for="edad">Edad</label>
    <input type="text" name="edad" value"" id="edad"></br>
    
    <label for="cuenta">No. Cuenta</label>
    <input type="text" name="cuenta" value"" id="cuenta"></br>
    
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" value"" id="telefono"></br>
    
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" value"" id="direccion"></br>
    
    
    
    
    <p><input type="submit" value="Continuar"></p>
    
</form>


</body>
</html>