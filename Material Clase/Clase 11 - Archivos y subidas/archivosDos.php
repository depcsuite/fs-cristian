<?php
//Recuperar el contenido
$contenido = file_get_contents("datos_personales.txt");
echo $contenido;

//Concatenar
$contenido .= "Ana Perez\n";

//Almacenar
file_put_contents("datos_personales.txt", $contenido);

?>
