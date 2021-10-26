<?php
include_once("Clases/Alumno.php");
include_once("Clases/Docente.php");
$alUno = new Alumno("Luca",35729101,30,"Argentino");
$alUno->imprimir();
$docUno = new Docente("Cristian", 1, 30, "Checo");
?>