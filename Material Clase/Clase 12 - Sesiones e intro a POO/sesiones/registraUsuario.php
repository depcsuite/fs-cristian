<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Definición
include_once("funciones.php");
regUsuario($_POST["nombreUs"], $_POST["emailUs"], $_POST["passUs"]);
echo "Usuario ".$_POST["nombreUs"]. " registrado con éxito<br>";
echo "<a href=\"registro.php\">Registrar otro</a>";
?>