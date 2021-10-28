<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'cursofulls');

if ($mysqli->connect_errno) {
// La conexión falló. ¿Que vamos a hacer? 
echo "Error: Fallo al conectarse a MySQL debido a: \n";
    	echo "Errno: " . $mysqli->connect_errno . "\n";
    	exit;
}
$resultado = $mysqli->query("SELECT * FROM clientes;");
while($f = $resultado->fetch_object()) {
    echo $f->nombre."<br>";
}


$mysqli->close();




?>
