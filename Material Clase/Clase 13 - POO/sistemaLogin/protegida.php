<?php
include_once("funciones.php");
checkLogin();
echo "Bienvenido a la web protegida, ".$_SESSION["usuario"]. " , para desloguear clickeá el link:<br>";
?>
<a href="logoff.php">Salir</a>