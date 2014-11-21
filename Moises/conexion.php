
<?php
	
	$enlace = mysql_connect('localhost', 'root','root');

if (!$enlace){
	die('No se pudo conectar:' . mysql_error());
}

$bd = mysql_select_db('pruebag', $enlace);
mysql_set_charset('utf8', $enlace); //para agregar los caracteres

?>