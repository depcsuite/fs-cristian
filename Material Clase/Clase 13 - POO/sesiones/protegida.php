<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location:formulario.php");
} 
echo "Bienvenido a la web protegida, ".$_SESSION["usuario"]. " , para desloguear clickeá el link:<br>";
?>
<a href="logoff.php">Salir</a>