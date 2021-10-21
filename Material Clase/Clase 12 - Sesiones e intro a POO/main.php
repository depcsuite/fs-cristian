<?php
include_once("Clases/Usuario.php");
$userUno = new Usuario(111, "Luca","Mitas","luka","pass","cmitas@depcsuite.com",30,"Hombre");
//$userUno->sNombre = "Luca"; //Accediendo al atributo "sNombre" directamente, porque es public
//$userUno->sApellido = "Mitas"; //Accediendo al atributo "sNombre" directamente, porque es public
$userDos = new Usuario(2222, "Cristian","Mitas","crist","pass","cmitas@depcsuite.com",29,"Hombre");
//$userDos->sNombre = "Cristian";
//$userDos->sApellido = "Mary";
$userUno->setsNombre("NuevoNombre");
echo "El primer usuario se llama: ".$userUno->getsNombre(). " y el segundo se llama: ".$userDos->getsNombre()."<br>";
$userUno->comprar();    
$userDos->comprar();

?>