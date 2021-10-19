<?php
$archivo1 = fopen('datos.txt', 'w'); //Abre el archivo en modo append
$archivo2 = fopen('datos_personales.txt', 'a'); 
fwrite($archivo1, 'Buenas tardes...'); //Escribe en el archivo
fwrite($archivo1, 'Sumando datos...'); //Escribe en el archivo
// Todo lo que escribamos o leamos de un archivo es asumido por PHP como un "string"
// Esto significa que NO podemos dar por hecho que vayan a ser valores inherentemente numéricos}
// aun si escribimos sólo números
fclose($archivo1); //Cierra el archivo
fclose($archivo2); 
$archivo1 = fopen("datos.txt", "r");
$tamanio = filesize("datos.txt");
$contenido = fread($archivo1, $tamanio);
//$contendo = file_get_contents("datos.txt");
echo $contenido;
fclose($archivo1);
?>
