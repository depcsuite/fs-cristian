<?php
$nombreUsuario = $_POST["nombreUs"];
$emailUsuario = $_POST["emailUs"];
$passUs = md5($_POST["passUs"]);
$validoUs = "Cristian";
$emailValido = "cmitas@depcsuite.com";
$passValida = "019c9fbe91025390efb1c65ce5eee5d6";
if($nombreUsuario == $validoUs && $emailUsuario == $emailValido && $passUs == $passValida) {
    echo "Logueo exitoso";
}
else {
    echo "Datos invalidos";
}
?>