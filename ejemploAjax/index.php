<?php
require_once("config.php");
require_once("Usuario.php");
if(isset($_POST["nombreUsuario"])) {
    $aRespuesta[] = array(
        "idu" => $_POST["idUsusario"],
        "nombreu" => $_POST["nombreU"],
        "usname" => $_POST["nombreUsuario"]);
    echo json_encode($aRespuesta);
}
else {
    $us = new Usuario();
    $listaUsuarios = $us->obtenerTodos();
    echo json_encode($listaUsuarios);
}

?>