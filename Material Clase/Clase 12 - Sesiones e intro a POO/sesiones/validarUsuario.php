<?php
include_once("funciones.php");

if(validarUs($_POST["nombreUs"],$_POST["passUs"]) == true) {
    session_start();
    $_SESSION["usuario"] = $_POST["nombreUs"];
    header("Location:protegida.php");

}
else {
    header("Location:formulario.php");
}
?>