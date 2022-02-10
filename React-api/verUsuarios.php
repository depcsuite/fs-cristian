<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
require_once("config.php");
require_once("usuario.php");
$us = new Usuario();
$listaUsuarios = $us->obtenerTodos();
echo json_encode($listaUsuarios);
?>
