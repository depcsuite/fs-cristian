<?php
$archivo1 = fopen("datos_personales.txt", "r");
if ($archivo1) {
    while (($fila = fgets($archivo1)) == true) {
        echo $fila."<br>"; 
    }
}
fclose($archivo1);
?>  
