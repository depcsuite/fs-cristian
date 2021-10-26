<?php
if (!isset($_COOKIE["usuario"])) {
    header("Location:formulario.php");
} 
echo "Bienvenido a la web protegida, ".$_COOKIE["usuario"]. " , para desloguear clickeá el link:<br>";
?>
<a href="logoff.php">Salir</a>